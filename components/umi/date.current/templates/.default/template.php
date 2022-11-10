<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<form method="GET" action="" name="date" class="mb-6">
<?
$APPLICATION->IncludeComponent(
      "bitrix:main.calendar", 
      "", 
      array(
            "SHOW_INPUT" => "Y",
            "FORM_NAME" => "date",
            "INPUT_NAME" => "input_date",
            "INPUT_NAME_FINISH" => "",
            "INPUT_VALUE" => date('d.m.Y'),
            "INPUT_VALUE_FINISH" => "",
            "SHOW_TIME" => "N",
            "COMPONENT_TEMPLATE" => "kartonkino",
            "HIDE_TIMEBAR" => "N"
      ),
      false
);?>
<input class="m_backg m_backg_hover_darken" type="submit" name="filter" value="Отправить" />
</form>
<?
if ($arResult['REDDAY']) {
      echo $arResult['DATE']['INPUT'] . ' ' . 'праздник' . ' - ' . '<b>' . $arResult['REDDAY']['NAME'] .'</b>';
} else {
      echo $arResult['DATE']['INPUT'] . ' - ' . ($arResult['weekend']? ' выходной' : ' рабочий') . ' день';
}
?>