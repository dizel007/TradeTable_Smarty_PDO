<?php
/* Smarty version 4.1.0, created on 2022-10-12 16:18:41
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\modal\modal_insert_phone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6346beb1bb59d9_55176967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '662f3fbd71c8786d1996b8e4ab7d17cf2d8d0594' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\modal\\modal_insert_phone.tpl',
      1 => 1664886070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6346beb1bb59d9_55176967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16375306336346beb1badcd5_19868154';
?>
  <?php if (($_smarty_tpl->tpl_vars['typeQuery']->value == 309)) {?>
  <div class="dm-overlay" id="win309">
      <div class="dm-table-phone">
          <div class="dm-cell-phone">
              <div class="dm-modal-phone">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ДОБАВЛЕНИЕ НОВОГО ТЕЛЕФОННОГО НОМЕРА<br><br></div>
                  <form  action="changedb/insert_telephone.php" method="get">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
 <caption>Наименование КОМПАНИИ: <?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['name'];?>
</caption>

       <tr> 
          <td width="100" valign="top">ИНН</td>
           <td><input type="hidden" name="inn" value="<?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['inn'];?>
"><?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['inn'];?>
</td>
      </tr>
      <tr> 
        <td> 
          <!-- передаем id  чтобы знать куда вернуться -->
             <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">   
        </td>
      </tr>
      
      <tr> 
          <td valign="top">Телефон</td>
           <td>   
         <input type="text" class="form-control" id="phone2" name="telefon" placeholder="+7 (999) 999-99-99" autocomplete="off" data-phone-pattern>
	     
          </td>
      </tr>
      <tr>           
        <td valign="top">WhatsApp</td>
           <td> 
                <select size="1" name="whatsapp">
                      <option value="1">есть</option>
                      <option selected value="0">нет</option>
                 </select>
            
          </td>
    </tr>
    
     <tr>           
        <td valign="top">Актуальность номера</td>
              <td> 
            
                  <select id="js-phone-num" size="1" name="actual_phone">
                      <option value="Актуальный">Актуальный</option>
                      <option value="Неактуальный">Неактуальный</option>
                      <option value="Не звонить">Не звонить</option>
                      <option selected value="Новый">Новый</option>
                      <option value=""></option>
                </select>
            
          </td>
    </tr>
      <tr> 
          <td width="200" valign="top">Контактное Лицо</td>
         <td>   
            <textarea name="contactName" rows="1" cols="30"></textarea>
         </td>
        </tr>
      <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td>   
                 <textarea name="commentPhone" rows="3" cols="30"></textarea>
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
