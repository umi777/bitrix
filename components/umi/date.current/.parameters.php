<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
 $arComponentParameters = array(
        "GROUPS" => array(),
        "PARAMETERS" => array(
            "TEMPLATE_FOR_DATE" => array(
                "PARENT" => "BASE",
                "NAME" => "Шаблон для даты",
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "d.m.Y",
            ),
            "IBLOCK_CODE" => array(
                "PARENT" => "BASE",
                "NAME" => "Символьный код инфоблока",
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "weekend",
            ),
        ),
    );
?>