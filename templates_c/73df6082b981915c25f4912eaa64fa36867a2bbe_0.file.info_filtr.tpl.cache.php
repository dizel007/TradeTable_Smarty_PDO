<?php
/* Smarty version 4.1.0, created on 2022-10-12 16:18:41
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\info_filtr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6346beb1c80c09_80951911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73df6082b981915c25f4912eaa64fa36867a2bbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\info_filtr.tpl',
      1 => 1662969553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6346beb1c80c09_80951911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13133517386346beb1c78f00_72675672';
?>
<div class = "filter_p">
ФИЛЬТР: <b><?php echo $_smarty_tpl->tpl_vars['kpCount']->value;?>
</b> КП:
<?php if ($_smarty_tpl->tpl_vars['get_nomerKP']->value <> '') {?>
<i>Номер КП :<b><?php echo $_smarty_tpl->tpl_vars['get_nomerKP']->value;?>
</b></i>
<?php }
if ($_smarty_tpl->tpl_vars['get_date_start']->value <> '') {?>
<i>Дата начала:<b><?php echo $_smarty_tpl->tpl_vars['get_date_start']->value;?>
</b></i>
<?php }
if ($_smarty_tpl->tpl_vars['get_date_end']->value <> '') {?>
<i>Дата окончания :<b><?php echo $_smarty_tpl->tpl_vars['get_date_end']->value;?>
</b></i>
<?php }
if ($_smarty_tpl->tpl_vars['get_inn']->value <> '') {?>
<i>ИНН :<b><?php echo $_smarty_tpl->tpl_vars['get_inn']->value;?>
</b></i>
<?php }
if ($_smarty_tpl->tpl_vars['get_responsible']->value <> '') {?>
<i>ответственный :<b><?php echo $_smarty_tpl->tpl_vars['get_responsible']->value;?>
</b></i>
<?php }
if ($_smarty_tpl->tpl_vars['get_name_zakazchik']->value <> '') {?>
<i>Наименование Заказчика:<b><?php echo $_smarty_tpl->tpl_vars['get_name_zakazchik']->value;?>
</b></i>
<?php }
if ($_smarty_tpl->tpl_vars['get_adres_postavki']->value <> '') {?>
<i>Адрес поставки :<b><?php echo $_smarty_tpl->tpl_vars['get_adres_postavki']->value;?>
</b></i>
<?php }?>

</div><?php }
}
