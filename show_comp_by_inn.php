<?php
require 'libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->debugging =  false; // старт консоли отладчика
$smarty->caching = true;
$smarty->cache_lifetime = 120;

require_once "connect_db.php";
require_once "pdo_connect_db/select_functions.php";

$pageName='Вывод информации о компании';
$smarty->assign("pageName", $pageName);

$smarty->assign("razdelitel", 'Информация о компании');
$smarty->display('razdelitel.tpl');


isset($_GET['typeQuery'])? $typeQuery = $_GET['typeQuery']:$typeQuery ="";
$smarty->assign("typeQuery",$typeQuery);

isset($_GET['id'])?$id=$_GET['id']:$id="";
$smarty->assign("id",$id);

//  Если в Гете есть ИНН то берем его
isset($_GET['inn'])?$inn = $_GET['inn']:$inn = "";
$smarty->assign("inn",$inn);
 


//  КОСТЫЛЬ (если изменяем телефоны, то находим ИНН  чтобы по нему вернуться на ИНН и подтянуть КПэшки)
if (isset($_GET['id_phone'])) {
  $stmt = $pdo->prepare("SELECT * FROM telephone WHERE id = ?");
  $stmt->execute([$_GET['id_phone']]);
  $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $inn = $arr[0]['inn'];
  $id_phone = $_GET['id_phone'];
  $smarty->assign("id_phone",$id_phone);
}
//  КОСТЫЛЬ (если изменяем email, то находим ИНН  чтобы по нему вернуться на ИНН и подтянуть КПэшки)
if (isset($_GET['id_email'])) {
  $stmt = $pdo->prepare("SELECT * FROM email WHERE id = ?");
  $stmt->execute([$_GET['id_email']]);
  $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $inn = $arr[0]['inn'];
  $id_email = $_GET['id_email'];
  $smarty->assign("id_email",$id_email);
}


$company_arr  = GetCompanyByInn($pdo,$inn);
$smarty->assign("company_arr",$company_arr);
// достаем все телефоны
$telephons_company = GetTelephoneByInn($pdo,$inn);
$smarty->assign("telephons_company",$telephons_company);
// доставем все емайлы компании
$emails_company = GetEmailByInn($pdo,$inn);
$smarty->assign("emails_company",$emails_company);


$smarty->display('show_comp_by_inn.tpl');


$smarty->assign("razdelitel", 'КП высланные в эту компанию');
$smarty->display('razdelitel.tpl');
// $get_FinishContract = 1;
// $page_number =200;


$sql= " WHERE `InnCustomer` =".$inn;
require_once "smarty_docs/full_get.php";
$get_FinishContract = 1; //   когда выводим по ID и ИНН то выводим и закрытые КП
require_once "smarty_docs/setup_param_main_table_2.php";
$smarty->display('main_table.tpl');
