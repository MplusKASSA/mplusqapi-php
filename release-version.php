<?php declare(strict_types=1);

final class SdkReleaseVersion
{
    /** @return array{api: string, version: string, source: string, tag: string} */
    public static function parseInstallerTag(string $tag): array
    {
        if (!preg_match('/^installers-(\d+(?:\.\d+){1,2})(-p[1-9]\d*)?-release$/D', $tag, $matches)) {
            throw new InvalidArgumentException('Invalid installer release tag: '.$tag);
        }

        $api = $matches[1];
        $patch = $matches[2] ?? '';
        if ($patch !== '' && str_starts_with($api, '67.') && version_compare($api, '67.9.0', '<')) {
            throw new InvalidArgumentException('Patch tags are not supported for the historical 67.x release mapping.');
        }

        return [
            'api' => $api,
            'version' => $api.$patch,
            'source' => 'installers-'.$api.'-release',
            'tag' => 'v1.'.$api.$patch,
        ];
    }

    public static function isOlder(string $candidate, string $latest): bool
    {
        return version_compare(ltrim($candidate, 'v'), ltrim($latest, 'v'), '<');
    }

    /** @param list<string> $tags */
    public static function latest(array $tags, string $type): string
    {
        if (!in_array($type, ['installer', 'sdk'], true)) {
            throw new InvalidArgumentException('Unknown release tag type.');
        }

        $latest = '';
        foreach ($tags as $tag) {
            $tag = trim($tag);
            if ($type === 'installer') {
                if (!preg_match('/^installers-(\d+(?:\.\d+){1,2}(?:-p[1-9]\d*)?)-release$/D', $tag, $matches)) {
                    continue;
                }
                $version = $matches[1];
            } else {
                if (!preg_match('/^v(\d+(?:\.\d+){1,3}(?:-p[1-9]\d*)?)$/D', $tag, $matches)) {
                    continue;
                }
                $version = $matches[1];
            }

            if ($latest === '' || self::isOlder($latest, $version)) {
                $latest = $version;
            }
        }

        return $latest;
    }
}

if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    try {
        $command = $argv[1] ?? '';
        if ($command === 'parse') {
            $release = SdkReleaseVersion::parseInstallerTag($argv[2] ?? '');
            echo implode(' ', $release), PHP_EOL;
        } elseif ($command === 'latest') {
            echo SdkReleaseVersion::latest(explode("\n", stream_get_contents(STDIN)), $argv[2] ?? ''), PHP_EOL;
        } elseif ($command === 'is-older' && count($argv) === 4) {
            echo SdkReleaseVersion::isOlder($argv[2], $argv[3]) ? 'yes' : 'no';
            echo PHP_EOL;
        } else {
            throw new InvalidArgumentException('Expected parse TAG, latest installer|sdk, or is-older VERSION VERSION.');
        }
    } catch (InvalidArgumentException $exception) {
        fwrite(STDERR, $exception->getMessage().PHP_EOL);
        exit(1);
    }
}
