<?php
/* Smarty version 4.1.0, created on 2022-09-27 09:29:18
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6332983e72ae37_87084596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4feb86069f69d7cf7767fcb7fa2f61b4980990d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\header.tpl',
      1 => 1663933780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6332983e72ae37_87084596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13323309966332983e726fb1_29677280';
?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['pageName']->value;?>
</title>
    <link rel = "stylesheet" href = "css/bootstrap/css/bootstrap-grid.css">
    <!-- <link rel = "stylesheet" href = "css/bootstrap/css/bootstrap.css"> -->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">


    <link rel = "stylesheet" href = "css/for_all_class.css">
    <link rel = "stylesheet" href = "css/drawtable.css">
    <link rel = "stylesheet" href = "css/admin_panel.css">
    <link rel = "stylesheet" href = "css/info_company.css">
    <link rel = "stylesheet" href = "css/modal.css"> 
    <link rel = "stylesheet" href = "css/mobile.css">
    <link rel = "stylesheet" href = "css/phone_tab.css">
    <link rel = "stylesheet" href = "css/up_down_button.css">
    <link rel = "stylesheet" href = "css/make_new_kp.css">
    
    
    
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <!-- скрипт по выбору типа Фильтра в шапке  -->
    <?php echo '<script'; ?>
 type="text/javascript" src="js/shapka_menu.js"><?php echo '</script'; ?>
>
    <!-- скрипт по выбору типа КП при создании нового КП   -->
    <?php echo '<script'; ?>
 type="text/javascript" src="js/make_new_kp_type_kp.js"><?php echo '</script'; ?>
>
    <!-- скрипт для телефоной маски -->
    <?php echo '<script'; ?>
 src="jquery-3.3.1.maskedinput.min.js" type="text/javascript"><?php echo '</script'; ?>
> 
 </head>

<body bgcolor="#ffffff">
<?php }
}
