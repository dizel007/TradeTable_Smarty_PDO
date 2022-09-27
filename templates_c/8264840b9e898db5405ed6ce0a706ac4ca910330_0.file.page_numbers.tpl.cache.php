<?php
/* Smarty version 4.1.0, created on 2022-09-27 09:29:18
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\page_numbers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6332983e769642_13395683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8264840b9e898db5405ed6ce0a706ac4ca910330' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\page_numbers.tpl',
      1 => 1664185053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6332983e769642_13395683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20596129746332983e761944_06003502';
?>

<?php if ($_smarty_tpl->tpl_vars['kolvo_pages']->value >= 1) {?>

   <div class="page_numbers">
     
      <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['kolvo_pages']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['kolvo_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
                <?php if (($_smarty_tpl->tpl_vars['j']->value+1) == $_smarty_tpl->tpl_vars['page_number']->value) {?>
                <b class="fs-1"><?php echo $_smarty_tpl->tpl_vars['j']->value+1;?>
</b> 
                <?php } else { ?>
                    <a href="?<?php echo $_smarty_tpl->tpl_vars['url_param']->value;?>
&page_number=<?php echo $_smarty_tpl->tpl_vars['j']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['j']->value+1;?>
</a>
                <?php }?>
        <?php }
}
?>
 <?php }?> 
</div>
<?php }
}
