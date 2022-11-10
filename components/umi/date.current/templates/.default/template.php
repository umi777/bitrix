<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
      echo 'Сегодня ' . $arResult['DATE'] . ($arResult['weekend']? ' выходной' : ' рабочий') . ' день';
?>