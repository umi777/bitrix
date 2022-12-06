<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
$DATE['format'] = $DB->DateFormatToPHP(CSite::GetDateFormat("SHORT"));
$DATE['INPUT'] = $request->getQuery('input_date') ?? date($arParams["TEMPLATE_FOR_DATE"]);
$DATE['PARSE'] = date_parse_from_format("d.m.Y", $DATE['INPUT']);
$DATE['INPUTCONVERT'] = ConvertDateTime($DATE['INPUT'], "YYYY-MM-DD", "ru");
if (!empty($arParams["IBLOCK_ID"])){
  $iblock = $arParams["IBLOCK_ID"];
}else{
$iblockCode = $arParams["IBLOCK_CODE"];
$iblock = \Bitrix\Iblock\IblockTable::getList(['filter'=>['CODE'=>$iblockCode]])->fetch()['ID'];
}
$redDay = CIBlockElement::GetList(
	[],
	['IBLOCK_ID'=>$iblock,'PROPERTY_DATE'=>[$DATE['INPUTCONVERT']]],
	false, false,
	['ID','TYPE','CODE','NAME','PROPERTY_DATE',]
);
$arResult['REDDAY'] = $redDay->fetch();
$arResult['DATE'] = $DATE;
$arResult['weekend'] = ($arResult['REDDAY'] || getdate(strtotime($DATE['INPUT']))['wday'] == 0 || getdate(strtotime($DATE['INPUT']))['wday'] == 6);
$this->IncludeComponentTemplate();
?>
