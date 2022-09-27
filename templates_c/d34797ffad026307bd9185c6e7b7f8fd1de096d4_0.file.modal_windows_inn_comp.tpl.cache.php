<?php
/* Smarty version 4.1.0, created on 2022-09-27 09:29:18
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\modal_windows_inn_comp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6332983e7daae4_96263048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd34797ffad026307bd9185c6e7b7f8fd1de096d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\modal_windows_inn_comp.tpl',
      1 => 1662467945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6332983e7daae4_96263048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4957560616332983e7bb6d3_37452016';
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
  
<?php }?>
<!--    Добавление НОВОГО НОМЕРА телефона -->

 <?php if (($_smarty_tpl->tpl_vars['typeQuery']->value == 309)) {?>

  <div class="dm-overlay" id="win309">
      <div class="dm-table-phone">
          <div class="dm-cell-phone">
              <div class="dm-modal-phone">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ДОБАВЛЕНИЕ НОВОГО ТЕЛЕФОННОГО НОМЕРА<br><br></div>
                  <form  action="changedb/insert_telephone.php?id=$id&inn=$inn" method="get">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
 <caption>Наименование КОМПАНИИ: <?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['name'];?>
</caption>

       <tr> 
          <td width="100" valign="top">ИНН</td>
           <td> 
             <input type="hidden" name="inn" value="<?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['inn'];?>
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
         <input type="text" class="form-control" id="phone2" name="telefon" placeholder="+7 (999) 999-99-99" autocomplete="off">
	   
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

<?php }?>


<!--  *******************   ******** Корректировка телефонного номера -->
<?php if (($_smarty_tpl->tpl_vars['typeQuery']->value == 300)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['telephons_company']->value, 'tel_value');
$_smarty_tpl->tpl_vars['tel_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tel_value']->value) {
$_smarty_tpl->tpl_vars['tel_value']->do_else = false;
if ($_smarty_tpl->tpl_vars['tel_value']->value['id'] == $_smarty_tpl->tpl_vars['id_phone']->value) {?>
  <div class="dm-overlay" id="win300">
      <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ИЗМЕНЕНИЕ ДАННЫХ ТЕЛЕФОННОГО НОМЕРА<br><br></div>
                  <form  action="changedb/update_telephone.php?id=<?php echo $_smarty_tpl->tpl_vars['id_phone']->value;?>
" method="post">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
 <caption>Наименование КОМПАНИИ: <?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['name'];?>
</caption>
 <caption><b>Телефон: <?php echo $_smarty_tpl->tpl_vars['tel_value']->value['telephone'];?>
</b></caption>

      <tr> 
        <td> 
             <input type="hidden" name="id_phone_cor" value="<?php echo $_smarty_tpl->tpl_vars['id_phone']->value;?>
">
        </td>
        <td> 
          <!-- передаем id  чтобы знать куда вернуться -->
             <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">   
        </td>
      </tr>
      
      <tr>           
        <td valign="top">WhatsApp</td>
        <td valign="top"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['whatsapp'];?>
</td>
        <td> 
                  <select size="1" name="whatsapp">
                      <option selected value = "<?php echo $_smarty_tpl->tpl_vars['tel_value']->value['whatsapp'];?>
"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['whatsapp'];?>
</option>
                      <option value="1">есть</option>
                      <option value="0">нет</option>
                  </select>
            
          </td>
    </tr>

    <tr >           
        <td valign="top">Актуальность номера</td>



        <td valign="top"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['actual'];?>
</td>
         <td> 
            
                  <select id="js-phone-num" size="1" name="actual_phone">
                      <option id="js-new-modal-" selected value = "<?php echo $_smarty_tpl->tpl_vars['tel_value']->value['actual'];?>
"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['actual'];?>
</option>
                      <option value="Актуальный">Актуальный</option>
                      <option value="Неактуальный">Неактуальный</option>
                      <option value="Не звонить">Не звонить</option>
                      <option value="Новый">Новый</option>
                      <option value=""></option>
                </select>
            
          </td>
    </tr>

     <tr> 
          <td width="200" valign="top">Контактное Лицо</td>
          <td valign="top"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['name'];?>
</td>
          <td>   
              <textarea name="contactName" rows="1" cols="30"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['name'];?>
</textarea>
         </td>
     </tr>
  
     <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td valign="top"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['comment'];?>
</td>
          <td>   
              <p>    
                <textarea name="commentPhone" rows="3" cols="30"><?php echo $_smarty_tpl->tpl_vars['tel_value']->value['comment'];?>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 <?php }?>
<!-- *********************************// корректировка EMAIL /////////************************* -->
 <?php if ($_smarty_tpl->tpl_vars['typeQuery']->value == 400) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emails_company']->value, 'email_value');
$_smarty_tpl->tpl_vars['email_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email_value']->value) {
$_smarty_tpl->tpl_vars['email_value']->do_else = false;
?>
 <?php if ($_smarty_tpl->tpl_vars['email_value']->value['id'] == $_smarty_tpl->tpl_vars['id_email']->value) {?>
  <div class="dm-overlay" id="win400">
      <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ИЗМЕНЕНИЕ ДАННЫХ EMAIL<br><br></div>
                  <form  action="changedb/update_email.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
 <caption>Наименование КОМПАНИИ: <?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['name'];?>
</caption>
 
 <caption><b>Email: <?php echo $_smarty_tpl->tpl_vars['email_value']->value['email'];?>
</b></caption>

      <tr> 
        <td> 
             <input type="hidden" name="id_email_cor" value="<?php echo $_smarty_tpl->tpl_vars['id_email']->value;?>
">
        </td>
        <td> 
          <!-- передаем id  чтобы знать куда вернуться -->
             <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">   
        </td>
      </tr>
      <tr>           
      </tr>

      <tr>           
        <td valign="top">Актуальность email</td>
        <td valign="top"><?php echo $_smarty_tpl->tpl_vars['email_value']->value['actual'];?>
</td>
         <td> 
            
                  <select id="js-actual_email" size="1" name="actual_email">
                      <option id="js-new-modal-" selected value = "<?php echo $_smarty_tpl->tpl_vars['email_value']->value['actual'];?>
"><?php echo $_smarty_tpl->tpl_vars['email_value']->value['actual'];?>
</option>
                      <option value="Актуальная">Актуальная</option>
                      <option value="Неактуальная">Неактуальная</option>
                      <option value="Новая">Новая</option>
                      <option value=""></option>
                </select>
            
          </td>
    </tr>

      <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td valign="top"><?php echo $_smarty_tpl->tpl_vars['email_value']->value['comment'];?>
</td>
          <td>   
              <p>    
                <textarea name="commentEmail" rows="3" cols="30"><?php echo $_smarty_tpl->tpl_vars['email_value']->value['comment'];?>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<!-- ***********************************// Добавление НОВОГО EMAIL  ///////// -->
<?php if (($_smarty_tpl->tpl_vars['typeQuery']->value == 409)) {?>
  
  <div class="dm-overlay" id="win409">
      <div class="dm-table-phone">
          <div class="dm-cell-phone">
              <div class="dm-modal-phone">
                  <a href="#close" class="close"></a>
      
      <div class ="center">ДОБАВЛЕНИЕ НОВОЙ ЭЛЕКТРОННОЙ ПОЧТЫ<br><br></div>

<form  action="changedb/insert_email.php?id=$id&inn=$inn" method="get">
  <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">
    <caption>Наименование КОМПАНИИ: <?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['name'];?>
</caption>

       <tr> 
          <td width="100" valign="top">ИНН</td>
           <td>
              <input type="hidden" name="inn" value="<?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['inn'];?>
">
              <?php echo $_smarty_tpl->tpl_vars['company_arr']->value[0]['inn'];?>
  
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
          <td valign="top">email</td>
           <td>   
              <input type="email"  name="new_email" value="">
	         </td>
      </tr>
      <tr>           
        <td valign="top">Актуальность почты</td>
              <td> 
            
                  <select size="1" name="actual_email">
                      <option value="Актуальная">Актуальная</option>
                      <option value="Неактуальная">Неактуальная</option>
                      <option selected value="Новая">Новая</option>
                      <option value=""></option>
                </select>
            
          </td>
    </tr>
      <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td>   
                 <textarea name="commentEmail" rows="3" cols="30"></textarea>
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
