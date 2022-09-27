<?php


$pageName='Страница с КП';
$smarty->assign("pageName", $pageName);

$smarty->display('header.tpl');

$smarty->display('shapka_menu.tpl');

// делаем проверку, есть ли ИНН у КП (вдруг не объектное)
$arr = GetKPById($pdo, $id);
if (($arr[0]['InnCustomer'] == '0') or ($arr[0]['InnCustomer'] = '')) {
  //  Одно КП, когда нет ИНН
  $smarty->assign("razdelitel", 'высланное КП');
  $smarty->display('main_table.tpl');
} else {

  //  смотрим есть ли ИНН в базе данных, или какой то распиздос так вписал
  $arr = GetCompanyByInn($pdo,$inn);
  if (isset($arr[0])) {
  $smarty->display('company_by_id_kp.tpl');
  }


    // звголовок для выбранного КП
    $smarty->assign("razdelitel", 'КП высланные в эту компанию');
    $smarty->display('razdelitel.tpl');

    $smarty->display('main_table.tpl');
    $smarty->display('modal_windows_inn_comp.tpl');

      // Ищем дополнительные КП к выбранному
      if ($id <> "") {
        $inn_temp = GetKPById($pdo, $id);
        $inn_t = $inn_temp[0]['InnCustomer'];
        $arr_dop_kp_temp = GetKPByInn($pdo,$inn_t);

          foreach ($arr_dop_kp_temp as $value) {
              if ($inn_temp[0]['id'] <> $value['id']){
                $arr_dop_kp[] = $value;
              }
            }
 
          if (isset($arr_dop_kp)){
            // звголовок для выбранного КП
          $smarty->assign("razdelitel", 'КП высланные Ранее в эту компанию');
          $smarty->display('razdelitel.tpl');
          SetPageNumbers ($smarty, $arr_dop_kp, $page_number);
          SetParametrsTable ($smarty, $arr_dop_kp);
          $smarty->display('main_table.tpl');
        }
    }
}

 $smarty->display('footer.tpl');


