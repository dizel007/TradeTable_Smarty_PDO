<?php
/* Smarty version 4.1.0, created on 2022-10-04 14:56:17
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\modal\modal_update_infocomp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_633c2d71c2fd32_42901707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82b77f7a6596b41ea166f56dbfd3e3d1173922ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\modal\\modal_update_infocomp.tpl',
      1 => 1664865156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633c2d71c2fd32_42901707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1943956509633c2d71c28034_98633475';
?>
<!-- Корректировка данных о Компании -->
<?php if (($_smarty_tpl->tpl_vars['typeQuery']->value == 200)) {?>

  <div class="dm-overlay" id="win8">
      <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal">
                  <a href="#close" class="close"></a>
      <form  action="changedb/update_inn_company.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&typeQuery=200" method="post">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">

       <tr> 
          <td width="200" valign="top">ИНН КОМПАНИИ</td>
          <td valign="top"><?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['inn'];?>
</td>
          <td> 
             <input type="hidden" name="inn" value="<?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['inn'];?>
">
          </td>
      </tr>
      <tr> 
          <td> 
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></p>
        </td>
      </tr>
      <tr> 
          <td width="200" valign="top">КРАТКОЕ Наименование КОМПАНИИ</td>
          <td valign="top"><?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['name'];?>
</td>
      </tr>
      <tr> 
          <td width="200" valign="top">Полное Наименование КОМПАНИИ</td>
          <td valign="top"><?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['fullName'];?>
</td>
      </tr>
  
      <tr> 
          <td width="200" valign="top">Контактное Лицо</td>
         <td valign="top"><?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['contactFace'];?>
</td>
         <td>   
              <p>    
                <textarea name="contactFace" rows="3" cols="50"><?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['contactFace'];?>
</textarea>
              </p>
         </td>
        </tr>
        <tr> 
          <td width="200" valign="top">Юрид. Адрес</td>
          <td valign="top"><?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['adress'];?>
</td>
      </tr>
      <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td valign="top"><?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['comment'];?>
</td>
          <td>   
              <p>    
                <textarea name="comment" rows="3" cols="50"><?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['comment'];?>
</textarea>
              </p>
         </td>
      </tr>
               
</table>
                                    
       <p><input type="submit" value="Отправить"></p>
      </form>
     </div>
    </div>
   </div>
  </div>
  
<?php }
}
}
