<?php
/* Smarty version 4.1.0, created on 2022-10-12 16:18:41
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\user_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6346beb1b7b044_73505886',
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
function content_6346beb1b7b044_73505886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2794479336346beb1b5bc48_84736853';
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
