<?php
$inn = $array_with_all_kp_temp[0]['InnCustomer'];

// echo "INN company=".$inn;
// получаем данные из таблицы ИНН по компании
$company_arr  = GetCompanyByInn($pdo,$inn);
$smarty->assign("company_arr",$company_arr);
// достаем все телефоны
$telephons_company = GetTelephoneByInn($pdo,$inn);
$smarty->assign("telephons_company",$telephons_company);
// доставем все емайлы компании
$emails_company = GetEmailByInn($pdo,$inn);
$smarty->assign("emails_company",$emails_company);


// echo "<pre>";
// print_r($emails_company);
// echo "<pre>";