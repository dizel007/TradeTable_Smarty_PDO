<?php
/* Smarty version 4.1.0, created on 2022-10-12 16:18:41
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6346beb1d15325_42227161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac1e3d6eaa128d645a47a9ac61bceeccb71ee66c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\footer.tpl',
      1 => 1664879491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modal/modal_change_zakup.tpl' => 1,
  ),
),false)) {
function content_6346beb1d15325_42227161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2902352026346beb1d114a1_67720398';
?>
 <!-- модальные окна для правки по ИНН  -->

 <!-- модальные окна для вставки телефонов -->

<?php $_smarty_tpl->_subTemplateRender("file:modal/modal_change_zakup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?> <!-- модальные окна для изменения инорфмаци d КП -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/ajax_query_comment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/modal.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/phone_mask.js"><?php echo '</script'; ?>
>

</body>

</html>


<?php }
}
