<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult['DATE'] = date($arParams["TEMPLATE_FOR_DATE"]);
if (getdate()['wday'] == 0 || getdate()['wday'] == 6) {
    $arResult['weekend'] = true;
} else {
    $arResult['weekend'] = false;
}
$this->IncludeComponentTemplate();
?>
