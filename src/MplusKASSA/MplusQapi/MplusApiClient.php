<?php declare(strict_types=1);
// Generated code
namespace MplusKASSA\MplusQapi;
use MplusKASSA\Wsdl2PhpGenerator\BaseSoapClient;
use Brick\Math\BigDecimal;
use GuzzleHttp\HandlerStack;
class MplusApiClient extends BaseSoapClient {
    public function __construct(
        string $apiServer,
        int $apiPort,
        string $ident,
        string $secret,
        ?float $connectTimeout = null,
        ?float $timeout = null,
        bool $verify = true,
        ?HandlerStack $handlerStack = null)
    {
        parent::__construct($apiServer, $apiPort, $ident, $secret, $connectTimeout, $timeout, $verify, $handlerStack);
        $this->parser = new SoapParser();
    }
    public static function getArrayType(string $parentFQN, string $propertyName): ?string {
        static $arrayTypes = array(
 NumberList::class . ':number' => 'int',
 CategoryIdSet::class . ':category' => 'int',
 CustomField::class . ':multiSelectInt' => 'int',
 CustomFieldList::class . ':customField' => 'MplusKASSA\MplusQapi\CustomField',
 EmployeeList::class . ':employee' => 'MplusKASSA\MplusQapi\Employee',
 ImageList::class . ':image' => 'MplusKASSA\MplusQapi\Image',
 RelationArticleDiscountList::class . ':relationArticleDiscount' => 'MplusKASSA\MplusQapi\RelationArticleDiscount',
 VatGroupList::class . ':vatGroup' => 'MplusKASSA\MplusQapi\VatGroup',
 IdList::class . ':id' => 'string',
 IdSet::class . ':id' => 'string',
 RelationList::class . ':relation' => 'MplusKASSA\MplusQapi\Relation',
 Relation::class . ':branchesNonPurchasable' => 'int',
 Relation::class . ':cardNumbers' => 'string',
 WorkplaceIdentifierSet::class . ':workplaceIdentifier' => 'MplusKASSA\MplusQapi\WorkplaceIdentifier',
 WorkplaceIdentifierList::class . ':workplaceIdentifier' => 'MplusKASSA\MplusQapi\WorkplaceIdentifier',
 BranchAccountNumberList::class . ':branchAccountNumber' => 'MplusKASSA\MplusQapi\BranchAccountNumber',
 BranchCostCenterNumberList::class . ':branchCostCenterNumber' => 'MplusKASSA\MplusQapi\BranchCostCenterNumber',
 GiftcardType::class . ':branchNumbers' => 'int',
 GiftcardType::class . ':availableValues' => 'int',
 EftReceipt::class . ':line' => 'MplusKASSA\MplusQapi\EftReceiptLine',
 ExternalPaymentTransactionDetails::class . ':receiptTexts' => 'MplusKASSA\MplusQapi\ExternalPaymentReceiptText',
 ExternalPaymentTransactionDetails::class . ':receiptFooters' => 'MplusKASSA\MplusQapi\ExternalPaymentReceiptFooter',
 PaymentList::class . ':payment' => 'MplusKASSA\MplusQapi\Payment',
 PaymentMethodList::class . ':paymentMethod' => 'MplusKASSA\MplusQapi\PaymentMethod',
 BranchFilter::class . ':branchNumbers' => 'int',
 BranchGroupFilter::class . ':branchGroups' => 'int',
 OwnerLabelFilter::class . ':ownerLabels' => 'string',
 TimelineEventEntityList::class . ':entity' => 'MplusKASSA\MplusQapi\TimelineEventEntity',
 TimelineEventCategoryList::class . ':category' => 'string',
 TimelineEventTypeList::class . ':type' => 'string',
 TimelineEventList::class . ':event' => 'MplusKASSA\MplusQapi\TimelineEvent',
 ContractFrequencyList::class . ':contractFrequency' => 'string',
 SalesLineContractLineList::class . ':contractLine' => 'MplusKASSA\MplusQapi\SalesLineContractLine',
 OrderList::class . ':order' => 'MplusKASSA\MplusQapi\Order',
 OrderTypeList::class . ':orderType' => 'string',
 YearNumberList::class . ':yearNumber' => 'MplusKASSA\MplusQapi\YearNumber',
 LineList::class . ':line' => 'MplusKASSA\MplusQapi\Line',
 LineInputList::class . ':line' => 'MplusKASSA\MplusQapi\LineInput',
 TextList::class . ':text' => 'MplusKASSA\MplusQapi\Text',
 VoucherIdList::class . ':voucherId' => 'MplusKASSA\MplusQapi\VoucherId',
 VoucherViewList::class . ':voucherView' => 'MplusKASSA\MplusQapi\VoucherView',
 VoucherIssuanceRedeemList::class . ':voucherIssuanceRedeem' => 'MplusKASSA\MplusQapi\VoucherIssuanceRedeem',
 VoucherIssuanceList::class . ':voucherIssuance' => 'MplusKASSA\MplusQapi\VoucherIssuance',
 VoucherIssuanceCompactList::class . ':voucherIssuanceCompact' => 'MplusKASSA\MplusQapi\VoucherIssuanceCompact',
 VoucherIssuanceCandidate::class . ':externalScanCodes' => 'string',
 VoucherIssuanceCandidateList::class . ':voucherIssuanceCandidate' => 'MplusKASSA\MplusQapi\VoucherIssuanceCandidate',
 VoucherRedeemCountList::class . ':voucherRedeemCount' => 'MplusKASSA\MplusQapi\VoucherRedeemCount',
 UnappliedVoucherIssuanceList::class . ':unappliedVoucherIssuance' => 'MplusKASSA\MplusQapi\UnappliedVoucherIssuance',
 VoucherIssuanceRedeemableList::class . ':voucherIssuanceRedeemable' => 'MplusKASSA\MplusQapi\VoucherIssuanceRedeemable',
 AnswerList::class . ':answer' => 'MplusKASSA\MplusQapi\Answer',
 TransactionNumberList::class . ':transactionNumber' => 'MplusKASSA\MplusQapi\TransactionNumber',
 EmployeeNumberList::class . ':employeeNumber' => 'int',
 ApiIdentList::class . ':apiIdent' => 'string',
 JsonValueList::class . ':data' => 'string',
 NumberSet::class . ':number' => 'int',
 SalesPriceList::class . ':salesPrice' => 'MplusKASSA\MplusQapi\SalesPrice',
 PriceGroupList::class . ':priceGroup' => 'MplusKASSA\MplusQapi\PriceGroup',
 MistakeList::class . ':mistake' => 'MplusKASSA\MplusQapi\Mistake',
 GetRelationsRequest::class . ':relationNumbers' => 'int',
 CardCategoryList::class . ':cardCategory' => 'MplusKASSA\MplusQapi\CardCategory',
 CardCategoryV2List::class . ':cardCategory' => 'MplusKASSA\MplusQapi\CardCategoryV2',
 GetRelationPointsRequest::class . ':relationNumbers' => 'int',
 getEmployeesRequest::class . ':employeeNumbers' => 'int',
 TableNumberList::class . ':tableNumber' => 'MplusKASSA\MplusQapi\TableNumber',
 SubTableList::class . ':subTable' => 'MplusKASSA\MplusQapi\SubTableState',
 MoveTableLineList::class . ':line' => 'MplusKASSA\MplusQapi\MoveTableLine',
 CourseList::class . ':course' => 'MplusKASSA\MplusQapi\Course',
 LineChangeList::class . ':lineChange' => 'MplusKASSA\MplusQapi\LineChange',
 OrderChangeList::class . ':orderChange' => 'MplusKASSA\MplusQapi\OrderChange',
 GetOrderChangesRequest::class . ':branchNumbers' => 'int',
 GetOrderChangesRequest::class . ':employeeNumbers' => 'int',
 GetOrderChangesRequest::class . ':relationNumbers' => 'int',
 GetOrderChangesRequest::class . ':articleNumbers' => 'int',
 GetOrderChangesRequest::class . ':articleTurnoverGroups' => 'int',
 OrderPaymentList::class . ':orderPayment' => 'MplusKASSA\MplusQapi\OrderPayment',
 LineChangeEventList::class . ':lineChangeEvent' => 'MplusKASSA\MplusQapi\LineChangeEvent',
 OrderHistoryList::class . ':orderHistory' => 'MplusKASSA\MplusQapi\OrderHistory',
 OrderHistoryOrderDetailsList::class . ':salesOrderHistory' => 'MplusKASSA\MplusQapi\OrderHistoryOrderDetails',
 OrderHistoryOrderDetailsList::class . ':externalSalesOrderHistory' => 'MplusKASSA\MplusQapi\OrderHistoryOrderDetails',
 OrderHistoryOrderDetailsList::class . ':repeatSalesOrderHistory' => 'MplusKASSA\MplusQapi\OrderHistoryOrderDetails',
 OrderHistoryOrderDetailsList::class . ':tableOrderHistory' => 'MplusKASSA\MplusQapi\OrderHistoryOrderDetails',
 OrderHistoryOrderDetailsList::class . ':cafeteriaOrderHistory' => 'MplusKASSA\MplusQapi\OrderHistoryOrderDetails',
 GetOrderHistoryRequest::class . ':branchNumbers' => 'int',
 GetOrderHistoryRequest::class . ':employeeNumbers' => 'int',
 GetOrderHistoryRequest::class . ':relationNumbers' => 'int',
 OrderDeliveryLineList::class . ':line' => 'MplusKASSA\MplusQapi\OrderDeliveryLine',
 OrderCategory::class . ':orderCategoryDependencyNumbers' => 'int',
 ReceiptList::class . ':receipt' => 'MplusKASSA\MplusQapi\Receipt',
 GetReceiptsRequest::class . ':branchNumbers' => 'int',
 GetReceiptsRequest::class . ':employeeNumbers' => 'int',
 GetReceiptsRequest::class . ':relationNumbers' => 'int',
 GetReceiptsRequest::class . ':supplierRelationNumbers' => 'int',
 GetReceiptsRequest::class . ':articleNumbers' => 'int',
 GetReceiptsRequest::class . ':articleTurnoverGroups' => 'int',
 GetReceiptsRequest::class . ':receiptIds' => 'string',
 JournalFilterList::class . ':journalFilter' => 'string',
 TurnoverGroupList::class . ':turnoverGroup' => 'MplusKASSA\MplusQapi\TurnoverGroup',
 CashCountLineList::class . ':cashCountLine' => 'MplusKASSA\MplusQapi\CashCountLine',
 CashCountExtraWorkplaceList::class . ':cashCountExtraWorkplace' => 'MplusKASSA\MplusQapi\CashCountExtraWorkplace',
 CashCount::class . ':extraWorkplaceNumbers' => 'int',
 CashCountList::class . ':cashCount' => 'MplusKASSA\MplusQapi\CashCount',
 JournalList::class . ':journal' => 'MplusKASSA\MplusQapi\Journal',
 GetJournalsRequest::class . ':branchNumbers' => 'int',
 FinancialGroup::class . ':workplaceNumbers' => 'int',
 FinancialGroupList::class . ':financialGroup' => 'MplusKASSA\MplusQapi\FinancialGroup',
 CashDrawerCountLineDenominationList::class . ':cashDrawerCountLineDenomination' => 'MplusKASSA\MplusQapi\CashDrawerCountLineDenomination',
 CashDrawerCountLineList::class . ':cashDrawerCountLine' => 'MplusKASSA\MplusQapi\CashDrawerCountLine',
 CashDrawerCountList::class . ':cashDrawerCount' => 'MplusKASSA\MplusQapi\CashDrawerCount',
 CashDrawerBalancingList::class . ':cashDrawerBalancing' => 'MplusKASSA\MplusQapi\CashDrawerBalancing',
 AllergenList::class . ':allergen' => 'MplusKASSA\MplusQapi\NutritionalCharacteristic',
 DietRestrictionList::class . ':dietRestriction' => 'MplusKASSA\MplusQapi\NutritionalCharacteristic',
 LinkedArticleList::class . ':linkedArticle' => 'MplusKASSA\MplusQapi\LinkedArticle',
 BarcodeList::class . ':barcode' => 'MplusKASSA\MplusQapi\Barcode',
 PreparationMethodList::class . ':preparationMethod' => 'MplusKASSA\MplusQapi\PreparationMethod',
 ComponentArticleList::class . ':componentArticle' => 'MplusKASSA\MplusQapi\ComponentArticle',
 ArticleList::class . ':article' => 'MplusKASSA\MplusQapi\Article',
 SortOrderGroupList::class . ':sortOrderGroup' => 'MplusKASSA\MplusQapi\SortOrderGroup',
 Product::class . ':groupNumbers' => 'int',
 ProductList::class . ':product' => 'MplusKASSA\MplusQapi\Product',
 GetProductsRequest::class . ':articleNumbers' => 'int',
 GetProductsRequest::class . ':groupNumbers' => 'int',
 GetProductsRequest::class . ':productNumbers' => 'int',
 ArticleVariantList::class . ':variant' => 'MplusKASSA\MplusQapi\ArticleVariant',
 ArticleVariantSupplierList::class . ':supplier' => 'MplusKASSA\MplusQapi\ArticleVariantSupplier',
 ArticleStock::class . ':subArticle' => 'MplusKASSA\MplusQapi\ArticleStock',
 ArticleNumberList::class . ':articleNumbers' => 'int',
 BranchNumberList::class . ':branchNumber' => 'int',
 GetStockHistoryV2Request::class . ':branchNumbers' => 'int',
 GetArticleGroupsRequest::class . ':groupNumbers' => 'int',
 ArticleGroupList::class . ':articleGroups' => 'MplusKASSA\MplusQapi\ArticleGroup',
 GetArticleGroupChangesRequest::class . ':groupNumbers' => 'int',
 ChangedArticleGroupList::class . ':changedArticleGroups' => 'MplusKASSA\MplusQapi\ChangedArticleGroup',
 MessageList::class . ':message' => 'MplusKASSA\MplusQapi\Message',
 ShiftList::class . ':shift' => 'MplusKASSA\MplusQapi\Shift',
 GetShiftsRequest::class . ':branchNumbers' => 'int',
 GetShiftsRequest::class . ':employeeNumbers' => 'int',
 PurchaseOrderLineList::class . ':line' => 'MplusKASSA\MplusQapi\PurchaseOrderLine',
 PurchaseOrderList::class . ':purchaseOrder' => 'MplusKASSA\MplusQapi\PurchaseOrder',
 GetPurchaseOrdersRequest::class . ':branchNumbers' => 'int',
 GetPurchaseOrdersRequest::class . ':employeeNumbers' => 'int',
 GetPurchaseOrdersRequest::class . ':relationNumbers' => 'int',
 GetPurchaseOrdersRequest::class . ':articleNumbers' => 'int',
 GetPurchaseOrdersRequest::class . ':articleTurnoverGroups' => 'int',
 GetPurchaseOrdersRequest::class . ':purchaseOrderStates' => 'string',
 PurchaseOrderV2LineList::class . ':line' => 'MplusKASSA\MplusQapi\PurchaseOrderV2Line',
 PurchaseOrderV2List::class . ':purchaseOrder' => 'MplusKASSA\MplusQapi\PurchaseOrderV2',
 GetPurchaseOrdersV2Request::class . ':branchNumbers' => 'int',
 GetPurchaseOrdersV2Request::class . ':employeeNumbers' => 'int',
 GetPurchaseOrdersV2Request::class . ':relationNumbers' => 'int',
 GetPurchaseOrdersV2Request::class . ':articleNumbers' => 'int',
 GetPurchaseOrdersV2Request::class . ':articleTurnoverGroups' => 'int',
 GetPurchaseOrdersV2Request::class . ':purchaseOrderStates' => 'string',
 SavePurchaseOrderV2LineList::class . ':line' => 'MplusKASSA\MplusQapi\SavePurchaseOrderV2Line',
 PurchaseDeliveryLineList::class . ':line' => 'MplusKASSA\MplusQapi\PurchaseDeliveryLine',
 PurchaseDeliveryList::class . ':purchaseDelivery' => 'MplusKASSA\MplusQapi\PurchaseDelivery',
 GetPurchaseDeliveriesRequest::class . ':branchNumbers' => 'int',
 GetPurchaseDeliveriesRequest::class . ':employeeNumbers' => 'int',
 GetPurchaseDeliveriesRequest::class . ':relationNumbers' => 'int',
 GetPurchaseDeliveriesRequest::class . ':articleNumbers' => 'int',
 GetPurchaseDeliveriesRequest::class . ':articleTurnoverGroups' => 'int',
 PurchaseDeliveryV2LineList::class . ':line' => 'MplusKASSA\MplusQapi\PurchaseDeliveryV2Line',
 GetPurchaseDeliveriesV2Request::class . ':branchNumbers' => 'int',
 GetPurchaseDeliveriesV2Request::class . ':employeeNumbers' => 'int',
 GetPurchaseDeliveriesV2Request::class . ':relationNumbers' => 'int',
 GetPurchaseDeliveriesV2Request::class . ':articleNumbers' => 'int',
 GetPurchaseDeliveriesV2Request::class . ':articleTurnoverGroups' => 'int',
 PurchaseDeliveryV2List::class . ':purchaseDelivery' => 'MplusKASSA\MplusQapi\PurchaseDeliveryV2',
 SavePurchaseDeliveryV2LineList::class . ':line' => 'MplusKASSA\MplusQapi\SavePurchaseDeliveryV2Line',
 CardLayoutFieldList::class . ':cardLayoutField' => 'MplusKASSA\MplusQapi\CardLayoutField',
 RetailSpaceRentalList::class . ':retailSpaceRental' => 'MplusKASSA\MplusQapi\RetailSpaceRental',
 EntityTypeList::class . ':entityType' => 'string',
 OverviewFilterList::class . ':filter' => 'MplusKASSA\MplusQapi\OverviewFilter',
 OverviewRequest::class . ':selectFieldNameList' => 'string',
 OverviewRequest::class . ':filterList' => 'MplusKASSA\MplusQapi\OverviewFilter',
 SimpleImageList::class . ':image' => 'MplusKASSA\MplusQapi\SimpleImage',
 OverviewFieldList::class . ':fieldList' => 'MplusKASSA\MplusQapi\OverviewField',
 OverviewList::class . ':overview' => 'MplusKASSA\MplusQapi\OverviewFieldList',
 GetOverviewErrorList::class . ':errors' => 'MplusKASSA\MplusQapi\GetOverviewError',
 OverviewFieldsField::class . ':selectValueList' => 'MplusKASSA\MplusQapi\FieldSelectValue',
 OverviewFieldsList::class . ':overviewFields' => 'MplusKASSA\MplusQapi\OverviewFieldsField',
 GetOverviewFieldsErrorList::class . ':errors' => 'MplusKASSA\MplusQapi\GetOverviewFieldsError',
 UpdateBatchFieldList::class . ':fieldList' => 'MplusKASSA\MplusQapi\UpdateBatchField',
 UpdateBatchRequest::class . ':numbers' => 'int',
 UpdateBatchErrorList::class . ':errors' => 'MplusKASSA\MplusQapi\UpdateBatchError',
 KitchenTicketLineList::class . ':kitchenTicketLine' => 'MplusKASSA\MplusQapi\KitchenTicketLine',
 KitchenTicketCourseList::class . ':kitchenTicketCourse' => 'MplusKASSA\MplusQapi\KitchenTicketCourse',
 KitchenTicketList::class . ':kitchenTicket' => 'MplusKASSA\MplusQapi\KitchenTicket',
 StockCorrectionList::class . ':correction' => 'MplusKASSA\MplusQapi\StockCorrection',
 PurchaseBook::class . ':entries' => 'MplusKASSA\MplusQapi\PurchaseBookEntry',
 AddToPurchaseBookRequest::class . ':entries' => 'MplusKASSA\MplusQapi\PurchaseBookEntry',
 GetStockCorrectionsRequest::class . ':employeeNumbers' => 'int',
 GetStockCorrectionsRequest::class . ':branchNumbers' => 'int',
 GetStockCorrectionsRequest::class . ':articleNumbers' => 'int',
 StockCorrectionLineV2List::class . ':stockCorrectionLine' => 'MplusKASSA\MplusQapi\StockCorrectionLineV2',
 StockCorrectionV2List::class . ':stockCorrection' => 'MplusKASSA\MplusQapi\StockCorrectionV2',
 NutritionalCharacteristicsInput::class . ':allergenList' => 'MplusKASSA\MplusQapi\NutritionalCharacteristicInput',
 NutritionalCharacteristicsInput::class . ':dietRestrictionList' => 'MplusKASSA\MplusQapi\NutritionalCharacteristicInput',
 PreparationMethodItemList::class . ':preparationMethodItem' => 'MplusKASSA\MplusQapi\PreparationMethodItem',
 PreparationMethodGroupList::class . ':preparationMethodGroup' => 'MplusKASSA\MplusQapi\PreparationMethodGroup',
 ArticlePreparationMethodGroups::class . ':preparationMethodGroupNumbers' => 'int',
 ArticlePreparationMethodGroupsList::class . ':articlePreparationMethodGroups' => 'MplusKASSA\MplusQapi\ArticlePreparationMethodGroups',
 UpdateArticlePreparationMethodGroupsRequest::class . ':preparationMethodGroupNumbers' => 'int',
 PlaceTableOrderLineElem::class . ':preparationList' => 'MplusKASSA\MplusQapi\PlaceTableOrderLineElem',
 PlaceTableOrderReq::class . ':lines' => 'MplusKASSA\MplusQapi\PlaceTableOrderLineElem',
 PlaceTableOrderReq::class . ':payments' => 'MplusKASSA\MplusQapi\PlaceTableOrderPaymentElem',
 PlaceTableOrderReq::class . ':scannedVoucherIssuanceCodes' => 'string',
 TapTickTotalsRequest::class . ':branchNumbers' => 'int',
 BranchTapTickTotals::class . ':totals' => 'MplusKASSA\MplusQapi\TapTickTotal',
 TapTickHistoryRequest::class . ':branchFilter' => 'int',
 CreateTodoListRequest::class . ':entries' => 'MplusKASSA\MplusQapi\TodoListEntry',
 SaveTodoListRequest::class . ':entries' => 'MplusKASSA\MplusQapi\TodoListEntry',
 SaveTodoListV2Request::class . ':entries' => 'MplusKASSA\MplusQapi\TodoListEntry',
 AddToTodoListRequest::class . ':entries' => 'MplusKASSA\MplusQapi\TodoListEntry',
 SavePreparationMethodGroupRequest::class . ':preparationMethodItems' => 'MplusKASSA\MplusQapi\SavePreparationMethodItem',
 DeterminePricingRequest::class . ':lines' => 'MplusKASSA\MplusQapi\PlaceTableOrderLineElem',
 DeterminePricingRequest::class . ':scannedVoucherIssuanceCodes' => 'string',
 DeterminePricingResponseLine::class . ':subLines' => 'MplusKASSA\MplusQapi\DeterminePricingResponseLine',
 SaveArticleBranchDeviationsRequest::class . ':articleBranchDeviationLines' => 'MplusKASSA\MplusQapi\ArticleBranchDeviationLine',
 UpdateArticleNutrientsRequest::class . ':nutrients' => 'MplusKASSA\MplusQapi\ArticleNutrient',
 ArticleContractLineInputList::class . ':line' => 'MplusKASSA\MplusQapi\ArticleContractLineInput',
 ArticleDynamicMinMaxStockList::class . ':articleDynamicMinMaxStock' => 'MplusKASSA\MplusQapi\ArticleDynamicMinMaxStock',
 GetArticleDynamicMinMaxStockRequest::class . ':articleNumberFilters' => 'int',
 GetArticleDynamicMinMaxStockRequest::class . ':branchNumberFilters' => 'int',
 GetArticleDynamicMinMaxStockRequest::class . ':sourceFilters' => 'string',
 CardFieldInfoList::class . ':field' => 'MplusKASSA\MplusQapi\CardFieldInfo',
 CardFieldInfoResponseList::class . ':field' => 'MplusKASSA\MplusQapi\CardFieldInfoResponse',
 PlannedCycleCountList::class . ':plannedCycleCount' => 'MplusKASSA\MplusQapi\PlannedCycleCount',
 GetPlannedCycleCountsRequest::class . ':branchNumbers' => 'int',
 ActiveCycleCountLineList::class . ':activeCycleCountLine' => 'MplusKASSA\MplusQapi\ActiveCycleCountLine',
 ArticleComponentList::class . ':articleComponent' => 'MplusKASSA\MplusQapi\ArticleComponent',
 getSalesPriceListResponse::class . ':salesPrice' => 'MplusKASSA\MplusQapi\SalesPrice',
 getPriceGroupListResponse::class . ':priceGroup' => 'MplusKASSA\MplusQapi\PriceGroup',
 GetRelationPointsResponse::class . ':relationPointsLst' => 'MplusKASSA\MplusQapi\GetRelationPoints',
 getEmployeeListResponse::class . ':return' => 'MplusKASSA\MplusQapi\EmployeeName',
 getTableListResponse::class . ':table' => 'MplusKASSA\MplusQapi\Table',
 getTableListV2Response::class . ':wholeTable' => 'MplusKASSA\MplusQapi\WholeTable',
 getTableListV3Response::class . ':wholeTable' => 'MplusKASSA\MplusQapi\WholeTable',
 getMainTableListResponse::class . ':mainTable' => 'MplusKASSA\MplusQapi\MainTable',
 getSubTableListResponse::class . ':subTableState' => 'MplusKASSA\MplusQapi\SubTableState',
 getCourseListResponse::class . ':course' => 'MplusKASSA\MplusQapi\Course',
 GetCourseListV2Response::class . ':course' => 'MplusKASSA\MplusQapi\CourseInfo',
 getVatGroupListResponse::class . ':vatGroup' => 'MplusKASSA\MplusQapi\VatGroup',
 GetOrderCategoriesResponse::class . ':orderCategory' => 'MplusKASSA\MplusQapi\OrderCategory',
 CreateProductResponse::class . ':articleNumbers' => 'int',
 UpdateProductResponse::class . ':existingArticleNumbers' => 'int',
 UpdateProductResponse::class . ':newArticleNumbers' => 'int',
 GetArticlesVariantsResponse::class . ':articleVariants' => 'MplusKASSA\MplusQapi\GetArticlesVariantsResponseElem',
 GetStockResponse::class . ':articleStocks' => 'MplusKASSA\MplusQapi\ArticleStock',
 GetStockHistoryResponse::class . ':articleStockHistory' => 'MplusKASSA\MplusQapi\ArticleStockHistory',
 GetArticlesNutritionalCharacteristicsResponse::class . ':articleNutritionalCharacteristics' => 'MplusKASSA\MplusQapi\GetArticlesNutritionalCharacteristicsResponseElem',
 TapTickTotalsResponse::class . ':branchTotals' => 'MplusKASSA\MplusQapi\BranchTapTickTotals',
 TapTickHistoryResponse::class . ':records' => 'MplusKASSA\MplusQapi\TapTickHistory',
 GetTodoListsResponse::class . ':todoLists' => 'MplusKASSA\MplusQapi\TodoList',
 TodoList::class . ':entries' => 'MplusKASSA\MplusQapi\TodoListEntry',
 GetFilterProfilesResponse::class . ':filterProfiles' => 'MplusKASSA\MplusQapi\FilterProfile',
 GetNutritionalCharacteristicsResponse::class . ':nutritionalCharacteristics' => 'MplusKASSA\MplusQapi\GetNutritionalCharacteristicsResponseElem',
 DeterminePricingResponse::class . ':lines' => 'MplusKASSA\MplusQapi\DeterminePricingResponseLine',
 GetArticleBranchDeviationsResponse::class . ':articleBranchDeviationLines' => 'MplusKASSA\MplusQapi\ArticleBranchDeviationLine',
 RequestBranchFilter::class . ':branchNumbers' => 'int',
 RequestEmployeeFilter::class . ':employeeNumbers' => 'int',
 RequestTurnoverGroupFilter::class . ':turnoverGroups' => 'int',
 RequestTurnoverGroupTypeFilter::class . ':turnoverGroupTypes' => 'string',
 RequestArticleFilter::class . ':articleNumbers' => 'int',
 RequestActivityFilter::class . ':activityNumbers' => 'string',
 RequestRelationFilter::class . ':relationNumbers' => 'int',
 AuthorizationsList::class . ':authorizations' => 'MplusKASSA\MplusQapi\Authorization',
 EmailTemplateContentLayoutList::class . ':emailTemplateContentLayout' => 'MplusKASSA\MplusQapi\EmailTemplateContentLayout',
 EmailTemplateContentAttachmentList::class . ':emailTemplateContentAttachment' => 'MplusKASSA\MplusQapi\EmailTemplateContentAttachment',
 EmailTemplateContentList::class . ':emailTemplateContent' => 'MplusKASSA\MplusQapi\EmailTemplateContent',
 EmailTemplateOrderCategoryNumberList::class . ':orderCategoryNumber' => 'int',
 EmailTemplateList::class . ':emailTemplate' => 'MplusKASSA\MplusQapi\EmailTemplate',
 ConfigurationList::class . ':configuration' => 'MplusKASSA\MplusQapi\Configuration',
 ConfigurationItem::class . ':options' => 'MplusKASSA\MplusQapi\ConfigurationOption',
 ConfigurationGroup::class . ':configurationItems' => 'MplusKASSA\MplusQapi\ConfigurationItem',
 ConfigurationGroup::class . ':configurationSubGroups' => 'MplusKASSA\MplusQapi\ConfigurationGroup',
 GetConfigurationValuesRequest::class . ':configurationKeys' => 'string',
 ConfigurationKeyValues::class . ':configurationValues' => 'MplusKASSA\MplusQapi\ConfigurationValue',
 UpdateConfigurationValuesRequest::class . ':configurationKeyValues' => 'MplusKASSA\MplusQapi\ConfigurationKeyValues',
 ButtonLayout_ButtonList::class . ':button' => 'MplusKASSA\MplusQapi\ButtonLayout_Button',
 ButtonLayout_SubGroupList::class . ':subGroup' => 'MplusKASSA\MplusQapi\ButtonLayout_SubGroup',
 ButtonLayout_MainGroupList::class . ':mainGroup' => 'MplusKASSA\MplusQapi\ButtonLayout_MainGroup',
 ButtonLayoutTab::class . ':branches' => 'MplusKASSA\MplusQapi\ButtonLayoutTabBranchLayout',
 ButtonLayoutGroup::class . ':tabs' => 'MplusKASSA\MplusQapi\ButtonLayoutTab',
 ButtonLayoutGroupsWithAssignedWorkplaces::class . ':assignedWorkplaces' => 'MplusKASSA\MplusQapi\WorkplaceIdentifier',
 AssignButtonLayoutGroupToWorkplacesRequest::class . ':assignToWorkplaces' => 'MplusKASSA\MplusQapi\WorkplaceIdentifier',
 PreparationMethodSimpleList::class . ':preparationMethod' => 'MplusKASSA\MplusQapi\PreparationMethodSimple',
 ComponentArticleSimpleList::class . ':componentArticle' => 'MplusKASSA\MplusQapi\ComponentArticleSimple',
 DayStockConfigurationList::class . ':dayStockConfiguration' => 'MplusKASSA\MplusQapi\DayStockConfiguration',
 SaveDayStockConfigurationList::class . ':saveDayStockConfiguration' => 'MplusKASSA\MplusQapi\SaveDayStockConfiguration',
 ActivityList::class . ':activity' => 'MplusKASSA\MplusQapi\Activity',
 ActivityTypeList::class . ':activityType' => 'MplusKASSA\MplusQapi\ActivityType',
 SaveActivityTypeList::class . ':activityType' => 'MplusKASSA\MplusQapi\SaveActivityType',
 Mealmoment::class . ':articleGroups' => 'MplusKASSA\MplusQapi\MealPlanArticleGroup',
 MealPlan::class . ':mealMoments' => 'MplusKASSA\MplusQapi\Mealmoment',
 ArticleAlterationList::class . ':articleAlteration' => 'MplusKASSA\MplusQapi\ArticleAlteration',
 ArticleAlterationsGroupList::class . ':articleAlterationsGroup' => 'MplusKASSA\MplusQapi\ArticleAlterationsGroup',
 SaveArticleAlterationList::class . ':saveArticleAlteration' => 'MplusKASSA\MplusQapi\SaveArticleAlteration',
 UpdateAttachedArticleAlterationsGroupsRequest::class . ':groupNumbers' => 'int',
 SaveArticleMenuArticleSettingsList::class . ':articleSettings' => 'MplusKASSA\MplusQapi\SaveArticleMenuArticleSettings',
 SaveOwnerLabelList::class . ':saveOwnerLabel' => 'MplusKASSA\MplusQapi\SaveOwnerLabel',
 WordAliasList::class . ':wordAlias' => 'MplusKASSA\MplusQapi\WordAlias',
 LicensedModuleList::class . ':licensedModule' => 'MplusKASSA\MplusQapi\LicensedModule',
 LicensedBranchList::class . ':licensedBranch' => 'MplusKASSA\MplusQapi\LicensedBranch',
 DeliveryAddressSupplierList::class . ':deliveryAddressSupplier' => 'MplusKASSA\MplusQapi\DeliveryAddressSupplier',
 DeliveryAddressList::class . ':deliveryAddress' => 'MplusKASSA\MplusQapi\DeliveryAddress',
 PrintLayoutHeaderLines::class . ':printLayoutHeaderLine' => 'MplusKASSA\MplusQapi\PrintLayoutLine',
 PrintLayoutFooterLines::class . ':printLayoutFooterLine' => 'MplusKASSA\MplusQapi\PrintLayoutLine',
 BranchGroup::class . ':branchNumbers' => 'int',
 BranchGroups::class . ':subGroups' => 'MplusKASSA\MplusQapi\BranchGroup',
 BranchGroupsList::class . ':branchGroups' => 'MplusKASSA\MplusQapi\BranchGroups',
 DeliveryMethodList::class . ':deliveryMethod' => 'MplusKASSA\MplusQapi\DeliveryMethod',
 WorkplaceList::class . ':workplace' => 'MplusKASSA\MplusQapi\Workplace',
 BranchList::class . ':branch' => 'MplusKASSA\MplusQapi\Branch',
 ns_NutrientType::class . ':subNutrientTypes' => 'MplusKASSA\MplusQapi\ns_NutrientType',
 FloorplanNeighbourhoodList::class . ':neighbourhood' => 'MplusKASSA\MplusQapi\FloorplanNeighbourhood',
 FloorplanList::class . ':floorplan' => 'MplusKASSA\MplusQapi\Floorplan',
 GroupAuthorizationsList::class . ':authorizations' => 'MplusKASSA\MplusQapi\GroupAuthorization',
 EmployeeAuthorizationsList::class . ':authorizations' => 'MplusKASSA\MplusQapi\EmployeeAuthorization',
 GroupAuthorizationsV2List::class . ':authorizations' => 'MplusKASSA\MplusQapi\GroupAuthorizationV2',
 AuthorizationGroupList::class . ':groups' => 'MplusKASSA\MplusQapi\AuthorizationGroup',
 EmployeeBranchAuthorizationsList::class . ':branchAuthorizations' => 'MplusKASSA\MplusQapi\EmployeeBranchAuthorization',
 UpdateEmployeeAuthorizationGroupsRequest::class . ':branchAuthorizationGroupNumbers' => 'MplusKASSA\MplusQapi\BranchAuthorizationGroupNumber',
 UpdateEmployeeAuthorizationGroupsRequest::class . ':branchGroupAuthorizationGroupNumbers' => 'MplusKASSA\MplusQapi\BranchGroupAuthorizationGroupNumber',
 EmailTemplateIdsFilter::class . ':id' => 'string',
 EmailTemplateLayoutCodesFilter::class . ':layoutCode' => 'string',
 CostCenterList::class . ':costCenter' => 'MplusKASSA\MplusQapi\CostCenter',
 SaveCostCentersRequest::class . ':costCenters' => 'MplusKASSA\MplusQapi\CostCenter',
 BpeEmployeeBudgetList::class . ':bpeEmployeeBudget' => 'MplusKASSA\MplusQapi\BpeEmployeeBudget',
 SaveBpeBudgetsRequest::class . ':bpeEmployeeBudget' => 'MplusKASSA\MplusQapi\BpeEmployeeBudget',
 GetConfigurationTreeResponse::class . ':configurations' => 'MplusKASSA\MplusQapi\ConfigurationGroup',
 GetConfigurationValuesResponse::class . ':configurationKeyValues' => 'MplusKASSA\MplusQapi\ConfigurationKeyValues',
 ButtonLayoutGroupForBranchResponse::class . ':articlesInLayouts' => 'MplusKASSA\MplusQapi\ArticleSimple',
 GetButtonLayoutGroupsWithAssignedWorkplacesResponse::class . ':buttonLayoutGroups' => 'MplusKASSA\MplusQapi\ButtonLayoutGroupsWithAssignedWorkplaces',
 getArticlesInLayoutResponse::class . ':return' => 'MplusKASSA\MplusQapi\ArticleSimple',
 GetMealplanMomentsConfigurationResponse::class . ':mealMomentConfigurationList' => 'MplusKASSA\MplusQapi\MealmomentConfiguration',
 GetScheduledMealPlansResponse::class . ':scheduledMealPlans' => 'MplusKASSA\MplusQapi\ScheduledMealPlan',
 GetOwnerLabelsResponse::class . ':ownerLabels' => 'MplusKASSA\MplusQapi\OwnerLabel',
 SaveOwnerLabelsResponse::class . ':newOwnerLabels' => 'MplusKASSA\MplusQapi\OwnerLabel',
 getApiVersionResponse::class . ':serviceIpAddresses' => 'string',
 getAvailableTerminalListResponse::class . ':return' => 'MplusKASSA\MplusQapi\Terminal',
 GetNutrientTypesResponse::class . ':nutrientTypes' => 'MplusKASSA\MplusQapi\ns_NutrientType',
 GetEmployeeAuthorizationGroupsResponse::class . ':branchAuthorizationGroups' => 'MplusKASSA\MplusQapi\BranchAuthorizationGroup',
 GetEmployeeAuthorizationGroupsResponse::class . ':branchGroupAuthorizationGroups' => 'MplusKASSA\MplusQapi\BranchGroupAuthorizationGroup',
 GetSpecialBarcodePatternsResponse::class . ':patterns' => 'MplusKASSA\MplusQapi\BarcodePattern',
 GetEmployeeWorkplaceLoginStatesResponse::class . ':workplaceLoginStateInfo' => 'MplusKASSA\MplusQapi\WorkplaceLoginStateInfo',
 ImageCardLabelIds::class . ':labelId' => 'int',
 CardImageData::class . ':images' => 'MplusKASSA\MplusQapi\ImageData',
 CreateImageCardLink::class . ':cardNumbers' => 'int',
 GetCardImagesRequest::class . ':cardNumbers' => 'int',
 SaveCardImageData::class . ':images' => 'MplusKASSA\MplusQapi\SaveImageData',
 SaveCardImagesRequest::class . ':cards' => 'MplusKASSA\MplusQapi\SaveCardImageData',
 GetImagesRequest::class . ':imageIds' => 'int',
 GetCardImageLabelsResponse::class . ':labels' => 'MplusKASSA\MplusQapi\ImageLabel',
 GetCardImagesResponse::class . ':items' => 'MplusKASSA\MplusQapi\CardImageData',
 PrintLayoutAssignment::class . ':extraLocationIds' => 'MplusKASSA\MplusQapi\ns_PrintLayoutLocationId',
 SavePrintLayoutAssignmentsRequest::class . ':printLayoutAssignments' => 'MplusKASSA\MplusQapi\PrintLayoutAssignment',
 PrintParams::class . ':params' => 'MplusKASSA\MplusQapi\PrintParam',
 PrintInfo::class . ':paramsList' => 'MplusKASSA\MplusQapi\PrintParams',
 PrintTemplateList::class . ':printTemplate' => 'string',
 GetPrintLayoutsResponse::class . ':printLayouts' => 'MplusKASSA\MplusQapi\PrintLayoutView',
 GetPrintLayoutAssignmentsResponse::class . ':printLayoutAssignments' => 'MplusKASSA\MplusQapi\PrintLayoutAssignment',
 GetRenderedPrintLayoutResponse::class . ':renderedPrintLayouts' => 'string',
 VoucherSettingsV1List::class . ':voucherSettingsV1' => 'MplusKASSA\MplusQapi\VoucherSettingsV1',
 VoucherRedeemLocations::class . ':branchGroupIds' => 'int',
 VoucherRedeemLocations::class . ':branchIds' => 'int',
 VoucherRedeemLocations::class . ':workplaceIds' => 'MplusKASSA\MplusQapi\WorkplaceIdentifier',
 VoucherLineList::class . ':voucherLine' => 'MplusKASSA\MplusQapi\VoucherLine',
 VoucherCategoryList::class . ':voucherCategory' => 'MplusKASSA\MplusQapi\VoucherCategory',
 VoucherExternalScanCodeList::class . ':voucherScanCode' => 'MplusKASSA\MplusQapi\VoucherExternalScanCode',
 IssueVoucherList::class . ':issueVoucher' => 'MplusKASSA\MplusQapi\IssueVoucher',
 RedeemableVoucherIssuanceList::class . ':redeemableVoucherIssuance' => 'MplusKASSA\MplusQapi\RedeemableVoucherIssuance',
 GiftcardInfo::class . ':values' => 'int',
 GiftcardInfo::class . ':branchNumbers' => 'int',
 GiftcardPaymentLineList::class . ':line' => 'MplusKASSA\MplusQapi\GiftcardPaymentLine',
 GiftcardTypesList::class . ':giftcardTypes' => 'MplusKASSA\MplusQapi\GiftcardType',
 RelationGiftcardList::class . ':relationGiftcards' => 'MplusKASSA\MplusQapi\RelationGiftcard',
 GiftcardHistoryList::class . ':giftcardHistory' => 'MplusKASSA\MplusQapi\GiftcardHistory',
 GiftcardList::class . ':giftcard' => 'MplusKASSA\MplusQapi\GetGiftcard',
 SaveGiftcardList::class . ':giftcard' => 'MplusKASSA\MplusQapi\SaveGiftcard',
 RestituteGiftcardsRequest::class . ':cardIds' => 'string',
 LinkGiftcardsToRelationRequest::class . ':cardIds' => 'string',
 VoucherCategoryIdList::class . ':voucherCategoryId' => 'int',
 IssueVoucherExternalScanCodeSet::class . ':scanCode' => 'string',
 ReportBranchFilter::class . ':branchNumbers' => 'int',
 ReportWorkplaceFilter::class . ':workplaceNumbers' => 'int',
 ReportEmployeeFilter::class . ':employeeNumbers' => 'int',
 ReportTurnoverGroupFilter::class . ':turnoverGroups' => 'int',
 ReportTurnoverGroupTypeFilter::class . ':turnoverGroupTypes' => 'string',
 ReportArticleFilter::class . ':articleNumbers' => 'int',
 ReportActivityFilter::class . ':activityNumbers' => 'string',
 ReportRelationFilter::class . ':relationNumbers' => 'int',
 ReportTurnoverByBranchList::class . ':turnover' => 'MplusKASSA\MplusQapi\ReportTurnoverByBranch',
 ReportTurnoverByEmployeeList::class . ':turnover' => 'MplusKASSA\MplusQapi\ReportTurnoverByEmployee',
 ReportTurnoverByActivityList::class . ':turnover' => 'MplusKASSA\MplusQapi\ReportTurnoverByActivity',
 ReportTurnoverByTurnoverGroupList::class . ':turnover' => 'MplusKASSA\MplusQapi\ReportTurnoverByTurnoverGroup',
 ReportTurnoverByArticleList::class . ':turnover' => 'MplusKASSA\MplusQapi\ReportTurnoverByArticle',
 ReportHoursByEmployee::class . ':branchNumbers' => 'int',
 ReportHoursByEmployee::class . ':references' => 'string',
 ReportHoursByEmployeeList::class . ':hours' => 'MplusKASSA\MplusQapi\ReportHoursByEmployee',
 ReportPaymentMethodsList::class . ':paymentMethods' => 'MplusKASSA\MplusQapi\ReportPaymentMethods',
 ReportTablesList::class . ':tables' => 'MplusKASSA\MplusQapi\ReportTables',
 ReportCancellationsList::class . ':cancellations' => 'MplusKASSA\MplusQapi\ReportCancellations',
 ReportBPEList::class . ':bpes' => 'MplusKASSA\MplusQapi\ReportBPE',
 ReportBranchPerformanceList::class . ':branchPerformance' => 'MplusKASSA\MplusQapi\ReportBranchPerformance',
 ReportAverageSpendingList::class . ':averageSpending' => 'MplusKASSA\MplusQapi\ReportAverageSpending',
 ReportTurnoverList::class . ':turnover' => 'MplusKASSA\MplusQapi\ReportTurnover',
 ReportPrintableFinancialTotalsRequest::class . ':options' => 'string',
 ReportPrintableFinancialTotalsList::class . ':printableFinancialTotals' => 'MplusKASSA\MplusQapi\ReportPrintableFinancialTotalsLine',
 ReportArticlePerformanceBranchList::class . ':branch' => 'MplusKASSA\MplusQapi\ReportArticlePerformanceBranch',
 ReportArticlePerformanceList::class . ':articlePerformance' => 'MplusKASSA\MplusQapi\ReportArticlePerformance',
 ReportPaymentMethodDetailsResponse::class . ':paymentSourceList' => 'MplusKASSA\MplusQapi\ReportPaymentSource',
 ArticleNumberFilter::class . ':articleNumber' => 'int',
 InvoiceList::class . ':invoice' => 'MplusKASSA\MplusQapi\Invoice',
 RequestSalesRepeatTemplateTypeFilter::class . ':salesRepeatTemplateTypes' => 'string',
 GetSalesRepeatTemplatesRequest::class . ':branchNumbers' => 'int',
 SalesRepeatTemplateLineList::class . ':line' => 'MplusKASSA\MplusQapi\SalesRepeatTemplateLine',
 SalesRepeatTemplateSchedule::class . ':specificDates' => '\DateTime',
 SalesRepeatTemplate::class . ':relationCategoryIds' => 'int',
 SalesRepeatTemplateList::class . ':salesRepeatTemplate' => 'MplusKASSA\MplusQapi\SalesRepeatTemplate',
 SaveSalesRepeatTemplateLineList::class . ':line' => 'MplusKASSA\MplusQapi\SaveSalesRepeatTemplateLine',
 SalesRepeatTemplateGeneratedSalesObjectList::class . ':generatedSalesObject' => 'MplusKASSA\MplusQapi\SalesRepeatTemplateGeneratedSalesObject',
 SalesRepeatTemplatePlannedSalesObjectList::class . ':plannedSalesObject' => 'MplusKASSA\MplusQapi\SalesRepeatTemplatePlannedSalesObject',
 RepeatTemplateSalesObjectList::class . ':repeatTemplate' => 'MplusKASSA\MplusQapi\RepeatTemplateSalesObject',
 SalesObjectPlanList::class . ':salesObject' => 'MplusKASSA\MplusQapi\SalesObjectPlan',
 GeneratedSalesObjectList::class . ':salesObject' => 'MplusKASSA\MplusQapi\GeneratedSalesObject',
 BpeBudgetCheckList::class . ':item' => 'MplusKASSA\MplusQapi\BpeBudgetCheck',
 BpeBudgetCheckResponseList::class . ':result' => 'MplusKASSA\MplusQapi\BpeBudgetCheckResponse',
 TicketCounterSaleList::class . ':ticketCounterSale' => 'MplusKASSA\MplusQapi\TicketCounterSale',
 SalePromotionLineDiscountList::class . ':salePromotionLineDiscountList' => 'MplusKASSA\MplusQapi\SalePromotionLineDiscount',
 SalePromotionArticleLineList::class . ':articleLine' => 'MplusKASSA\MplusQapi\SalePromotionArticleLine',
 SalePromotionRelationLineList::class . ':relationLine' => 'MplusKASSA\MplusQapi\SalePromotionRelationLine',
 SalePromotionTurnoverGroupLineList::class . ':TurnoverGroupLine' => 'MplusKASSA\MplusQapi\SalePromotionTurnoverGroupLine',
 SalePromotionSeasonCodeLineList::class . ':seasonCodeLine' => 'MplusKASSA\MplusQapi\SalePromotionSeasonCodeLine',
 SalePromotionDiscountGroupLineList::class . ':discountGroupLine' => 'MplusKASSA\MplusQapi\SalePromotionDiscountGroupLine',
 SalePromotionLine::class . ':articleNumbers' => 'int',
 SalePromotionLine::class . ':relationNumbers' => 'int',
 SalePromotionLine::class . ':turnoverGroupNumbers' => 'int',
 SalePromotionLine::class . ':seasonCodeNumbers' => 'int',
 SalePromotionLine::class . ':discountGroupNumbers' => 'int',
 SalePromotionLineList::class . ':salePromotionLineList' => 'MplusKASSA\MplusQapi\SalePromotionLine',
 SalePromotionsList::class . ':salePromotions' => 'MplusKASSA\MplusQapi\SalePromotions',
 GetPaymentMethodsRequest::class . ':paymentMethodTypes' => 'string',
 CreateOrderV2Request::class . ':scannedVoucherIssuanceCodes' => 'string',
 CreateOrderV3Request::class . ':scannedVoucherIssuanceCodes' => 'string',
 ProposalList::class . ':proposal' => 'MplusKASSA\MplusQapi\Proposal',
 GetProposalsRequest::class . ':branchNumbers' => 'int',
 GetProposalsRequest::class . ':employeeNumbers' => 'int',
 GetProposalsRequest::class . ':relationNumbers' => 'int',
 GetProposalsRequest::class . ':supplierRelationNumbers' => 'int',
 GetProposalsRequest::class . ':articleNumbers' => 'int',
 GetProposalsRequest::class . ':articleTurnoverGroups' => 'int',
 GetProposalsRequest::class . ':proposalIds' => 'string',
 GetProposalsRequest::class . ':proposalNumbers' => 'MplusKASSA\MplusQapi\YearNumber',
 GetOrdersRequest::class . ':branchNumbers' => 'int',
 GetOrdersRequest::class . ':employeeNumbers' => 'int',
 GetOrdersRequest::class . ':relationNumbers' => 'int',
 GetOrdersRequest::class . ':supplierRelationNumbers' => 'int',
 GetOrdersRequest::class . ':articleNumbers' => 'int',
 GetOrdersRequest::class . ':articleTurnoverGroups' => 'int',
 GetOrdersRequest::class . ':orderIds' => 'string',
 GetOrdersRequest::class . ':orderNumbers' => 'MplusKASSA\MplusQapi\YearNumber',
 CreateInvoiceFromPackingSlipsRequest::class . ':packingSlipIds' => 'string',
 CashCountInfoWorkplaceDataList::class . ':workplaceData' => 'MplusKASSA\MplusQapi\CashCountInfoWorkplaceData',
 CashCountInfoPaymentMethodAmountList::class . ':paymentMethodAmount' => 'MplusKASSA\MplusQapi\CashCountInfoPaymentMethodAmount',
 CashCountInfoWorkplaceList::class . ':workplace' => 'MplusKASSA\MplusQapi\CashCountInfoWorkplace',
 CashCountInfoCountedPaymentMethodAmountList::class . ':countedPaymentMethodAmount' => 'MplusKASSA\MplusQapi\CashCountInfoCountedPaymentMethodAmount',
 SalesProcessorContext::class . ':scannedVoucherIssuanceCodes' => 'string',
 SalesQueueTypeList::class . ':type' => 'string',
 SalesQueueEntryList::class . ':entry' => 'MplusKASSA\MplusQapi\SalesQueueEntry',
 SalesProcessorResult::class . ':errorMessages' => 'string',
 CreatedInvoiceReminderList::class . ':createdInvoiceReminder' => 'MplusKASSA\MplusQapi\CreatedInvoiceReminder',
 GetInvoicesRequest::class . ':branchNumbers' => 'int',
 GetInvoicesRequest::class . ':employeeNumbers' => 'int',
 GetInvoicesRequest::class . ':relationNumbers' => 'int',
 GetInvoicesRequest::class . ':supplierRelationNumbers' => 'int',
 GetInvoicesRequest::class . ':articleNumbers' => 'int',
 GetInvoicesRequest::class . ':articleTurnoverGroups' => 'int',
 GetInvoicesRequest::class . ':invoiceIds' => 'string',
 GetInvoicesRequest::class . ':invoiceNumbers' => 'MplusKASSA\MplusQapi\YearNumber',
 PackingSlipList::class . ':packingSlip' => 'MplusKASSA\MplusQapi\PackingSlip',
 GetPackingSlipsRequest::class . ':branchNumbers' => 'int',
 GetPackingSlipsRequest::class . ':employeeNumbers' => 'int',
 GetPackingSlipsRequest::class . ':relationNumbers' => 'int',
 GetPackingSlipsRequest::class . ':supplierRelationNumbers' => 'int',
 GetPackingSlipsRequest::class . ':articleNumbers' => 'int',
 GetPackingSlipsRequest::class . ':articleTurnoverGroups' => 'int',
 GetPackingSlipsRequest::class . ':packingSlipIds' => 'string',
 GetPackingSlipsRequest::class . ':packingSlipNumbers' => 'MplusKASSA\MplusQapi\YearNumber',
 GetPackingSlipsRequest::class . ':typeFilter' => 'string',
 WebhookConsumerEventList::class . ':webhookConsumerEvent' => 'MplusKASSA\MplusQapi\WebhookConsumerEvent',
 WebhookConsumerTriggerPatternList::class . ':webhookConsumerTriggerPattern' => 'MplusKASSA\MplusQapi\WebhookConsumerTriggerPattern',
 WebhookConsumerWorkplace::class . ':workplaceNumbers' => 'int',
 WebhookConsumerWorkplaceList::class . ':webhookConsumerWorkplace' => 'MplusKASSA\MplusQapi\WebhookConsumerWorkplace',
 WebhookConsumer::class . ':articleFilter' => 'int',
 WebhookConsumerList::class . ':webhookConsumer' => 'MplusKASSA\MplusQapi\WebhookConsumer',
 ExternalPaymentMessageList::class . ':message' => 'MplusKASSA\MplusQapi\ExternalPaymentMessage',
 WebhookDialogInput::class . ':selectedDialogOptionIds' => 'int',
 WebhookDialogInput::class . ':selectedDialogOptionIdsAsString' => 'string',
 WebhookFormFieldInput::class . ':selected' => 'string',
 WebhookFormInput::class . ':fields' => 'MplusKASSA\MplusQapi\WebhookFormFieldInput',
 WebhookSessionLineInput::class . ':preparationMethods' => 'MplusKASSA\MplusQapi\WebhookSessionBaseLineInput',
 WebhookSessionLineInput::class . ':componentArticles' => 'MplusKASSA\MplusQapi\WebhookSessionBaseLineInput',
 WebhookSessionInput::class . ':lines' => 'MplusKASSA\MplusQapi\WebhookSessionLineInput',
 WebhookDialog::class . ':dialogOptions' => 'MplusKASSA\MplusQapi\WebhookDialogOption',
 WebhookFormSelect::class . ':options' => 'MplusKASSA\MplusQapi\WebhookFormOption',
 WebhookForm::class . ':fields' => 'MplusKASSA\MplusQapi\WebhookFormField',
 ExternalPaymentResp::class . ':receiptTexts' => 'MplusKASSA\MplusQapi\ExternalPaymentReceiptText',
 ExternalPaymentResp::class . ':receiptFooters' => 'MplusKASSA\MplusQapi\ExternalPaymentReceiptFooter',
 WebhookResp::class . ':messages' => 'MplusKASSA\MplusQapi\WebhookMessage',
 WebhookResp::class . ':lineChanges' => 'MplusKASSA\MplusQapi\WebhookLineChange',
 WebhookResp::class . ':lineAdditions' => 'MplusKASSA\MplusQapi\WebhookLineAddition',
 WebhookResp::class . ':lineDeletions' => 'MplusKASSA\MplusQapi\WebhookLineDeletion',
 InterbranchOrderLineList::class . ':interbranchOrderLine' => 'MplusKASSA\MplusQapi\InterbranchOrderLine',
 InterbranchOrderList::class . ':interbranchOrder' => 'MplusKASSA\MplusQapi\InterbranchOrder',
 GetInterbranchOrdersRequest::class . ':interbranchOrderState' => 'string',
 InterbranchShipmentLineList::class . ':interbranchShipmentLine' => 'MplusKASSA\MplusQapi\InterbranchShipmentLine',
 InterbranchShipmentList::class . ':interbranchShipment' => 'MplusKASSA\MplusQapi\InterbranchShipment',
 GetInterbranchShipmentsRequest::class . ':fromBranchNumbers' => 'int',
 GetInterbranchShipmentsRequest::class . ':toBranchNumbers' => 'int',
 GetInterbranchShipmentsRequest::class . ':interbranchShipmentState' => 'string',
 InterbranchDeliveryLineList::class . ':interbranchDeliveryLine' => 'MplusKASSA\MplusQapi\InterbranchDeliveryLine',
 InterbranchDeliveryList::class . ':interbranchDelivery' => 'MplusKASSA\MplusQapi\InterbranchDelivery',
 ArticleFilter::class . ':articleNumbers' => 'int',
 ArticleFilter::class . ':turnoverGroupNumbers' => 'int',
 ArticleFilter::class . ':articleCategoryIds' => 'int',
 RunInterbranchPlannerRequest::class . ':fromBranchNumbers' => 'int',
 RunInterbranchPlannerRequest::class . ':toBranchNumbers' => 'int',
 RunInterbranchPlannerResponse::class . ':createdInterbranchOrders' => 'MplusKASSA\MplusQapi\YearNumber',
 RunInterbranchPlannerResponse::class . ':updatedInterbranchOrders' => 'MplusKASSA\MplusQapi\YearNumber',
 RunInterbranchPlannerResponse::class . ':messages' => 'MplusKASSA\MplusQapi\InterbranchPlannerMessage',
        );
        return $arrayTypes[$parentFQN . ":" . $propertyName] ?? null;
    }
    public function getSalesPriceList(?string $requestId = null) : getSalesPriceListResponse {
        $opname = 'getSalesPriceList';
        $this->startRequest($opname);
        $reqobj = new getSalesPriceList();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPriceGroupList(?string $requestId = null) : getPriceGroupListResponse {
        $opname = 'getPriceGroupList';
        $this->startRequest($opname);
        $reqobj = new getPriceGroupList();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function logMistake(Terminal $terminal, LogMistakeRequest $request, ?string $requestId = null) : LogMistakeResponse {
        $opname = 'logMistake';
        $this->startRequest($opname);
        $reqobj = new logMistake();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createRelation(Relation $relation, ?string $requestId = null) : CreateRelationResponse {
        $opname = 'createRelation';
        $this->startRequest($opname);
        $reqobj = new createRelation();
        $reqobj->relation = $relation;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateRelation(Relation $relation, ?string $requestId = null) : UpdateRelationResponse {
        $opname = 'updateRelation';
        $this->startRequest($opname);
        $reqobj = new updateRelation();
        $reqobj->relation = $relation;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getRelation(int $relationNumber, ?string $requestId = null) : GetRelationResponse {
        $opname = 'getRelation';
        $this->startRequest($opname);
        $reqobj = new getRelation();
        $reqobj->relationNumber = $relationNumber;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function findRelation(Relation $relation, ?string $requestId = null) : FindRelationResponse {
        $opname = 'findRelation';
        $this->startRequest($opname);
        $reqobj = new findRelation();
        $reqobj->relation = $relation;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getRelations(GetRelationsRequest $request, ?string $requestId = null) : GetRelationsResponse {
        $opname = 'getRelations';
        $this->startRequest($opname);
        $reqobj = new getRelations();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCustomFieldLists(?string $requestId = null) : GetCustomFieldListsResponse {
        $opname = 'getCustomFieldLists';
        $this->startRequest($opname);
        $reqobj = new getCustomFieldLists();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCardCategories(?string $requestId = null) : GetCardCategoriesResponse {
        $opname = 'getCardCategories';
        $this->startRequest($opname);
        $reqobj = new getCardCategories();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCardCategoriesV2(GetCardCategoriesV2Request $request, ?string $requestId = null) : GetCardCategoriesV2Response {
        $opname = 'getCardCategoriesV2';
        $this->startRequest($opname);
        $reqobj = new getCardCategoriesV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function adjustPoints(AdjustPointsRequest $request, ?string $requestId = null) : AdjustPointsResponse {
        $opname = 'adjustPoints';
        $this->startRequest($opname);
        $reqobj = new adjustPoints();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getRelationPoints(GetRelationPointsRequest $request, ?string $requestId = null) : GetRelationPointsResponse {
        $opname = 'getRelationPoints';
        $this->startRequest($opname);
        $reqobj = new getRelationPoints_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getEmployees(getEmployeesRequest $request, ?string $requestId = null) : GetEmployeesResponse {
        $opname = 'getEmployees';
        $this->startRequest($opname);
        $reqobj = new getEmployees();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getEmployee(int $employeeNumber, ?string $requestId = null) : GetEmployeeResponse {
        $opname = 'getEmployee';
        $this->startRequest($opname);
        $reqobj = new getEmployee();
        $reqobj->employeeNumber = $employeeNumber;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function findEmployee(Employee $employee, ?string $requestId = null) : FindEmployeeResponse {
        $opname = 'findEmployee';
        $this->startRequest($opname);
        $reqobj = new findEmployee();
        $reqobj->employee = $employee;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createEmployee(Employee $employee, ?string $requestId = null) : CreateEmployeeResponse {
        $opname = 'createEmployee';
        $this->startRequest($opname);
        $reqobj = new createEmployee();
        $reqobj->employee = $employee;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateEmployee(Employee $employee, ?string $requestId = null) : UpdateEmployeeResponse {
        $opname = 'updateEmployee';
        $this->startRequest($opname);
        $reqobj = new updateEmployee();
        $reqobj->employee = $employee;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getActiveEmployeeList(Terminal $terminal, ?string $requestId = null) : getEmployeeListResponse {
        $opname = 'getActiveEmployeeList';
        $this->startRequest($opname);
        $reqobj = new getActiveEmployeeList();
        $reqobj->terminal = $terminal;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function verifyEmployeePassword(Terminal $terminal, int $employee_number, string $password, ?string $requestId = null) : verifyEmployeePasswordResponse {
        $opname = 'verifyEmployeePassword';
        $this->startRequest($opname);
        $reqobj = new verifyEmployeePassword();
        $reqobj->terminal = $terminal;
        $reqobj->employee_number = $employee_number;
        $reqobj->password = $password;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getMaxTableNumber(Terminal $terminal, ?string $requestId = null) : getMaxTableNumberResponse {
        $opname = 'getMaxTableNumber';
        $this->startRequest($opname);
        $reqobj = new getMaxTableNumber();
        $reqobj->terminal = $terminal;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTableList(Terminal $terminal, ?string $requestId = null) : getTableListResponse {
        $opname = 'getTableList';
        $this->startRequest($opname);
        $reqobj = new getTableList();
        $reqobj->terminal = $terminal;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTableListV2(Terminal $terminal, ?string $requestId = null) : getTableListV2Response {
        $opname = 'getTableListV2';
        $this->startRequest($opname);
        $reqobj = new getTableListV2();
        $reqobj->terminal = $terminal;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTableListV3(getTableListV3Request $request, ?string $requestId = null) : getTableListV3Response {
        $opname = 'getTableListV3';
        $this->startRequest($opname);
        $reqobj = new getTableListV3();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getMainTableList(getMainTableListRequest $request, ?string $requestId = null) : getMainTableListResponse {
        $opname = 'getMainTableList';
        $this->startRequest($opname);
        $reqobj = new getMainTableList();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getSubTableList(getSubTableListRequest $request, ?string $requestId = null) : getSubTableListResponse {
        $opname = 'getSubTableList';
        $this->startRequest($opname);
        $reqobj = new getSubTableList();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCourseList(Terminal $terminal, ?string $requestId = null) : getCourseListResponse {
        $opname = 'getCourseList';
        $this->startRequest($opname);
        $reqobj = new getCourseList();
        $reqobj->terminal = $terminal;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCourseListV2(GetCourseListV2Request $request, ?string $requestId = null) : GetCourseListV2Response {
        $opname = 'getCourseListV2';
        $this->startRequest($opname);
        $reqobj = new getCourseListV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getVatGroupList(?string $requestId = null) : getVatGroupListResponse {
        $opname = 'getVatGroupList';
        $this->startRequest($opname);
        $reqobj = new getVatGroupList();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveTableOrder(Terminal $terminal, Order $order, ?string $requestId = null) : SaveTableOrderResponse {
        $opname = 'saveTableOrder';
        $this->startRequest($opname);
        $reqobj = new saveTableOrder();
        $reqobj->terminal = $terminal;
        $reqobj->order = $order;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveTableOrderV2(Terminal $terminal, SaveTableOrderRequest $request, ?string $requestId = null) : SaveTableOrderResponse {
        $opname = 'saveTableOrderV2';
        $this->startRequest($opname);
        $reqobj = new saveTableOrderV2();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createAndPayTableOrder(CreateAndPayTableOrderRequest $request, ?string $requestId = null) : CreateAndPayTableOrderResponse {
        $opname = 'createAndPayTableOrder';
        $this->startRequest($opname);
        $reqobj = new createAndPayTableOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function moveTableOrder(Terminal $terminal, Order $order, int $tableNumber, ?string $requestId = null) : MoveTableOrderResponse {
        $opname = 'moveTableOrder';
        $this->startRequest($opname);
        $reqobj = new moveTableOrder();
        $reqobj->terminal = $terminal;
        $reqobj->order = $order;
        $reqobj->tableNumber = $tableNumber;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function moveTableOrderV2(Terminal $terminal, MoveTableOrderRequest $request, ?string $requestId = null) : MoveTableOrderResponse {
        $opname = 'moveTableOrderV2';
        $this->startRequest($opname);
        $reqobj = new moveTableOrderV2();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function moveTableOrderV3(MoveTableOrderV3Request $request, ?string $requestId = null) : MoveTableOrderV3Response {
        $opname = 'moveTableOrderV3';
        $this->startRequest($opname);
        $reqobj = new moveTableOrderV3();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTableOrder(Terminal $terminal, int $branchNumber, int $tableNumber, ?string $requestId = null) : GetTableOrderResponse {
        $opname = 'getTableOrder';
        $this->startRequest($opname);
        $reqobj = new getTableOrder();
        $reqobj->terminal = $terminal;
        $reqobj->branchNumber = $branchNumber;
        $reqobj->tableNumber = $tableNumber;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTableOrderV2(Terminal $terminal, GetTableOrderRequest $request, ?string $requestId = null) : GetTableOrderResponse {
        $opname = 'getTableOrderV2';
        $this->startRequest($opname);
        $reqobj = new getTableOrderV2();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTableOrderV3(GetTableOrderV3Request $request, ?string $requestId = null) : GetTableOrderResponse {
        $opname = 'getTableOrderV3';
        $this->startRequest($opname);
        $reqobj = new getTableOrderV3();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function findTableOrder(Terminal $terminal, string $extOrderId, ?string $requestId = null) : GetTableOrderResponse {
        $opname = 'findTableOrder';
        $this->startRequest($opname);
        $reqobj = new findTableOrder();
        $reqobj->terminal = $terminal;
        $reqobj->extOrderId = $extOrderId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function releaseTable(Terminal $terminal, ReleaseTableRequest $request, ?string $requestId = null) : ReleaseTableResponse {
        $opname = 'releaseTable';
        $this->startRequest($opname);
        $reqobj = new releaseTable();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function releaseTableV2(ReleaseTableV2Request $request, ?string $requestId = null) : ReleaseTableV2Response {
        $opname = 'releaseTableV2';
        $this->startRequest($opname);
        $reqobj = new releaseTableV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function setSubTableCount(Terminal $terminal, SetSubtableCountRequest $request, ?string $requestId = null) : SetSubtableCountResponse {
        $opname = 'setSubTableCount';
        $this->startRequest($opname);
        $reqobj = new setSubTableCount();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTableOrderCourseList(Terminal $terminal, int $branchNumber, int $tableNumber, ?string $requestId = null) : GetTableOrderCourseListResponse {
        $opname = 'getTableOrderCourseList';
        $this->startRequest($opname);
        $reqobj = new getTableOrderCourseList();
        $reqobj->terminal = $terminal;
        $reqobj->branchNumber = $branchNumber;
        $reqobj->tableNumber = $tableNumber;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTableOrderCourseListV2(Terminal $terminal, GetTableOrderCourseListRequest $request, ?string $requestId = null) : GetTableOrderCourseListResponse {
        $opname = 'getTableOrderCourseListV2';
        $this->startRequest($opname);
        $reqobj = new getTableOrderCourseListV2();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTableOrderCourseListV3(GetTableOrderCourseListRequest $request, ?string $requestId = null) : GetTableOrderCourseListResponse {
        $opname = 'getTableOrderCourseListV3';
        $this->startRequest($opname);
        $reqobj = new getTableOrderCourseListV3();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function requestTableOrderCourse(Terminal $terminal, int $branchNumber, int $tableNumber, int $employeeNumber, int $courseNumber, ?string $requestId = null) : RequestTableOrderCourseResponse {
        $opname = 'requestTableOrderCourse';
        $this->startRequest($opname);
        $reqobj = new requestTableOrderCourse();
        $reqobj->terminal = $terminal;
        $reqobj->branchNumber = $branchNumber;
        $reqobj->tableNumber = $tableNumber;
        $reqobj->employeeNumber = $employeeNumber;
        $reqobj->courseNumber = $courseNumber;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function requestNextTableOrderCourseV2(Terminal $terminal, RequestNextTableOrderCourseRequest $request, ?string $requestId = null) : RequestTableOrderCourseResponse {
        $opname = 'requestNextTableOrderCourseV2';
        $this->startRequest($opname);
        $reqobj = new requestNextTableOrderCourseV2();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function requestNextTableOrderCourseV3(RequestNextTableOrderCourseV3Request $request, ?string $requestId = null) : RequestTableOrderCourseResponse {
        $opname = 'requestNextTableOrderCourseV3';
        $this->startRequest($opname);
        $reqobj = new requestNextTableOrderCourseV3();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function storeSinglyEftTransaction(TerminalId $terminal, EftTransactionDetails $eft_transaction, ?string $requestId = null) : StoreSinglyEftTransactionResponse {
        $opname = 'storeSinglyEftTransaction';
        $this->startRequest($opname);
        $reqobj = new storeSinglyEftTransaction();
        $reqobj->terminal = $terminal;
        $reqobj->eft_transaction = $eft_transaction;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function queueBranchOrder(Order $order, ?string $requestId = null) : QueueBranchOrderResponse {
        $opname = 'queueBranchOrder';
        $this->startRequest($opname);
        $reqobj = new queueBranchOrder();
        $reqobj->order = $order;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function queueBranchOrderPayment(QueueBranchOrderPaymentRequest $paymentRequest, ?string $requestId = null) : QueueBranchOrderPaymentResponse {
        $opname = 'queueBranchOrderPayment';
        $this->startRequest($opname);
        $reqobj = new queueBranchOrderPayment();
        $reqobj->paymentRequest = $paymentRequest;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getQueueBranchOrderPaymentStatus(string $queuedPaymentId, ?string $requestId = null) : GetQueueBranchOrderPaymentStatusResponse {
        $opname = 'getQueueBranchOrderPaymentStatus';
        $this->startRequest($opname);
        $reqobj = new getQueueBranchOrderPaymentStatus();
        $reqobj->queuedPaymentId = $queuedPaymentId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateOrder(Order $order, ?string $requestId = null) : UpdateOrderResponse {
        $opname = 'updateOrder';
        $this->startRequest($opname);
        $reqobj = new updateOrder();
        $reqobj->order = $order;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateOrderV2(UpdateOrderV2Request $request, ?string $requestId = null) : UpdateOrderV2Response {
        $opname = 'updateOrderV2';
        $this->startRequest($opname);
        $reqobj = new updateOrderV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveOrder(Order $order, ?string $requestId = null) : SaveOrderResponse {
        $opname = 'saveOrder';
        $this->startRequest($opname);
        $reqobj = new saveOrder();
        $reqobj->order = $order;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getOrder(string $orderId, ?string $requestId = null) : GetOrderResponse {
        $opname = 'getOrder';
        $this->startRequest($opname);
        $reqobj = new getOrder();
        $reqobj->orderId = $orderId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getOrderChanges(GetOrderChangesRequest $request, ?string $requestId = null) : GetOrderChangesResponse {
        $opname = 'getOrderChanges';
        $this->startRequest($opname);
        $reqobj = new getOrderChanges();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getOrderHistory(GetOrderHistoryRequest $request, ?string $requestId = null) : GetOrderHistoryResponse {
        $opname = 'getOrderHistory';
        $this->startRequest($opname);
        $reqobj = new getOrderHistory();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function findOrder(string $extOrderId, ?string $requestId = null) : GetOrderResponse {
        $opname = 'findOrder';
        $this->startRequest($opname);
        $reqobj = new findOrder();
        $reqobj->extOrderId = $extOrderId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function cancelOrder(string $orderId, CancelOrderRequest $request, ?string $requestId = null) : CancelOrderResponse {
        $opname = 'cancelOrder';
        $this->startRequest($opname);
        $reqobj = new cancelOrder();
        $reqobj->orderId = $orderId;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function cancelOrderV2(CancelOrderV2Request $request, ?string $requestId = null) : CancelOrderResponse {
        $opname = 'cancelOrderV2';
        $this->startRequest($opname);
        $reqobj = new cancelOrderV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function cancelTableOrder(Terminal $terminal, int $branchNumber, int $tableNumber, ?string $requestId = null) : CancelOrderResponse {
        $opname = 'cancelTableOrder';
        $this->startRequest($opname);
        $reqobj = new cancelTableOrder();
        $reqobj->terminal = $terminal;
        $reqobj->branchNumber = $branchNumber;
        $reqobj->tableNumber = $tableNumber;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function cancelTableOrderV2(Terminal $terminal, CancelTableOrderRequest $request, ?string $requestId = null) : CancelOrderResponse {
        $opname = 'cancelTableOrderV2';
        $this->startRequest($opname);
        $reqobj = new cancelTableOrderV2();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function payInvoice(PayInvoiceRequest $request, ?string $requestId = null) : PayInvoiceResponse {
        $opname = 'payInvoice';
        $this->startRequest($opname);
        $reqobj = new payInvoice();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function deliverOrder(DeliverOrderRequest $request, ?string $requestId = null) : DeliverOrderResponse {
        $opname = 'deliverOrder';
        $this->startRequest($opname);
        $reqobj = new deliverOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function deliverOrderV2(DeliverOrderV2Request $request, ?string $requestId = null) : DeliverOrderV2Response {
        $opname = 'deliverOrderV2';
        $this->startRequest($opname);
        $reqobj = new deliverOrderV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getOrderCategories(?string $requestId = null) : GetOrderCategoriesResponse {
        $opname = 'getOrderCategories';
        $this->startRequest($opname);
        $reqobj = new getOrderCategories();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getReceipts(GetReceiptsRequest $request, ?string $requestId = null) : GetReceiptsResponse {
        $opname = 'getReceipts';
        $this->startRequest($opname);
        $reqobj = new getReceipts();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getReceipt(string $receiptId, ?string $requestId = null) : GetReceiptResponse {
        $opname = 'getReceipt';
        $this->startRequest($opname);
        $reqobj = new getReceipt();
        $reqobj->receiptId = $receiptId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getReceiptsByOrder(string $orderId, ?string $requestId = null) : GetReceiptsByOrderResponse {
        $opname = 'getReceiptsByOrder';
        $this->startRequest($opname);
        $reqobj = new getReceiptsByOrder();
        $reqobj->orderId = $orderId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getReceiptsByCashCount(GetReceiptsByCashCountRequest $request, ?string $requestId = null) : GetReceiptsByCashCountResponse {
        $opname = 'getReceiptsByCashCount';
        $this->startRequest($opname);
        $reqobj = new getReceiptsByCashCount();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function printReceipt(Terminal $terminal, ?string $requestId = null) : PrintReceiptResponse {
        $opname = 'printReceipt';
        $this->startRequest($opname);
        $reqobj = new printReceipt();
        $reqobj->terminal = $terminal;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function printReceiptV2(PrintReceiptV2Request $request, ?string $requestId = null) : PrintReceiptV2Response {
        $opname = 'printReceiptV2';
        $this->startRequest($opname);
        $reqobj = new printReceiptV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function printTableReceipt(Terminal $terminal, int $tableNumber, ?string $requestId = null) : PrintTableReceiptResponse {
        $opname = 'printTableReceipt';
        $this->startRequest($opname);
        $reqobj = new printTableReceipt();
        $reqobj->terminal = $terminal;
        $reqobj->tableNumber = $tableNumber;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function printTableReceiptV2(Terminal $terminal, PrintTableReceiptRequest $request, ?string $requestId = null) : PrintTableReceiptResponse {
        $opname = 'printTableReceiptV2';
        $this->startRequest($opname);
        $reqobj = new printTableReceiptV2();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function printTableReceiptV3(PrintTableReceiptV3Request $request, ?string $requestId = null) : PrintTableReceiptV3Response {
        $opname = 'printTableReceiptV3';
        $this->startRequest($opname);
        $reqobj = new printTableReceiptV3();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getJournals(GetJournalsRequest $request, ?string $requestId = null) : GetJournalsResponse {
        $opname = 'getJournals';
        $this->startRequest($opname);
        $reqobj = new getJournals();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getFinancialJournal(GetFinancialJournalRequest $request, ?string $requestId = null) : GetFinancialJournalResponse {
        $opname = 'getFinancialJournal';
        $this->startRequest($opname);
        $reqobj = new getFinancialJournal();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getFinancialJournalByCashCount(GetFinancialJournalByCashCountRequest $request, ?string $requestId = null) : GetFinancialJournalResponse {
        $opname = 'getFinancialJournalByCashCount';
        $this->startRequest($opname);
        $reqobj = new getFinancialJournalByCashCount();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCashCountList(GetCashCountListRequest $request, ?string $requestId = null) : GetCashCountListResponse {
        $opname = 'getCashCountList';
        $this->startRequest($opname);
        $reqobj = new getCashCountList();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCashDrawerBalancingList(GetCashDrawerBalancingListRequest $request, ?string $requestId = null) : GetCashDrawerBalancingListResponse {
        $opname = 'getCashDrawerBalancingList';
        $this->startRequest($opname);
        $reqobj = new getCashDrawerBalancingList();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTurnoverGroups(GetTurnoverGroupsRequest $request, ?string $requestId = null) : GetTurnoverGroupsResponse {
        $opname = 'getTurnoverGroups';
        $this->startRequest($opname);
        $reqobj = new getTurnoverGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateTurnoverGroups(UpdateTurnoverGroupsRequest $request, ?string $requestId = null) : UpdateTurnoverGroupsResponse {
        $opname = 'updateTurnoverGroups';
        $this->startRequest($opname);
        $reqobj = new updateTurnoverGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getProducts(GetProductsRequest $request, ?string $requestId = null) : GetProductsResponse {
        $opname = 'getProducts';
        $this->startRequest($opname);
        $reqobj = new getProducts();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createProduct(Product $product, ?string $requestId = null) : CreateProductResponse {
        $opname = 'createProduct';
        $this->startRequest($opname);
        $reqobj = new createProduct();
        $reqobj->product = $product;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateProduct(Product $product, ?string $requestId = null) : UpdateProductResponse {
        $opname = 'updateProduct';
        $this->startRequest($opname);
        $reqobj = new updateProduct();
        $reqobj->product = $product;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticleVariants(GetArticleVariantsRequest $request, ?string $requestId = null) : GetArticleVariantsResponse {
        $opname = 'getArticleVariants';
        $this->startRequest($opname);
        $reqobj = new getArticleVariants();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticlesVariants(GetArticlesVariantsRequest $request, ?string $requestId = null) : GetArticlesVariantsResponse {
        $opname = 'getArticlesVariants';
        $this->startRequest($opname);
        $reqobj = new getArticlesVariants();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function newArticleVariant(NewArticleVariantRequest $request, ?string $requestId = null) : NewArticleVariantResponse {
        $opname = 'newArticleVariant';
        $this->startRequest($opname);
        $reqobj = new newArticleVariant();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateArticleVariant(UpdateArticleVariantRequest $request, ?string $requestId = null) : UpdateArticleVariantResponse {
        $opname = 'updateArticleVariant';
        $this->startRequest($opname);
        $reqobj = new updateArticleVariant();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function deleteArticleVariants(DeleteArticleVariantsRequest $request, ?string $requestId = null) : DeleteArticleVariantsResponse {
        $opname = 'deleteArticleVariants';
        $this->startRequest($opname);
        $reqobj = new deleteArticleVariants();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getStock(GetStockRequest $request, ?string $requestId = null) : GetStockResponse {
        $opname = 'getStock';
        $this->startRequest($opname);
        $reqobj = new getStock();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getStockHistory(GetStockHistoryRequest $request, ?string $requestId = null) : GetStockHistoryResponse {
        $opname = 'getStockHistory';
        $this->startRequest($opname);
        $reqobj = new getStockHistory();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getStockHistoryV2(GetStockHistoryV2Request $request, ?string $requestId = null) : GetStockHistoryResponse {
        $opname = 'getStockHistoryV2';
        $this->startRequest($opname);
        $reqobj = new getStockHistoryV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateStock(UpdateStockRequest $request, ?string $requestId = null) : UpdateStockResponse {
        $opname = 'updateStock';
        $this->startRequest($opname);
        $reqobj = new updateStock();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function setStock(SetStockRequest $request, ?string $requestId = null) : SetStockResponse {
        $opname = 'setStock';
        $this->startRequest($opname);
        $reqobj = new setStock();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticleGroups(GetArticleGroupsRequest $request, ?string $requestId = null) : GetArticleGroupsResponse {
        $opname = 'getArticleGroups';
        $this->startRequest($opname);
        $reqobj = new getArticleGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticleGroupChanges(GetArticleGroupChangesRequest $request, ?string $requestId = null) : GetArticleGroupChangesResponse {
        $opname = 'getArticleGroupChanges';
        $this->startRequest($opname);
        $reqobj = new getArticleGroupChanges();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateArticleGroup(UpdateArticleGroupRequest $request, ?string $requestId = null) : UpdateArticleGroupResponse {
        $opname = 'updateArticleGroup';
        $this->startRequest($opname);
        $reqobj = new updateArticleGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function newArticleGroup(NewArticleGroupRequest $request, ?string $requestId = null) : NewArticleGroupResponse {
        $opname = 'newArticleGroup';
        $this->startRequest($opname);
        $reqobj = new newArticleGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function deleteArticleGroup(DeleteArticleGroupRequest $request, ?string $requestId = null) : DeleteArticleGroupResponse {
        $opname = 'deleteArticleGroup';
        $this->startRequest($opname);
        $reqobj = new deleteArticleGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function addProductsToArticleGroup(AddProductsToArticleGroupRequest $request, ?string $requestId = null) : AddProductsToArticleGroupResponse {
        $opname = 'addProductsToArticleGroup';
        $this->startRequest($opname);
        $reqobj = new addProductsToArticleGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function replaceProductsOfArticleGroup(ReplaceProductsOfArticleGroupRequest $request, ?string $requestId = null) : ReplaceProductsOfArticleGroupResponse {
        $opname = 'replaceProductsOfArticleGroup';
        $this->startRequest($opname);
        $reqobj = new replaceProductsOfArticleGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function deleteProductsFromArticleGroup(DeleteProductsFromArticleGroupRequest $request, ?string $requestId = null) : DeleteProductsFromArticleGroupResponse {
        $opname = 'deleteProductsFromArticleGroup';
        $this->startRequest($opname);
        $reqobj = new deleteProductsFromArticleGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function sendMessage(SendMessageRequest $request, ?string $requestId = null) : sendMessageResponse {
        $opname = 'sendMessage';
        $this->startRequest($opname);
        $reqobj = new sendMessage();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getMessages(GetMessagesRequest $request, ?string $requestId = null) : GetMessagesResponse {
        $opname = 'getMessages';
        $this->startRequest($opname);
        $reqobj = new getMessages();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getShifts(GetShiftsRequest $request, ?string $requestId = null) : GetShiftsResponse {
        $opname = 'getShifts';
        $this->startRequest($opname);
        $reqobj = new getShifts();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPurchaseOrders(GetPurchaseOrdersRequest $request, ?string $requestId = null) : GetPurchaseOrdersResponse {
        $opname = 'getPurchaseOrders';
        $this->startRequest($opname);
        $reqobj = new getPurchaseOrders();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function savePurchaseOrder(PurchaseOrder $purchaseOrder, ?string $requestId = null) : SavePurchaseOrderResponse {
        $opname = 'savePurchaseOrder';
        $this->startRequest($opname);
        $reqobj = new savePurchaseOrder();
        $reqobj->purchaseOrder = $purchaseOrder;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPurchaseOrdersV2(GetPurchaseOrdersV2Request $request, ?string $requestId = null) : GetPurchaseOrdersV2Response {
        $opname = 'getPurchaseOrdersV2';
        $this->startRequest($opname);
        $reqobj = new getPurchaseOrdersV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function savePurchaseOrderV2(SavePurchaseOrderV2Request $request, ?string $requestId = null) : SavePurchaseOrderV2Response {
        $opname = 'savePurchaseOrderV2';
        $this->startRequest($opname);
        $reqobj = new savePurchaseOrderV2_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPurchaseDeliveries(GetPurchaseDeliveriesRequest $request, ?string $requestId = null) : GetPurchaseDeliveriesResponse {
        $opname = 'getPurchaseDeliveries';
        $this->startRequest($opname);
        $reqobj = new getPurchaseDeliveries();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function savePurchaseDelivery(PurchaseDelivery $purchaseDelivery, ?string $requestId = null) : SavePurchaseDeliveryResponse {
        $opname = 'savePurchaseDelivery';
        $this->startRequest($opname);
        $reqobj = new savePurchaseDelivery();
        $reqobj->purchaseDelivery = $purchaseDelivery;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPurchaseDeliveriesV2(GetPurchaseDeliveriesV2Request $request, ?string $requestId = null) : GetPurchaseDeliveriesV2Response {
        $opname = 'getPurchaseDeliveriesV2';
        $this->startRequest($opname);
        $reqobj = new getPurchaseDeliveriesV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function savePurchaseDeliveryV2(SavePurchaseDeliveryV2Request $request, ?string $requestId = null) : SavePurchaseDeliveryV2Response {
        $opname = 'savePurchaseDeliveryV2';
        $this->startRequest($opname);
        $reqobj = new savePurchaseDeliveryV2_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function encryptString(EncryptStringRequest $request, ?string $requestId = null) : EncryptStringResponse {
        $opname = 'encryptString';
        $this->startRequest($opname);
        $reqobj = new encryptString();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticleCardLayout(GetArticleCardLayoutRequest $request, ?string $requestId = null) : GetArticleCardLayoutResponse {
        $opname = 'getArticleCardLayout';
        $this->startRequest($opname);
        $reqobj = new getArticleCardLayout();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateArticleCardLayout(UpdateArticleCardLayoutRequest $request, ?string $requestId = null) : UpdateArticleCardLayoutResponse {
        $opname = 'updateArticleCardLayout';
        $this->startRequest($opname);
        $reqobj = new updateArticleCardLayout();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getRetailSpaceRental(GetRetailSpaceRentalRequest $request, ?string $requestId = null) : GetRetailSpaceRentalResponse {
        $opname = 'getRetailSpaceRental';
        $this->startRequest($opname);
        $reqobj = new getRetailSpaceRental();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getRetailSpaceRentals(GetRetailSpaceRentalsRequest $request, ?string $requestId = null) : GetRetailSpaceRentalsResponse {
        $opname = 'getRetailSpaceRentals';
        $this->startRequest($opname);
        $reqobj = new getRetailSpaceRentals();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function EidSearch(EidSearchRequest $request, ?string $requestId = null) : EidSearchResponse {
        $opname = 'EidSearch';
        $this->startRequest($opname);
        $reqobj = new EidSearch();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getOverview(OverviewRequest $request, ?string $requestId = null) : OverviewResponse {
        $opname = 'getOverview';
        $this->startRequest($opname);
        $reqobj = new getOverview();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getOverviewFields(GetOverviewFieldsRequest $request, ?string $requestId = null) : GetOverviewFieldsResponse {
        $opname = 'getOverviewFields';
        $this->startRequest($opname);
        $reqobj = new getOverviewFields();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateBatch(UpdateBatchRequest $request, ?string $requestId = null) : UpdateBatchResponse {
        $opname = 'updateBatch';
        $this->startRequest($opname);
        $reqobj = new updateBatch();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function print_(PrintRequest $request, ?string $requestId = null) : PrintResponse {
        $opname = 'print';
        $this->startRequest($opname);
        $reqobj = new print_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getKitchenTickets(GetKitchenTicketsRequest $request, ?string $requestId = null) : GetKitchenTicketsResponse {
        $opname = 'getKitchenTickets';
        $this->startRequest($opname);
        $reqobj = new getKitchenTickets();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveStockCorrections(SaveStockCorrectionsRequest $request, ?string $requestId = null) : SaveStockCorrectionsResponse {
        $opname = 'saveStockCorrections';
        $this->startRequest($opname);
        $reqobj = new saveStockCorrections();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPurchaseBook(GetPurchaseBookRequest $request, ?string $requestId = null) : GetPurchaseBookResponse {
        $opname = 'getPurchaseBook';
        $this->startRequest($opname);
        $reqobj = new getPurchaseBook();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function savePurchaseBook(PurchaseBook $request, ?string $requestId = null) : SavePurchaseBookResponse {
        $opname = 'savePurchaseBook';
        $this->startRequest($opname);
        $reqobj = new savePurchaseBook();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function addToPurchaseBook(AddToPurchaseBookRequest $request, ?string $requestId = null) : AddToPurchaseBookResponse {
        $opname = 'addToPurchaseBook';
        $this->startRequest($opname);
        $reqobj = new addToPurchaseBook();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getStockCorrections(GetStockCorrectionsRequest $request, ?string $requestId = null) : GetStockCorrectionsResponse {
        $opname = 'getStockCorrections';
        $this->startRequest($opname);
        $reqobj = new getStockCorrections();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticlesNutritionalCharacteristics(GetArticlesNutritionalCharacteristicsRequest $request, ?string $requestId = null) : GetArticlesNutritionalCharacteristicsResponse {
        $opname = 'getArticlesNutritionalCharacteristics';
        $this->startRequest($opname);
        $reqobj = new getArticlesNutritionalCharacteristics();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateArticleNutritionalCharacteristics(UpdateArticleNutritionalCharacteristicsRequest $request, ?string $requestId = null) : UpdateArticleNutritionalCharacteristicsResponse {
        $opname = 'updateArticleNutritionalCharacteristics';
        $this->startRequest($opname);
        $reqobj = new updateArticleNutritionalCharacteristics();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPreparationMethodGroups(GetPreparationMethodGroupsRequest $request, ?string $requestId = null) : GetPreparationMethodGroupsResponse {
        $opname = 'getPreparationMethodGroups';
        $this->startRequest($opname);
        $reqobj = new getPreparationMethodGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function deletePreparationMethodGroup(DeletePreparationMethodGroupRequest $request, ?string $requestId = null) : DeletePreparationMethodGroupResponse {
        $opname = 'deletePreparationMethodGroup';
        $this->startRequest($opname);
        $reqobj = new deletePreparationMethodGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticlesPreparationMethodGroups(GetArticlesPreparationMethodGroupsRequest $request, ?string $requestId = null) : GetArticlesPreparationMethodGroupsResponse {
        $opname = 'getArticlesPreparationMethodGroups';
        $this->startRequest($opname);
        $reqobj = new getArticlesPreparationMethodGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateArticlePreparationMethodGroups(UpdateArticlePreparationMethodGroupsRequest $request, ?string $requestId = null) : UpdateArticlePreparationMethodGroupsResponse {
        $opname = 'updateArticlePreparationMethodGroups';
        $this->startRequest($opname);
        $reqobj = new updateArticlePreparationMethodGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function placeTableOrder(PlaceTableOrderReq $request, ?string $requestId = null) : PlaceTableOrderResp {
        $opname = 'placeTableOrder';
        $this->startRequest($opname);
        $reqobj = new placeTableOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTapTickTotals(TapTickTotalsRequest $request, ?string $requestId = null) : TapTickTotalsResponse {
        $opname = 'getTapTickTotals';
        $this->startRequest($opname);
        $reqobj = new getTapTickTotals();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTapTickHistory(TapTickHistoryRequest $request, ?string $requestId = null) : TapTickHistoryResponse {
        $opname = 'getTapTickHistory';
        $this->startRequest($opname);
        $reqobj = new getTapTickHistory();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function findRelationV2(FindRelationV2Request $request, ?string $requestId = null) : FindRelationV2Response {
        $opname = 'findRelationV2';
        $this->startRequest($opname);
        $reqobj = new findRelationV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTodoLists(GetTodoListsRequest $request, ?string $requestId = null) : GetTodoListsResponse {
        $opname = 'getTodoLists';
        $this->startRequest($opname);
        $reqobj = new getTodoLists();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTodoList(int $id, ?string $requestId = null) : TodoList {
        $opname = 'getTodoList';
        $this->startRequest($opname);
        $reqobj = new getTodoList();
        $reqobj->id = $id;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createTodoList(CreateTodoListRequest $request, ?string $requestId = null) : CreateTodoListResponse {
        $opname = 'createTodoList';
        $this->startRequest($opname);
        $reqobj = new createTodoList();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveTodoList(SaveTodoListRequest $request, ?string $requestId = null) : saveTodoListResponse {
        $opname = 'saveTodoList';
        $this->startRequest($opname);
        $reqobj = new saveTodoList();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveTodoListV2(SaveTodoListV2Request $request, ?string $requestId = null) : SaveTodoListV2Response {
        $opname = 'saveTodoListV2';
        $this->startRequest($opname);
        $reqobj = new saveTodoListV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function addToTodoList(AddToTodoListRequest $request, ?string $requestId = null) : addToTodoListResponse {
        $opname = 'addToTodoList';
        $this->startRequest($opname);
        $reqobj = new addToTodoList();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function removeTodoList(int $id, ?string $requestId = null) : removeTodoListResponse {
        $opname = 'removeTodoList';
        $this->startRequest($opname);
        $reqobj = new removeTodoList();
        $reqobj->id = $id;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getFilterProfiles(GetFilterProfilesRequest $request, ?string $requestId = null) : GetFilterProfilesResponse {
        $opname = 'getFilterProfiles';
        $this->startRequest($opname);
        $reqobj = new getFilterProfiles();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function savePreparationMethodGroup(SavePreparationMethodGroupRequest $request, ?string $requestId = null) : SavePreparationMethodGroupResponse {
        $opname = 'savePreparationMethodGroup';
        $this->startRequest($opname);
        $reqobj = new savePreparationMethodGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getNutritionalCharacteristics(GetNutritionalCharacteristicsRequest $request, ?string $requestId = null) : GetNutritionalCharacteristicsResponse {
        $opname = 'getNutritionalCharacteristics';
        $this->startRequest($opname);
        $reqobj = new getNutritionalCharacteristics();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateNutritionalCharacteristics(UpdateNutritionalCharacteristicsRequest $request, ?string $requestId = null) : UpdateNutritionalCharacteristicsResponse {
        $opname = 'updateNutritionalCharacteristics';
        $this->startRequest($opname);
        $reqobj = new updateNutritionalCharacteristics();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function determinePricing(DeterminePricingRequest $request, ?string $requestId = null) : DeterminePricingResponse {
        $opname = 'determinePricing';
        $this->startRequest($opname);
        $reqobj = new determinePricing();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function setRelationPresence(SetRelationPresenceRequest $request, ?string $requestId = null) : SetRelationPresenceResponse {
        $opname = 'setRelationPresence';
        $this->startRequest($opname);
        $reqobj = new setRelationPresence();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getRelationPresence(GetRelationPresenceRequest $request, ?string $requestId = null) : GetRelationPresenceResponse {
        $opname = 'getRelationPresence';
        $this->startRequest($opname);
        $reqobj = new getRelationPresence();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticleBranchDeviations(GetArticleBranchDeviationsRequest $request, ?string $requestId = null) : GetArticleBranchDeviationsResponse {
        $opname = 'getArticleBranchDeviations';
        $this->startRequest($opname);
        $reqobj = new getArticleBranchDeviations();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveArticleBranchDeviations(SaveArticleBranchDeviationsRequest $request, ?string $requestId = null) : SaveArticleBranchDeviationsResponse {
        $opname = 'saveArticleBranchDeviations';
        $this->startRequest($opname);
        $reqobj = new saveArticleBranchDeviations();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateArticleNutrients(UpdateArticleNutrientsRequest $request, ?string $requestId = null) : UpdateArticleNutrientsResponse {
        $opname = 'updateArticleNutrients';
        $this->startRequest($opname);
        $reqobj = new updateArticleNutrients();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateArticleContractLines(UpdateArticleContractLinesRequest $request, ?string $requestId = null) : UpdateArticleContractLinesResponse {
        $opname = 'updateArticleContractLines';
        $this->startRequest($opname);
        $reqobj = new updateArticleContractLines();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateArticleDynamicMinMaxStock(UpdateArticleDynamicMinMaxStockRequest $request, ?string $requestId = null) : UpdateArticleDynamicMinMaxStockResponse {
        $opname = 'updateArticleDynamicMinMaxStock';
        $this->startRequest($opname);
        $reqobj = new updateArticleDynamicMinMaxStock();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticleDynamicMinMaxStock(GetArticleDynamicMinMaxStockRequest $request, ?string $requestId = null) : GetArticleDynamicMinMaxStockResponse {
        $opname = 'getArticleDynamicMinMaxStock';
        $this->startRequest($opname);
        $reqobj = new getArticleDynamicMinMaxStock();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCardFilterOptions(GetCardFilterOptionsRequest $request, ?string $requestId = null) : GetCardFilterOptionsResponse {
        $opname = 'getCardFilterOptions';
        $this->startRequest($opname);
        $reqobj = new getCardFilterOptions();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPlannedCycleCounts(GetPlannedCycleCountsRequest $request, ?string $requestId = null) : GetPlannedCycleCountsResponse {
        $opname = 'getPlannedCycleCounts';
        $this->startRequest($opname);
        $reqobj = new getPlannedCycleCounts();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getActiveCycleCount(GetActiveCycleCountRequest $request, ?string $requestId = null) : GetActiveCycleCountResponse {
        $opname = 'getActiveCycleCount';
        $this->startRequest($opname);
        $reqobj = new getActiveCycleCount();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function setArticleRecalled(SetArticleRecalledRequest $request, ?string $requestId = null) : SetArticleRecalledResponse {
        $opname = 'setArticleRecalled';
        $this->startRequest($opname);
        $reqobj = new setArticleRecalled();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticleComponents(GetArticleComponentsRequest $request, ?string $requestId = null) : GetArticleComponentsResponse {
        $opname = 'getArticleComponents';
        $this->startRequest($opname);
        $reqobj = new getArticleComponents();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveArticleComponents(SaveArticleComponentsRequest $request, ?string $requestId = null) : SaveArticleComponentsResponse {
        $opname = 'saveArticleComponents';
        $this->startRequest($opname);
        $reqobj = new saveArticleComponents();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getConfiguration(GetConfigurationRequest $request, ?string $requestId = null) : GetConfigurationResponse {
        $opname = 'getConfiguration';
        $this->startRequest($opname);
        $reqobj = new getConfiguration();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateConfiguration(UpdateConfigurationRequest $request, ?string $requestId = null) : UpdateConfigurationResponse {
        $opname = 'updateConfiguration';
        $this->startRequest($opname);
        $reqobj = new updateConfiguration();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getConfigurationTree(GetConfigurationTreeRequest $request, ?string $requestId = null) : GetConfigurationTreeResponse {
        $opname = 'getConfigurationTree';
        $this->startRequest($opname);
        $reqobj = new getConfigurationTree();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getConfigurationValues(GetConfigurationValuesRequest $request, ?string $requestId = null) : GetConfigurationValuesResponse {
        $opname = 'getConfigurationValues';
        $this->startRequest($opname);
        $reqobj = new getConfigurationValues();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateConfigurationValues(UpdateConfigurationValuesRequest $request, ?string $requestId = null) : UpdateConfigurationValuesResponse {
        $opname = 'updateConfigurationValues';
        $this->startRequest($opname);
        $reqobj = new updateConfigurationValues();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getButtonLayout(Terminal $terminal, ?string $requestId = null) : getButtonLayoutResponse {
        $opname = 'getButtonLayout';
        $this->startRequest($opname);
        $reqobj = new getButtonLayout();
        $reqobj->terminal = $terminal;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getButtonLayoutGroupForBranch(ButtonLayoutGroupForBranchRequest $request, ?string $requestId = null) : ButtonLayoutGroupForBranchResponse {
        $opname = 'getButtonLayoutGroupForBranch';
        $this->startRequest($opname);
        $reqobj = new getButtonLayoutGroupForBranch();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getButtonLayoutGroupsWithAssignedWorkplaces(GetButtonLayoutGroupsWithAssignedWorkplacesRequest $request, ?string $requestId = null) : GetButtonLayoutGroupsWithAssignedWorkplacesResponse {
        $opname = 'getButtonLayoutGroupsWithAssignedWorkplaces';
        $this->startRequest($opname);
        $reqobj = new getButtonLayoutGroupsWithAssignedWorkplaces();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getButtonLayoutGroupDetails(GetButtonLayoutGroupDetailsRequest $request, ?string $requestId = null) : GetButtonLayoutGroupDetailsResponse {
        $opname = 'getButtonLayoutGroupDetails';
        $this->startRequest($opname);
        $reqobj = new getButtonLayoutGroupDetails();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveButtonLayoutGroupDetails(SaveButtonLayoutGroupDetailsRequest $request, ?string $requestId = null) : SaveButtonLayoutGroupDetailsResponse {
        $opname = 'saveButtonLayoutGroupDetails';
        $this->startRequest($opname);
        $reqobj = new saveButtonLayoutGroupDetails();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function deleteButtonLayoutGroup(DeleteButtonLayoutGroupRequest $request, ?string $requestId = null) : DeleteButtonLayoutGroupResponse {
        $opname = 'deleteButtonLayoutGroup';
        $this->startRequest($opname);
        $reqobj = new deleteButtonLayoutGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function assignButtonLayoutGroupToWorkplaces(AssignButtonLayoutGroupToWorkplacesRequest $request, ?string $requestId = null) : AssignButtonLayoutGroupToWorkplacesResponse {
        $opname = 'assignButtonLayoutGroupToWorkplaces';
        $this->startRequest($opname);
        $reqobj = new assignButtonLayoutGroupToWorkplaces();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticlesInLayout(Terminal $terminal, ?string $requestId = null) : getArticlesInLayoutResponse {
        $opname = 'getArticlesInLayout';
        $this->startRequest($opname);
        $reqobj = new getArticlesInLayout();
        $reqobj->terminal = $terminal;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getDayStockConfiguration(GetDayStockConfigurationRequest $request, ?string $requestId = null) : GetDayStockConfigurationResponse {
        $opname = 'getDayStockConfiguration';
        $this->startRequest($opname);
        $reqobj = new getDayStockConfiguration();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveDayStockConfiguration(SaveDayStockConfigurationRequest $request, ?string $requestId = null) : SaveDayStockConfigurationResponse {
        $opname = 'saveDayStockConfiguration';
        $this->startRequest($opname);
        $reqobj = new saveDayStockConfiguration_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getActivities(GetActivitiesRequest $request, ?string $requestId = null) : GetActivitiesResponse {
        $opname = 'getActivities';
        $this->startRequest($opname);
        $reqobj = new getActivities();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getActivityTypes(GetActivityTypesRequest $request, ?string $requestId = null) : GetActivityTypesResponse {
        $opname = 'getActivityTypes';
        $this->startRequest($opname);
        $reqobj = new getActivityTypes();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveActivityTypes(SaveActivityTypesRequest $request, ?string $requestId = null) : SaveActivityTypesResponse {
        $opname = 'saveActivityTypes';
        $this->startRequest($opname);
        $reqobj = new saveActivityTypes();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createActivity(CreateActivityRequest $request, ?string $requestId = null) : CreateActivityResponse {
        $opname = 'createActivity';
        $this->startRequest($opname);
        $reqobj = new createActivity_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateActivity(UpdateActivityRequest $request, ?string $requestId = null) : UpdateActivityResponse {
        $opname = 'updateActivity';
        $this->startRequest($opname);
        $reqobj = new updateActivity_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveActivity(SaveActivityRequest $request, ?string $requestId = null) : SaveActivityResponse {
        $opname = 'saveActivity';
        $this->startRequest($opname);
        $reqobj = new saveActivity_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function deleteActivity(DeleteActivityRequest $request, ?string $requestId = null) : DeleteActivityResponse {
        $opname = 'deleteActivity';
        $this->startRequest($opname);
        $reqobj = new deleteActivity();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getGksInformation(GetGksInformationRequest $request, ?string $requestId = null) : GetGksInformationResponse {
        $opname = 'getGksInformation';
        $this->startRequest($opname);
        $reqobj = new getGksInformation();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getMealplanMomentsConfiguration(GetMealplanMomentsConfigurationRequest $request, ?string $requestId = null) : GetMealplanMomentsConfigurationResponse {
        $opname = 'getMealplanMomentsConfiguration';
        $this->startRequest($opname);
        $reqobj = new getMealplanMomentsConfiguration();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getScheduledMealPlans(GetScheduledMealPlansRequest $request, ?string $requestId = null) : GetScheduledMealPlansResponse {
        $opname = 'getScheduledMealPlans';
        $this->startRequest($opname);
        $reqobj = new getScheduledMealPlans();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getArticleAlterationsGroups(GetArticleAlterationsGroupsRequest $request, ?string $requestId = null) : GetArticleAlterationsGroupsResponse {
        $opname = 'getArticleAlterationsGroups';
        $this->startRequest($opname);
        $reqobj = new getArticleAlterationsGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveArticleAlterationsGroup(SaveArticleAlterationsGroupRequest $request, ?string $requestId = null) : SaveArticleAlterationsGroupResponse {
        $opname = 'saveArticleAlterationsGroup';
        $this->startRequest($opname);
        $reqobj = new saveArticleAlterationsGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function deleteArticleAlterationsGroup(DeleteArticleAlterationsGroupRequest $request, ?string $requestId = null) : DeleteArticleAlterationsGroupResponse {
        $opname = 'deleteArticleAlterationsGroup';
        $this->startRequest($opname);
        $reqobj = new deleteArticleAlterationsGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateAttachedArticleAlterationsGroups(UpdateAttachedArticleAlterationsGroupsRequest $request, ?string $requestId = null) : UpdateAttachedArticleAlterationsGroupsResponse {
        $opname = 'updateAttachedArticleAlterationsGroups';
        $this->startRequest($opname);
        $reqobj = new updateAttachedArticleAlterationsGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateArticleMenu(UpdateArticleMenuRequest $request, ?string $requestId = null) : UpdateArticleMenuResponse {
        $opname = 'updateArticleMenu';
        $this->startRequest($opname);
        $reqobj = new updateArticleMenu();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateOnlineAuthorizationTree(UpdateOnlineAuthorizationTreeRequest $request, ?string $requestId = null) : UpdateOnlineAuthorizationTreeResponse {
        $opname = 'updateOnlineAuthorizationTree';
        $this->startRequest($opname);
        $reqobj = new updateOnlineAuthorizationTree();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getOwnerLabels(GetOwnerLabelsRequest $request, ?string $requestId = null) : GetOwnerLabelsResponse {
        $opname = 'getOwnerLabels';
        $this->startRequest($opname);
        $reqobj = new getOwnerLabels();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveOwnerLabels(SaveOwnerLabelsRequest $request, ?string $requestId = null) : SaveOwnerLabelsResponse {
        $opname = 'saveOwnerLabels';
        $this->startRequest($opname);
        $reqobj = new saveOwnerLabels();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getWordAliases(GetWordAliasesRequest $request, ?string $requestId = null) : GetWordAliasesResponse {
        $opname = 'getWordAliases';
        $this->startRequest($opname);
        $reqobj = new getWordAliases();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getApiVersion(?string $requestId = null) : getApiVersionResponse {
        $opname = 'getApiVersion';
        $this->startRequest($opname);
        $reqobj = new getApiVersion();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getDatabaseVersion(?string $requestId = null) : getDatabaseVersionResponse {
        $opname = 'getDatabaseVersion';
        $this->startRequest($opname);
        $reqobj = new getDatabaseVersion();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getLicenseInformation(?string $requestId = null) : GetLicenseInformationResponse {
        $opname = 'getLicenseInformation';
        $this->startRequest($opname);
        $reqobj = new getLicenseInformation();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getAvailableTerminalList(?string $requestId = null) : getAvailableTerminalListResponse {
        $opname = 'getAvailableTerminalList';
        $this->startRequest($opname);
        $reqobj = new getAvailableTerminalList();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function registerTerminal(Terminal $terminal, bool $forceRegistration, ?string $requestId = null) : RegisterTerminalResponse {
        $opname = 'registerTerminal';
        $this->startRequest($opname);
        $reqobj = new registerTerminal();
        $reqobj->terminal = $terminal;
        $reqobj->forceRegistration = $forceRegistration;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTerminalSettings(Terminal $terminal, ?string $requestId = null) : GetTerminalSettingsResponse {
        $opname = 'getTerminalSettings';
        $this->startRequest($opname);
        $reqobj = new getTerminalSettings();
        $reqobj->terminal = $terminal;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getBranchInformation(GetBranchInformationRequest $request, ?string $requestId = null) : GetBranchInformationResponse {
        $opname = 'getBranchInformation';
        $this->startRequest($opname);
        $reqobj = new getBranchInformation();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveBranchInformation(saveBranchInformationRequest $request, ?string $requestId = null) : saveBranchInformationResponse {
        $opname = 'saveBranchInformation';
        $this->startRequest($opname);
        $reqobj = new saveBranchInformation();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getBranchGroups(GetBranchGroupsRequest $request, ?string $requestId = null) : GetBranchGroupsResponse {
        $opname = 'getBranchGroups';
        $this->startRequest($opname);
        $reqobj = new getBranchGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getDeliveryMethods(?string $requestId = null) : GetDeliveryMethodsResponse {
        $opname = 'getDeliveryMethods';
        $this->startRequest($opname);
        $reqobj = new getDeliveryMethods();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getDeliveryMethodsV2(GetDeliveryMethodsV2Request $request, ?string $requestId = null) : GetDeliveryMethodsV2Response {
        $opname = 'getDeliveryMethodsV2';
        $this->startRequest($opname);
        $reqobj = new getDeliveryMethodsV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createDeliveryMethod(CreateDeliveryMethodRequest $request, ?string $requestId = null) : CreateDeliveryMethodResponse {
        $opname = 'createDeliveryMethod';
        $this->startRequest($opname);
        $reqobj = new createDeliveryMethod();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateDeliveryMethod(UpdateDeliveryMethodRequest $request, ?string $requestId = null) : UpdateDeliveryMethodResponse {
        $opname = 'updateDeliveryMethod';
        $this->startRequest($opname);
        $reqobj = new updateDeliveryMethod();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getBranches(?string $requestId = null) : getBranchesResponse {
        $opname = 'getBranches';
        $this->startRequest($opname);
        $reqobj = new getBranches();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCurrentSyncMarkers(?string $requestId = null) : getCurrentSyncMarkersResponse {
        $opname = 'getCurrentSyncMarkers';
        $this->startRequest($opname);
        $reqobj = new getCurrentSyncMarkers();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCurrentSyncMarkersV2(GetCurrentSyncMarkersV2Request $request, ?string $requestId = null) : GetCurrentSyncMarkersV2Response {
        $opname = 'getCurrentSyncMarkersV2';
        $this->startRequest($opname);
        $reqobj = new getCurrentSyncMarkersV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getNutrientTypes(GetNutrientTypesRequest $request, ?string $requestId = null) : GetNutrientTypesResponse {
        $opname = 'getNutrientTypes';
        $this->startRequest($opname);
        $reqobj = new getNutrientTypes();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function verifyCredentials(VerifyCredentialsRequest $request, ?string $requestId = null) : VerifyCredentialsResponse {
        $opname = 'verifyCredentials';
        $this->startRequest($opname);
        $reqobj = new verifyCredentials();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveCredentials(SaveCredentialsRequest $request, ?string $requestId = null) : SaveCredentialsResponse {
        $opname = 'saveCredentials';
        $this->startRequest($opname);
        $reqobj = new saveCredentials();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPasswordRequirements(PasswordRequirementsRequest $request, ?string $requestId = null) : PasswordRequirementsResponse {
        $opname = 'getPasswordRequirements';
        $this->startRequest($opname);
        $reqobj = new getPasswordRequirements();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function passwordReset(PasswordResetRequest $request, ?string $requestId = null) : PasswordResetResponse {
        $opname = 'passwordReset';
        $this->startRequest($opname);
        $reqobj = new passwordReset();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getFloorplans(GetFloorplansRequest $request, ?string $requestId = null) : GetFloorplansResponse {
        $opname = 'getFloorplans';
        $this->startRequest($opname);
        $reqobj = new getFloorplans();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function changeTableProperty(ChangeTablePropertyReq $request, ?string $requestId = null) : ChangeTablePropertyResp {
        $opname = 'changeTableProperty';
        $this->startRequest($opname);
        $reqobj = new changeTableProperty();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getEmployeeAuthorizations(GetEmployeeAuthorizationsRequest $request, ?string $requestId = null) : GetEmployeeAuthorizationsResponse {
        $opname = 'getEmployeeAuthorizations';
        $this->startRequest($opname);
        $reqobj = new getEmployeeAuthorizations();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getGroupAuthorizations(GetGroupAuthorizationsRequest $request, ?string $requestId = null) : GetGroupAuthorizationsResponse {
        $opname = 'getGroupAuthorizations';
        $this->startRequest($opname);
        $reqobj = new getGroupAuthorizations();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateGroupAuthorizations(UpdateGroupAuthorizationsRequest $request, ?string $requestId = null) : UpdateGroupAuthorizationsResponse {
        $opname = 'updateGroupAuthorizations';
        $this->startRequest($opname);
        $reqobj = new updateGroupAuthorizations();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getAuthorizationGroups(GetAuthorizationGroupsRequest $request, ?string $requestId = null) : GetAuthorizationGroupsResponse {
        $opname = 'getAuthorizationGroups';
        $this->startRequest($opname);
        $reqobj = new getAuthorizationGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getAuthorizationTree(GetAuthorizationTreeRequest $request, ?string $requestId = null) : GetAuthorizationTreeResponse {
        $opname = 'getAuthorizationTree';
        $this->startRequest($opname);
        $reqobj = new getAuthorizationTree();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getEmployeeBranchAuthorizations(GetEmployeeBranchAuthorizationsRequest $request, ?string $requestId = null) : GetEmployeeBranchAuthorizationsResponse {
        $opname = 'getEmployeeBranchAuthorizations';
        $this->startRequest($opname);
        $reqobj = new getEmployeeBranchAuthorizations();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveAuthorizationGroup(SaveAuthorizationGroupRequest $request, ?string $requestId = null) : SaveAuthorizationGroupResponse {
        $opname = 'saveAuthorizationGroup';
        $this->startRequest($opname);
        $reqobj = new saveAuthorizationGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function deleteAuthorizationGroup(DeleteAuthorizationGroupRequest $request, ?string $requestId = null) : DeleteAuthorizationGroupResponse {
        $opname = 'deleteAuthorizationGroup';
        $this->startRequest($opname);
        $reqobj = new deleteAuthorizationGroup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getEmployeeAuthorizationGroups(GetEmployeeAuthorizationGroupsRequest $request, ?string $requestId = null) : GetEmployeeAuthorizationGroupsResponse {
        $opname = 'getEmployeeAuthorizationGroups';
        $this->startRequest($opname);
        $reqobj = new getEmployeeAuthorizationGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateEmployeeAuthorizationGroups(UpdateEmployeeAuthorizationGroupsRequest $request, ?string $requestId = null) : UpdateEmployeeAuthorizationGroupsResponse {
        $opname = 'updateEmployeeAuthorizationGroups';
        $this->startRequest($opname);
        $reqobj = new updateEmployeeAuthorizationGroups();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getEmployeeAuthorizationSyncMarkers(GetEmployeeAuthorizationSyncMarkersRequest $request, ?string $requestId = null) : GetEmployeeAuthorizationSyncMarkersResponse {
        $opname = 'getEmployeeAuthorizationSyncMarkers';
        $this->startRequest($opname);
        $reqobj = new getEmployeeAuthorizationSyncMarkers();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getSpecialBarcodePatterns(GetSpecialBarcodePatternsRequest $request, ?string $requestId = null) : GetSpecialBarcodePatternsResponse {
        $opname = 'getSpecialBarcodePatterns';
        $this->startRequest($opname);
        $reqobj = new getSpecialBarcodePatterns();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function parseSpecialBarcode(ParseSpecialBarcodeRequest $request, ?string $requestId = null) : ParseSpecialBarcodeResponse {
        $opname = 'parseSpecialBarcode';
        $this->startRequest($opname);
        $reqobj = new parseSpecialBarcode();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getEmployeeWorkplaceLoginStates(GetEmployeeWorkplaceLoginStatesRequest $request, ?string $requestId = null) : GetEmployeeWorkplaceLoginStatesResponse {
        $opname = 'getEmployeeWorkplaceLoginStates';
        $this->startRequest($opname);
        $reqobj = new getEmployeeWorkplaceLoginStates();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getEmailTemplates(GetEmailTemplatesRequest $request, ?string $requestId = null) : GetEmailTemplatesResponse {
        $opname = 'getEmailTemplates';
        $this->startRequest($opname);
        $reqobj = new getEmailTemplates();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getAppConfiguration(GetAppConfigurationRequest $request, ?string $requestId = null) : GetAppConfigurationResponse {
        $opname = 'getAppConfiguration';
        $this->startRequest($opname);
        $reqobj = new getAppConfiguration();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function setWorkplaceActiveActivity(SetWorkplaceActiveActivityRequest $request, ?string $requestId = null) : SetWorkplaceActiveActivityResponse {
        $opname = 'setWorkplaceActiveActivity';
        $this->startRequest($opname);
        $reqobj = new setWorkplaceActiveActivity();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCostCenters(GetCostCentersRequest $request, ?string $requestId = null) : GetCostCentersResponse {
        $opname = 'getCostCenters';
        $this->startRequest($opname);
        $reqobj = new getCostCenters();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveCostCenters(SaveCostCentersRequest $request, ?string $requestId = null) : SaveCostCentersResponse {
        $opname = 'saveCostCenters';
        $this->startRequest($opname);
        $reqobj = new saveCostCenters();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getBpeBudgets(GetBpeBudgetsRequest $request, ?string $requestId = null) : GetBpeBudgetsResponse {
        $opname = 'getBpeBudgets';
        $this->startRequest($opname);
        $reqobj = new getBpeBudgets();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveBpeBudgets(SaveBpeBudgetsRequest $request, ?string $requestId = null) : SaveBpeBudgetsResponse {
        $opname = 'saveBpeBudgets';
        $this->startRequest($opname);
        $reqobj = new saveBpeBudgets();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createImage(CreateImageRequest $request, ?string $requestId = null) : CreateImageResponse {
        $opname = 'createImage';
        $this->startRequest($opname);
        $reqobj = new createImage();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createImageFromUrl(CreateImageFromUrlRequest $request, ?string $requestId = null) : CreateImageResponse {
        $opname = 'createImageFromUrl';
        $this->startRequest($opname);
        $reqobj = new createImageFromUrl();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCardImageLabels(GetCardImageLabelsRequest $request, ?string $requestId = null) : GetCardImageLabelsResponse {
        $opname = 'getCardImageLabels';
        $this->startRequest($opname);
        $reqobj = new getCardImageLabels();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCardImages(GetCardImagesRequest $request, ?string $requestId = null) : GetCardImagesResponse {
        $opname = 'getCardImages';
        $this->startRequest($opname);
        $reqobj = new getCardImages();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveCardImages(SaveCardImagesRequest $request, ?string $requestId = null) : SaveCardImagesResponse {
        $opname = 'saveCardImages';
        $this->startRequest($opname);
        $reqobj = new saveCardImages();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getImages(GetImagesRequest $request, ?string $requestId = null) : GetImagesResponse {
        $opname = 'getImages';
        $this->startRequest($opname);
        $reqobj = new getImages();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPrintLayouts(GetPrintLayoutsRequest $request, ?string $requestId = null) : GetPrintLayoutsResponse {
        $opname = 'getPrintLayouts';
        $this->startRequest($opname);
        $reqobj = new getPrintLayouts();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPrintLayoutAssignments(GetPrintLayoutAssignmentsRequest $request, ?string $requestId = null) : GetPrintLayoutAssignmentsResponse {
        $opname = 'getPrintLayoutAssignments';
        $this->startRequest($opname);
        $reqobj = new getPrintLayoutAssignments();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function savePrintLayoutAssignments(SavePrintLayoutAssignmentsRequest $request, ?string $requestId = null) : SavePrintLayoutAssignmentsResponse {
        $opname = 'savePrintLayoutAssignments';
        $this->startRequest($opname);
        $reqobj = new savePrintLayoutAssignments();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getRenderedPrintLayout(GetRenderedPrintLayoutRequest $request, ?string $requestId = null) : GetRenderedPrintLayoutResponse {
        $opname = 'getRenderedPrintLayout';
        $this->startRequest($opname);
        $reqobj = new getRenderedPrintLayout();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPrintLayoutMarkup(GetPrintLayoutMarkupRequest $request, ?string $requestId = null) : GetPrintLayoutMarkupResponse {
        $opname = 'getPrintLayoutMarkup';
        $this->startRequest($opname);
        $reqobj = new getPrintLayoutMarkup();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function printPrintLayout(PrintPrintLayoutRequest $request, ?string $requestId = null) : PrintPrintLayoutResponse {
        $opname = 'printPrintLayout';
        $this->startRequest($opname);
        $reqobj = new printPrintLayout();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getResolvedPrintTemplates(GetResolvedPrintTemplatesRequest $request, ?string $requestId = null) : GetResolvedPrintTemplatesResponse {
        $opname = 'getResolvedPrintTemplates';
        $this->startRequest($opname);
        $reqobj = new getResolvedPrintTemplates();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function checkGiftcardPayment(CheckGiftcardPaymentRequest $request, ?string $requestId = null) : CheckGiftcardPaymentResponse {
        $opname = 'checkGiftcardPayment';
        $this->startRequest($opname);
        $reqobj = new checkGiftcardPayment();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function registerGiftcardPayment(RegisterGiftcardPaymentRequest $request, ?string $requestId = null) : RegisterGiftcardPaymentResponse {
        $opname = 'registerGiftcardPayment';
        $this->startRequest($opname);
        $reqobj = new registerGiftcardPayment();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function registerGiftcardPaymentV2(RegisterGiftcardPaymentV2Request $request, ?string $requestId = null) : RegisterGiftcardPaymentV2Response {
        $opname = 'registerGiftcardPaymentV2';
        $this->startRequest($opname);
        $reqobj = new registerGiftcardPaymentV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createGiftcard(CreateGiftcardRequest $request, ?string $requestId = null) : CreateGiftcardResponse {
        $opname = 'createGiftcard';
        $this->startRequest($opname);
        $reqobj = new createGiftcard();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reloadGiftcard(ReloadGiftcardRequest $request, ?string $requestId = null) : ReloadGiftcardResponse {
        $opname = 'reloadGiftcard';
        $this->startRequest($opname);
        $reqobj = new reloadGiftcard();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getGiftcardTypes(GetGiftcardTypesRequest $request, ?string $requestId = null) : GetGiftcardTypesResponse {
        $opname = 'getGiftcardTypes';
        $this->startRequest($opname);
        $reqobj = new getGiftcardTypes();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getRelationGiftcards(GetRelationGiftcardsRequest $request, ?string $requestId = null) : GetRelationGiftcardsResponse {
        $opname = 'getRelationGiftcards';
        $this->startRequest($opname);
        $reqobj = new getRelationGiftcards();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getGiftcard(GetGiftcardRequest $request, ?string $requestId = null) : GetGiftcardResponse {
        $opname = 'getGiftcard';
        $this->startRequest($opname);
        $reqobj = new getGiftcard_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getGiftcardHistory(GetGiftcardHistoryRequest $request, ?string $requestId = null) : GetGiftcardHistoryResponse {
        $opname = 'getGiftcardHistory';
        $this->startRequest($opname);
        $reqobj = new getGiftcardHistory();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getGiftcards(GetGiftcardsRequest $request, ?string $requestId = null) : GetGiftcardsResponse {
        $opname = 'getGiftcards';
        $this->startRequest($opname);
        $reqobj = new getGiftcards();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveGiftcards(SaveGiftcardsRequest $request, ?string $requestId = null) : SaveGiftcardsResponse {
        $opname = 'saveGiftcards';
        $this->startRequest($opname);
        $reqobj = new saveGiftcards();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function restituteGiftcards(RestituteGiftcardsRequest $request, ?string $requestId = null) : RestituteGiftcardsResponse {
        $opname = 'restituteGiftcards';
        $this->startRequest($opname);
        $reqobj = new restituteGiftcards();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function linkGiftcardsToRelation(LinkGiftcardsToRelationRequest $request, ?string $requestId = null) : LinkGiftcardsToRelationResponse {
        $opname = 'linkGiftcardsToRelation';
        $this->startRequest($opname);
        $reqobj = new linkGiftcardsToRelation();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getVouchers(GetVouchersRequest $request, ?string $requestId = null) : GetVouchersResponse {
        $opname = 'getVouchers';
        $this->startRequest($opname);
        $reqobj = new getVouchers();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getVoucher(GetVoucherRequest $request, ?string $requestId = null) : GetVoucherResponse {
        $opname = 'getVoucher';
        $this->startRequest($opname);
        $reqobj = new getVoucher();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getVoucherCategories(GetVoucherCategoriesRequest $request, ?string $requestId = null) : GetVoucherCategoriesResponse {
        $opname = 'getVoucherCategories';
        $this->startRequest($opname);
        $reqobj = new getVoucherCategories();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getVoucherIssuances(GetVoucherIssuancesRequest $request, ?string $requestId = null) : GetVoucherIssuancesResponse {
        $opname = 'getVoucherIssuances';
        $this->startRequest($opname);
        $reqobj = new getVoucherIssuances();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getVoucherSettings(GetVoucherSettingsRequest $request, ?string $requestId = null) : GetVoucherSettingsResponse {
        $opname = 'getVoucherSettings';
        $this->startRequest($opname);
        $reqobj = new getVoucherSettings();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function issueVouchers(IssueVouchersRequest $request, ?string $requestId = null) : IssueVouchersResponse {
        $opname = 'issueVouchers';
        $this->startRequest($opname);
        $reqobj = new issueVouchers();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function issueVoucherExternalScanCodes(IssueVoucherExternalScanCodesRequest $request, ?string $requestId = null) : IssueVoucherExternalScanCodesResponse {
        $opname = 'issueVoucherExternalScanCodes';
        $this->startRequest($opname);
        $reqobj = new issueVoucherExternalScanCodes();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getVoucherExternalScanCodes(GetVoucherExternalScanCodesRequest $request, ?string $requestId = null) : GetVoucherExternalScanCodesResponse {
        $opname = 'getVoucherExternalScanCodes';
        $this->startRequest($opname);
        $reqobj = new getVoucherExternalScanCodes();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getRedeemableVoucherIssuances(GetRedeemableVoucherIssuancesRequest $request, ?string $requestId = null) : GetRedeemableVoucherIssuancesResponse {
        $opname = 'getRedeemableVoucherIssuances';
        $this->startRequest($opname);
        $reqobj = new getRedeemableVoucherIssuances();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function redeemVoucherIssuance(RedeemVoucherIssuanceRequest $request, ?string $requestId = null) : RedeemVoucherIssuanceResponse {
        $opname = 'redeemVoucherIssuance';
        $this->startRequest($opname);
        $reqobj = new redeemVoucherIssuance();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportTurnoverByBranch(ReportTurnoverByBranchRequest $request, ?string $requestId = null) : ReportTurnoverByBranchResponse {
        $opname = 'reportTurnoverByBranch';
        $this->startRequest($opname);
        $reqobj = new reportTurnoverByBranch_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportTurnoverByEmployee(ReportTurnoverByEmployeeRequest $request, ?string $requestId = null) : ReportTurnoverByEmployeeResponse {
        $opname = 'reportTurnoverByEmployee';
        $this->startRequest($opname);
        $reqobj = new reportTurnoverByEmployee_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportTurnoverByActivity(ReportTurnoverByActivityRequest $request, ?string $requestId = null) : ReportTurnoverByActivityResponse {
        $opname = 'reportTurnoverByActivity';
        $this->startRequest($opname);
        $reqobj = new reportTurnoverByActivity_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportTurnoverByTurnoverGroup(ReportTurnoverByTurnoverGroupRequest $request, ?string $requestId = null) : ReportTurnoverByTurnoverGroupResponse {
        $opname = 'reportTurnoverByTurnoverGroup';
        $this->startRequest($opname);
        $reqobj = new reportTurnoverByTurnoverGroup_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportTurnoverByArticle(ReportTurnoverByArticleRequest $request, ?string $requestId = null) : ReportTurnoverByArticleResponse {
        $opname = 'reportTurnoverByArticle';
        $this->startRequest($opname);
        $reqobj = new reportTurnoverByArticle_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportHoursByEmployee(ReportHoursByEmployeeRequest $request, ?string $requestId = null) : ReportHoursByEmployeeResponse {
        $opname = 'reportHoursByEmployee';
        $this->startRequest($opname);
        $reqobj = new reportHoursByEmployee_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportPaymentMethods(ReportPaymentMethodsRequest $request, ?string $requestId = null) : ReportPaymentMethodsResponse {
        $opname = 'reportPaymentMethods';
        $this->startRequest($opname);
        $reqobj = new reportPaymentMethods_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportTables(ReportTablesRequest $request, ?string $requestId = null) : ReportTablesResponse {
        $opname = 'reportTables';
        $this->startRequest($opname);
        $reqobj = new reportTables_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportCancellations(ReportCancellationsRequest $request, ?string $requestId = null) : ReportCancellationsResponse {
        $opname = 'reportCancellations';
        $this->startRequest($opname);
        $reqobj = new reportCancellations_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportBPE(ReportBPERequest $request, ?string $requestId = null) : ReportBPEResponse {
        $opname = 'reportBPE';
        $this->startRequest($opname);
        $reqobj = new reportBPE_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportBranchPerformance(ReportBranchPerformanceRequest $request, ?string $requestId = null) : ReportBranchPerformanceResponse {
        $opname = 'reportBranchPerformance';
        $this->startRequest($opname);
        $reqobj = new reportBranchPerformance_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportAverageSpending(ReportAverageSpendingRequest $request, ?string $requestId = null) : ReportAverageSpendingResponse {
        $opname = 'reportAverageSpending';
        $this->startRequest($opname);
        $reqobj = new reportAverageSpending_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportTurnover(ReportTurnoverRequest $request, ?string $requestId = null) : ReportTurnoverResponse {
        $opname = 'reportTurnover';
        $this->startRequest($opname);
        $reqobj = new reportTurnover_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportPaymentMethodDetails(ReportPaymentMethodDetailsRequest $request, ?string $requestId = null) : ReportPaymentMethodDetailsResponse {
        $opname = 'reportPaymentMethodDetails';
        $this->startRequest($opname);
        $reqobj = new reportPaymentMethodDetails();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportPrintableFinancialTotals(ReportPrintableFinancialTotalsRequest $request, ?string $requestId = null) : ReportPrintableFinancialTotalsResponse {
        $opname = 'reportPrintableFinancialTotals';
        $this->startRequest($opname);
        $reqobj = new reportPrintableFinancialTotals();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function reportArticlePerformance(ReportArticlePerformanceRequest $request, ?string $requestId = null) : ReportArticlePerformanceResponse {
        $opname = 'reportArticlePerformance';
        $this->startRequest($opname);
        $reqobj = new reportArticlePerformance_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function registerTimelineEvents(RegisterTimelineEventsRequest $request, ?string $requestId = null) : RegisterTimelineEventsResponse {
        $opname = 'registerTimelineEvents';
        $this->startRequest($opname);
        $reqobj = new registerTimelineEvents();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTimelineEvents(GetTimelineEventsRequest $request, ?string $requestId = null) : GetTimelineEventsResponse {
        $opname = 'getTimelineEvents';
        $this->startRequest($opname);
        $reqobj = new getTimelineEvents();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getSalesRepeatTemplates(GetSalesRepeatTemplatesRequest $request, ?string $requestId = null) : GetSalesRepeatTemplatesResponse {
        $opname = 'getSalesRepeatTemplates';
        $this->startRequest($opname);
        $reqobj = new getSalesRepeatTemplates();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveSalesRepeatTemplate(SaveSalesRepeatTemplateRequest $request, ?string $requestId = null) : SaveSalesRepeatTemplateResponse {
        $opname = 'saveSalesRepeatTemplate';
        $this->startRequest($opname);
        $reqobj = new saveSalesRepeatTemplate_();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function pauseSalesRepeatTemplates(PauseSalesRepeatTemplatesRequest $request, ?string $requestId = null) : PauseSalesRepeatTemplatesResponse {
        $opname = 'pauseSalesRepeatTemplates';
        $this->startRequest($opname);
        $reqobj = new pauseSalesRepeatTemplates();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function restartSalesRepeatTemplates(RestartSalesRepeatTemplatesRequest $request, ?string $requestId = null) : RestartSalesRepeatTemplatesResponse {
        $opname = 'restartSalesRepeatTemplates';
        $this->startRequest($opname);
        $reqobj = new restartSalesRepeatTemplates();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function stopSalesRepeatTemplates(StopSalesRepeatTemplatesRequest $request, ?string $requestId = null) : StopSalesRepeatTemplatesResponse {
        $opname = 'stopSalesRepeatTemplates';
        $this->startRequest($opname);
        $reqobj = new stopSalesRepeatTemplates();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getSalesObjectsBySalesRepeatTemplates(GetSalesObjectsBySalesRepeatTemplatesRequest $request, ?string $requestId = null) : GetSalesObjectsBySalesRepeatTemplatesResponse {
        $opname = 'getSalesObjectsBySalesRepeatTemplates';
        $this->startRequest($opname);
        $reqobj = new getSalesObjectsBySalesRepeatTemplates();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createSalesObjectsBySalesRepeatTemplate(CreateSalesObjectsBySalesRepeatTemplateRequest $request, ?string $requestId = null) : CreateSalesObjectsBySalesRepeatTemplateResponse {
        $opname = 'createSalesObjectsBySalesRepeatTemplate';
        $this->startRequest($opname);
        $reqobj = new createSalesObjectsBySalesRepeatTemplate();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function performBpeBudgetChecks(PerformBpeBudgetChecksRequest $request, ?string $requestId = null) : PerformBpeBudgetChecksResponse {
        $opname = 'performBpeBudgetChecks';
        $this->startRequest($opname);
        $reqobj = new performBpeBudgetChecks();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getTicketCounterSales(GetTicketCounterSalesRequest $request, ?string $requestId = null) : GetTicketCounterSalesResponse {
        $opname = 'getTicketCounterSales';
        $this->startRequest($opname);
        $reqobj = new getTicketCounterSales();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getSalePromotions(GetSalePromotionsRequest $request, ?string $requestId = null) : GetSalePromotionsResponse {
        $opname = 'getSalePromotions';
        $this->startRequest($opname);
        $reqobj = new getSalePromotions();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPaymentMethods(?string $requestId = null) : GetPaymentMethodsResponse {
        $opname = 'getPaymentMethods';
        $this->startRequest($opname);
        $reqobj = new getPaymentMethods();
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPaymentMethodsV2(GetPaymentMethodsRequest $request, ?string $requestId = null) : GetPaymentMethodsResponse {
        $opname = 'getPaymentMethodsV2';
        $this->startRequest($opname);
        $reqobj = new getPaymentMethodsV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getAvailablePaymentMethods(Terminal $terminal, ?string $requestId = null) : GetAvailablePaymentMethodsResponse {
        $opname = 'getAvailablePaymentMethods';
        $this->startRequest($opname);
        $reqobj = new getAvailablePaymentMethods();
        $reqobj->terminal = $terminal;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getAvailablePaymentMethodsV2(GetAvailablePaymentMethodsV2Request $request, ?string $requestId = null) : GetAvailablePaymentMethodsResponse {
        $opname = 'getAvailablePaymentMethodsV2';
        $this->startRequest($opname);
        $reqobj = new getAvailablePaymentMethodsV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createOrder(Order $order, ?string $requestId = null) : CreateOrderResponse {
        $opname = 'createOrder';
        $this->startRequest($opname);
        $reqobj = new createOrder();
        $reqobj->order = $order;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createOrderV2(CreateOrderV2Request $request, ?string $requestId = null) : CreateOrderV2Response {
        $opname = 'createOrderV2';
        $this->startRequest($opname);
        $reqobj = new createOrderV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createOrderV3(CreateOrderV3Request $request, ?string $requestId = null) : CreateOrderV3Response {
        $opname = 'createOrderV3';
        $this->startRequest($opname);
        $reqobj = new createOrderV3();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function payOrder(PayOrderRequest $request, ?string $requestId = null) : PayOrderResponse {
        $opname = 'payOrder';
        $this->startRequest($opname);
        $reqobj = new payOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function payOrderV2(PayOrderV2Request $request, ?string $requestId = null) : PayOrderV2Response {
        $opname = 'payOrderV2';
        $this->startRequest($opname);
        $reqobj = new payOrderV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function payTableOrder(Terminal $terminal, Order $order, PaymentList $paymentList, ?string $requestId = null) : PayTableOrderResponse {
        $opname = 'payTableOrder';
        $this->startRequest($opname);
        $reqobj = new payTableOrder();
        $reqobj->terminal = $terminal;
        $reqobj->order = $order;
        $reqobj->paymentList = $paymentList;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function payTableOrderV2(Terminal $terminal, PayTableOrderRequest $request, ?string $requestId = null) : PayTableOrderResponse {
        $opname = 'payTableOrderV2';
        $this->startRequest($opname);
        $reqobj = new payTableOrderV2();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function prepayTableOrder(Terminal $terminal, Order $order, PaymentList $paymentList, BigDecimal $prepayAmount, ?string $requestId = null) : PrepayTableOrderResponse {
        $opname = 'prepayTableOrder';
        $this->startRequest($opname);
        $reqobj = new prepayTableOrder();
        $reqobj->terminal = $terminal;
        $reqobj->order = $order;
        $reqobj->paymentList = $paymentList;
        $reqobj->prepayAmount = $prepayAmount;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function prepayTableOrderV2(Terminal $terminal, PrepayTableOrderRequest $request, ?string $requestId = null) : PrepayTableOrderResponse {
        $opname = 'prepayTableOrderV2';
        $this->startRequest($opname);
        $reqobj = new prepayTableOrderV2();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getOrdersByExtOrderIds(GetOrdersByExtOrderIdsRequest $request, ?string $requestId = null) : GetOrdersByExtOrderIdsResponse {
        $opname = 'getOrdersByExtOrderIds';
        $this->startRequest($opname);
        $reqobj = new getOrdersByExtOrderIds();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getProposals(GetProposalsRequest $request, ?string $requestId = null) : GetProposalsResponse {
        $opname = 'getProposals';
        $this->startRequest($opname);
        $reqobj = new getProposals();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getProposal(string $proposalId, ?string $requestId = null) : GetProposalResponse {
        $opname = 'getProposal';
        $this->startRequest($opname);
        $reqobj = new getProposal();
        $reqobj->proposalId = $proposalId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveProposal(Proposal $proposal, ?string $requestId = null) : SaveProposalResponse {
        $opname = 'saveProposal';
        $this->startRequest($opname);
        $reqobj = new saveProposal();
        $reqobj->proposal = $proposal;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function cancelProposal(string $proposalId, ?string $requestId = null) : CancelProposalResponse {
        $opname = 'cancelProposal';
        $this->startRequest($opname);
        $reqobj = new cancelProposal();
        $reqobj->proposalId = $proposalId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createOrderFromProposal(string $proposalId, ?string $requestId = null) : CreateOrderFromProposalResponse {
        $opname = 'createOrderFromProposal';
        $this->startRequest($opname);
        $reqobj = new createOrderFromProposal();
        $reqobj->proposalId = $proposalId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createInvoiceFromProposal(string $proposalId, ?string $requestId = null) : CreateInvoiceFromProposalResponse {
        $opname = 'createInvoiceFromProposal';
        $this->startRequest($opname);
        $reqobj = new createInvoiceFromProposal();
        $reqobj->proposalId = $proposalId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getOrdersByReceipts(GetOrdersByReceiptsRequest $request, ?string $requestId = null) : GetOrdersByReceiptsResponse {
        $opname = 'getOrdersByReceipts';
        $this->startRequest($opname);
        $reqobj = new getOrdersByReceipts();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCurrentTableOrders(GetCurrentTableOrdersRequest $request, ?string $requestId = null) : GetCurrentTableOrdersResponse {
        $opname = 'getCurrentTableOrders';
        $this->startRequest($opname);
        $reqobj = new getCurrentTableOrders();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getOrders(GetOrdersRequest $request, ?string $requestId = null) : GetOrdersResponse {
        $opname = 'getOrders';
        $this->startRequest($opname);
        $reqobj = new getOrders();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function determineContractLines(DetermineContractLinesRequest $request, ?string $requestId = null) : DetermineContractLinesResponse {
        $opname = 'determineContractLines';
        $this->startRequest($opname);
        $reqobj = new determineContractLines();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createInvoiceFromPackingSlips(CreateInvoiceFromPackingSlipsRequest $request, ?string $requestId = null) : CreateInvoiceFromPackingSlipsResponse {
        $opname = 'createInvoiceFromPackingSlips';
        $this->startRequest($opname);
        $reqobj = new createInvoiceFromPackingSlips();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getCashCountInfo(GetCashCountInfoRequest $request, ?string $requestId = null) : GetCashCountInfoResponse {
        $opname = 'getCashCountInfo';
        $this->startRequest($opname);
        $reqobj = new getCashCountInfo();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveCashCount(SaveCashCountRequest $request, ?string $requestId = null) : SaveCashCountResponse {
        $opname = 'saveCashCount';
        $this->startRequest($opname);
        $reqobj = new saveCashCount();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function processInvoice(ProcessInvoiceRequest $request, ?string $requestId = null) : ProcessInvoiceResponse {
        $opname = 'processInvoice';
        $this->startRequest($opname);
        $reqobj = new processInvoice();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function processProposal(ProcessProposalRequest $request, ?string $requestId = null) : ProcessProposalResponse {
        $opname = 'processProposal';
        $this->startRequest($opname);
        $reqobj = new processProposal();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function processOrder(ProcessOrderRequest $request, ?string $requestId = null) : ProcessOrderResponse {
        $opname = 'processOrder';
        $this->startRequest($opname);
        $reqobj = new processOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createInvoiceReminders(CreateInvoiceRemindersRequest $request, ?string $requestId = null) : CreateInvoiceRemindersResponse {
        $opname = 'createInvoiceReminders';
        $this->startRequest($opname);
        $reqobj = new createInvoiceReminders();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getInvoices(GetInvoicesRequest $request, ?string $requestId = null) : GetInvoicesResponse {
        $opname = 'getInvoices';
        $this->startRequest($opname);
        $reqobj = new getInvoices();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function creditInvoiceV2(CreditInvoiceV2Request $request, ?string $requestId = null) : CreditInvoiceV2Response {
        $opname = 'creditInvoiceV2';
        $this->startRequest($opname);
        $reqobj = new creditInvoiceV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function saveInvoice(Invoice $invoice, ?string $requestId = null) : SaveInvoiceResponse {
        $opname = 'saveInvoice';
        $this->startRequest($opname);
        $reqobj = new saveInvoice();
        $reqobj->invoice = $invoice;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getInvoice(string $invoiceId, ?string $requestId = null) : GetInvoiceResponse {
        $opname = 'getInvoice';
        $this->startRequest($opname);
        $reqobj = new getInvoice();
        $reqobj->invoiceId = $invoiceId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function findInvoice(string $extInvoiceId, ?string $requestId = null) : GetInvoiceResponse {
        $opname = 'findInvoice';
        $this->startRequest($opname);
        $reqobj = new findInvoice();
        $reqobj->extInvoiceId = $extInvoiceId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function creditInvoice(string $invoiceId, ?string $requestId = null) : CreditInvoiceResponse {
        $opname = 'creditInvoice';
        $this->startRequest($opname);
        $reqobj = new creditInvoice();
        $reqobj->invoiceId = $invoiceId;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPackingSlips(GetPackingSlipsRequest $request, ?string $requestId = null) : GetPackingSlipsResponse {
        $opname = 'getPackingSlips';
        $this->startRequest($opname);
        $reqobj = new getPackingSlips();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPackingSlipsByOrder(GetPackingSlipsByOrderRequest $request, ?string $requestId = null) : GetPackingSlipsByOrderResponse {
        $opname = 'getPackingSlipsByOrder';
        $this->startRequest($opname);
        $reqobj = new getPackingSlipsByOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function processPackingSlip(ProcessPackingSlipRequest $request, ?string $requestId = null) : ProcessPackingSlipResponse {
        $opname = 'processPackingSlip';
        $this->startRequest($opname);
        $reqobj = new processPackingSlip();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function cancelPackingSlip(CancelPackingSlipRequest $request, ?string $requestId = null) : CancelPackingSlipResponse {
        $opname = 'cancelPackingSlip';
        $this->startRequest($opname);
        $reqobj = new cancelPackingSlip();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getPackingSlipQueue(GetPackingSlipQueueRequest $request, ?string $requestId = null) : GetPackingSlipQueueResponse {
        $opname = 'getPackingSlipQueue';
        $this->startRequest($opname);
        $reqobj = new getPackingSlipQueue();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getWebhookConsumers(GetWebhookConsumersRequest $request, ?string $requestId = null) : GetWebhookConsumersResponse {
        $opname = 'getWebhookConsumers';
        $this->startRequest($opname);
        $reqobj = new getWebhookConsumers();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function startExternalPayment(Terminal $terminal, StartExternalPaymentRequest $request, ?string $requestId = null) : StartExternalPaymentResponse {
        $opname = 'startExternalPayment';
        $this->startRequest($opname);
        $reqobj = new startExternalPayment();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function pollExternalPayment(Terminal $terminal, PollExternalPaymentRequest $request, ?string $requestId = null) : PollExternalPaymentResponse {
        $opname = 'pollExternalPayment';
        $this->startRequest($opname);
        $reqobj = new pollExternalPayment();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function requestCancelExternalPayment(Terminal $terminal, RequestCancelExternalPaymentRequest $request, ?string $requestId = null) : RequestCancelExternalPaymentResponse {
        $opname = 'requestCancelExternalPayment';
        $this->startRequest($opname);
        $reqobj = new requestCancelExternalPayment();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function cancelExternalPayment(Terminal $terminal, CancelExternalPaymentRequest $request, ?string $requestId = null) : CancelExternalPaymentResponse {
        $opname = 'cancelExternalPayment';
        $this->startRequest($opname);
        $reqobj = new cancelExternalPayment();
        $reqobj->terminal = $terminal;
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function startExternalPaymentV2(ExternalPaymentWebhookRequest $request, ?string $requestId = null) : ExternalPaymentWebhookResponse {
        $opname = 'startExternalPaymentV2';
        $this->startRequest($opname);
        $reqobj = new startExternalPaymentV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function pollExternalPaymentV2(ExternalPaymentWebhookRequest $request, ?string $requestId = null) : ExternalPaymentWebhookResponse {
        $opname = 'pollExternalPaymentV2';
        $this->startRequest($opname);
        $reqobj = new pollExternalPaymentV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function requestCancelExternalPaymentV2(ExternalPaymentWebhookRequest $request, ?string $requestId = null) : ExternalPaymentWebhookResponse {
        $opname = 'requestCancelExternalPaymentV2';
        $this->startRequest($opname);
        $reqobj = new requestCancelExternalPaymentV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function cancelExternalPaymentV2(ExternalPaymentWebhookRequest $request, ?string $requestId = null) : ExternalPaymentWebhookResponse {
        $opname = 'cancelExternalPaymentV2';
        $this->startRequest($opname);
        $reqobj = new cancelExternalPaymentV2();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function sendWebhook(SendWebhookRequest $request, ?string $requestId = null) : WebhookResp {
        $opname = 'sendWebhook';
        $this->startRequest($opname);
        $reqobj = new sendWebhook();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getInterbranchOrders(GetInterbranchOrdersRequest $request, ?string $requestId = null) : GetInterbranchOrdersResponse {
        $opname = 'getInterbranchOrders';
        $this->startRequest($opname);
        $reqobj = new getInterbranchOrders();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createInterbranchOrder(CreateInterbranchOrderRequest $request, ?string $requestId = null) : CreateInterbranchOrderResponse {
        $opname = 'createInterbranchOrder';
        $this->startRequest($opname);
        $reqobj = new createInterbranchOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function updateInterbranchOrder(UpdateInterbranchOrderRequest $request, ?string $requestId = null) : UpdateInterbranchOrderResponse {
        $opname = 'updateInterbranchOrder';
        $this->startRequest($opname);
        $reqobj = new updateInterbranchOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function claimInterbranchOrder(ClaimInterbranchOrderRequest $request, ?string $requestId = null) : ClaimInterbranchOrderResponse {
        $opname = 'claimInterbranchOrder';
        $this->startRequest($opname);
        $reqobj = new claimInterbranchOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function releaseInterbranchOrder(ReleaseInterbranchOrderRequest $request, ?string $requestId = null) : ReleaseInterbranchOrderResponse {
        $opname = 'releaseInterbranchOrder';
        $this->startRequest($opname);
        $reqobj = new releaseInterbranchOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function cancelInterbranchOrder(CancelInterbranchOrderRequest $request, ?string $requestId = null) : CancelInterbranchOrderResponse {
        $opname = 'cancelInterbranchOrder';
        $this->startRequest($opname);
        $reqobj = new cancelInterbranchOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getInterbranchShipments(GetInterbranchShipmentsRequest $request, ?string $requestId = null) : GetInterbranchShipmentsResponse {
        $opname = 'getInterbranchShipments';
        $this->startRequest($opname);
        $reqobj = new getInterbranchShipments();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function shipInterbranchOrder(ShipInterbranchOrderRequest $request, ?string $requestId = null) : ShipInterbranchOrderResponse {
        $opname = 'shipInterbranchOrder';
        $this->startRequest($opname);
        $reqobj = new shipInterbranchOrder();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function getInterbranchDeliveries(GetInterbranchDeliveriesRequest $request, ?string $requestId = null) : GetInterbranchDeliveriesResponse {
        $opname = 'getInterbranchDeliveries';
        $this->startRequest($opname);
        $reqobj = new getInterbranchDeliveries();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function deliverInterbranchShipment(DeliverInterbranchShipmentRequest $request, ?string $requestId = null) : DeliverInterbranchShipmentResponse {
        $opname = 'deliverInterbranchShipment';
        $this->startRequest($opname);
        $reqobj = new deliverInterbranchShipment();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createInterbranchShipment(CreateInterbranchShipmentRequest $request, ?string $requestId = null) : CreateInterbranchShipmentResponse {
        $opname = 'createInterbranchShipment';
        $this->startRequest($opname);
        $reqobj = new createInterbranchShipment();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function createInterbranchDelivery(CreateInterbranchDeliveryRequest $request, ?string $requestId = null) : CreateInterbranchDeliveryResponse {
        $opname = 'createInterbranchDelivery';
        $this->startRequest($opname);
        $reqobj = new createInterbranchDelivery();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
    public function runInterbranchPlanner(RunInterbranchPlannerRequest $request, ?string $requestId = null) : RunInterbranchPlannerResponse {
        $opname = 'runInterbranchPlanner';
        $this->startRequest($opname);
        $reqobj = new runInterbranchPlanner();
        $reqobj->request = $request;
        $gen = new SoapGenerator();
        $rq = $gen->write($reqobj, $opname);
        $resp = $this->communicate($opname, $rq, $requestId);
        $res = $this->parser->parse($resp);
        $this->endRequest();
        return $res;
    }
}
