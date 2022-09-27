<?php
// Получили всех активынх пользователей
$active_users_arr = GetAllUsers($pdo, 'users');
foreach ($active_users_arr as $value) {
  $active_users_arr_smarty[] = $value['user_name'];
    }
$smarty->assign("active_users_arr_smarty", $active_users_arr_smarty);
