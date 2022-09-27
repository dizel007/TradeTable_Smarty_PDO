<?php
/* Smarty version 4.1.0, created on 2022-09-27 09:29:18
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\user_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6332983e6cd222_47154219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40e41436df172fa65c39c33a42d532a123f31bcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\user_menu.tpl',
      1 => 1663244359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6332983e6cd222_47154219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10597239866332983e6a9f94_92187922';
?>
<div class = "user_menu">
  <div class = "menu_button">
   <a href="make_new_kp.php?user=<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
"> Создать КП </a>
  </div>

   <div class = "menu_button">
   <a href="reports.php" target="_blank"> Аналитика </a>
  </div>

  <div class = "menu_button">
    Пользователь: <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

  </div>

 
</div><?php }
}
