<?php
/* Smarty version 4.1.0, created on 2022-10-04 14:56:17
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\show_comp_by_inn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_633c2d71ad4262_13609073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5833027cb3e733864eaaba90bb3a2e8ac386f93d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\show_comp_by_inn.tpl',
      1 => 1664881584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:company_by_id_kp.tpl' => 1,
    'file:_include_modal.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633c2d71ad4262_13609073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1784101947633c2d71ad03e4_97326408';
?>


<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:company_by_id_kp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
$_smarty_tpl->_subTemplateRender("file:_include_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>




<?php }
}
