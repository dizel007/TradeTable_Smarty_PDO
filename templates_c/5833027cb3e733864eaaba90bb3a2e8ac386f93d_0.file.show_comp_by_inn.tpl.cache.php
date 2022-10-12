<?php
/* Smarty version 4.1.0, created on 2022-10-12 13:22:24
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\show_comp_by_inn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6346a370577a07_56225828',
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
function content_6346a370577a07_56225828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17079712566346a37056fd06_96484438';
?>


<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:company_by_id_kp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
$_smarty_tpl->_subTemplateRender("file:_include_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>




<?php }
}
