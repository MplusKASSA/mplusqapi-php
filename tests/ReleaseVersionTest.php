<?php declare(strict_types=1);

require_once __DIR__.'/../release-version.php';

use PHPUnit\Framework\TestCase;

final class ReleaseVersionTest extends TestCase
{
    public function testNormalReleaseKeepsTheInstallerVersionLink(): void
    {
        self::assertSame([
            'api' => '68.0.4',
            'version' => '68.0.4',
            'source' => 'installers-68.0.4-release',
            'tag' => 'v1.68.0.4',
        ], SdkReleaseVersion::parseInstallerTag('installers-68.0.4-release'));
    }

    public function testPatchReleaseUsesOriginalInstallerArtifacts(): void
    {
        self::assertSame([
            'api' => '68.0.3',
            'version' => '68.0.3-p1',
            'source' => 'installers-68.0.3-release',
            'tag' => 'v1.68.0.3-p1',
        ], SdkReleaseVersion::parseInstallerTag('installers-68.0.3-p1-release'));
    }

    public function testPatchOrderingPreservesTheNextQlineRelease(): void
    {
        $versions = ['1.68.0.3', '1.68.0.3-p1', '1.68.0.3-p2', '1.68.0.3-p10', '1.68.0.4'];
        foreach ($versions as $index => $version) {
            self::assertFalse(SdkReleaseVersion::isOlder($version, $version));
            if ($index > 0) {
                self::assertTrue(SdkReleaseVersion::isOlder($versions[$index - 1], $version));
                self::assertFalse(SdkReleaseVersion::isOlder($version, $versions[$index - 1]));
            }
        }
    }

    public function testLatestInstallerTagIncludesPatchReleases(): void
    {
        $tags = ['installers-68.0.3-p10-release', 'installers-68.0.3-release', 'installers-68.0.3-p2-release', 'dev-999'];
        self::assertSame('68.0.3-p10', SdkReleaseVersion::latest($tags, 'installer'));
        $tags[] = 'installers-68.0.4-release';
        self::assertSame('68.0.4', SdkReleaseVersion::latest($tags, 'installer'));
    }

    public function testLatestSdkTagIncludesPatchesAndIgnoresUnrelatedTags(): void
    {
        $tags = ['v1.68.0.3-p10', 'v1.68.0.3', 'v1.68.0.3-p2', 'v99.0.0-beta1', 'installers-99.0.0-release'];
        self::assertSame('1.68.0.3-p10', SdkReleaseVersion::latest($tags, 'sdk'));
        $tags[] = 'v1.68.0.4';
        self::assertSame('1.68.0.4', SdkReleaseVersion::latest($tags, 'sdk'));
        self::assertSame('', SdkReleaseVersion::latest([], 'sdk'));
    }

    public function testMalformedPatchTagsAreRejected(): void
    {
        foreach (['installers-68.0.3-p0-release', 'installers-68.0.3-p01-release', 'installers-68.0.3.1-release', 'installers-68.0.3-rc1-release', 'installers-68.0.3-p1-release;echo bad'] as $tag) {
            try {
                SdkReleaseVersion::parseInstallerTag($tag);
                self::fail('Expected rejection for '.$tag);
            } catch (InvalidArgumentException $exception) {
                self::assertStringContainsString('Invalid installer release tag', $exception->getMessage());
            }
        }
    }

    public function testHistoricalMappingStillAcceptsNormalReleases(): void
    {
        self::assertSame('67.8.9', SdkReleaseVersion::parseInstallerTag('installers-67.8.9-release')['api']);
        self::assertSame('v1.67.9.0-p1', SdkReleaseVersion::parseInstallerTag('installers-67.9.0-p1-release')['tag']);
    }

    public function testAmbiguousPatchOfHistoricalMappingIsRejected(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('historical 67.x release mapping');
        SdkReleaseVersion::parseInstallerTag('installers-67.8.9-p1-release');
    }
}
