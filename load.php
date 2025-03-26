<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

switch($_REQUEST['sAction']){

default :

getProducts();

break;

case'getPaginator';

getPaginator();

break;

case 'getProductsByManuID';
// echo $_REQUEST['manuId'];
getProductsByManufactureID($_REQUEST['manuId']);
break;

case 'getProductsByProdCatID';
getProductsByProdCatID($_REQUEST['prodCatID']);
break;

case 'getProductsByCategoryID';
getProductsByCategoryID($_REQUEST['categoryID']);
break;


}

?>