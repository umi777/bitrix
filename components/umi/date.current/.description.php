<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = array(
    "NAME" => GetMessage("DATE_CURENT_NAME"),
    "DESCRIPTION" => GetMessage("DATE_CURENT_DESCRIPTION"),
    "PATH" => array(
        "ID" => "umi_components",
        "CHILD" => array(
        "ID" => "curdate",
        "NAME" => GetMessage("DATE_CURENT_NAME")
        )
    ),
    /* "ICON" => "/images/icon.gif", */
);
?>