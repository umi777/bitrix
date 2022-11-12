<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arIBlockType = CIBlockParameters::GetIBlockTypes();

$arIBlock=array();
$rsIBlock = CIBlock::GetList(Array("SORT" => "ASC"), Array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE"=>"Y"));
while($arr=$rsIBlock->Fetch())
{
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}


 $arComponentParameters = array(
        "GROUPS" => array(),
        "PARAMETERS" => array(
            "TEMPLATE_FOR_DATE" => array(
                "PARENT" => "BASE",
                "NAME" => GetMessage("TEMPLATE_FOR_DATE"),
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "d.m.Y",
            ),
            "IBLOCK_CODE" => array(
                "PARENT" => "BASE",
                "NAME" => GetMessage("IBLOCK_CODE"),
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "weekend",
            ),
            "IBLOCK_TYPE" => array(
            	"PARENT" => "BASE",
            	"NAME" => GetMessage("UMI_DT_IBLOCK_TYPE"),
            	"TYPE" => "LIST",
	            "VALUES" => $arIBlockType,
	            "REFRESH" => "Y",
            ),
            "IBLOCK_ID" => array(
            	"PARENT" => "BASE",
            	"NAME" => GetMessage("UMI_DT_IBLOCK"),
	            "TYPE" => "LIST",
            	"VALUES" => $arIBlock,
            	"REFRESH" => "Y",
	            "ADDITIONAL_VALUES" => "Y",
            ),
        ),
    );
?>