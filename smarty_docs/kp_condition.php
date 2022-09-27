<?php
// Получаем из БД активные состояния КП 
$arr_сondition_kp = GetAll_Condition_kp($pdo);
foreach ($arr_сondition_kp as $value) {
  $array_condition_kp[] = $value['conditionkp'];
    }
$smarty->assign("array_condition_kp", $array_condition_kp);