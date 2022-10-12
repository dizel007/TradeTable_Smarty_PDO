<?php
/* Smarty version 4.1.0, created on 2022-10-12 12:17:13
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\make_new_kp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_634694290cd6e6_51958379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '592c6aabfbd644fd23aa3b1aa2a89df06a6a53e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\make_new_kp.tpl',
      1 => 1664884039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634694290cd6e6_51958379 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->compiled->nocache_hash = '18241832996346942909e8e0_17832604';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>
<div class="zagolovok"> Создание нового КП </div>
  
<div class="block">
 <p class="zagolovok">Проверка наличия ИНН в Базе</p>
        <form enctype="multipart/form-data" action="make_new_kp.php" method="get">
            <div class="input_form_left zhir">
              <input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">  
                    <?php if ((isset($_smarty_tpl->tpl_vars['input_inn']->value))) {?>
                       ИНН Заказчика : <input type="number" name="InnCustomer" value ="<?php echo $_smarty_tpl->tpl_vars['input_inn']->value;?>
">
                    <?php } else { ?> 
                       ИНН Заказчика : <input type="number" name="InnCustomer" value ="">
                    <?php }?>
            </div>
            <div class="input_form_left">
              <input type="submit" value="Запросить ИНН">
            </div>
   
    
           <div class="red_string">
              <p>
           <?php if ((isset($_smarty_tpl->tpl_vars['input_inn']->value))) {?>    
                  <?php if (!(isset($_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['inn']))) {?>          
                    Данный ИНН отсутствует в НАШЕЙ(!!!!!!!) Базе    &nbsp&nbsp&nbsp
                    <a href="make_new_comp.php?user=<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
&InnCustomer=<?php echo $_smarty_tpl->tpl_vars['input_inn']->value;?>
" > Добавить?</a>
                  <?php } else { ?>
                    &nbsp
                  <?php }?>
          <?php } else { ?> 
               &nbsp
          <?php }?>                            
              </p>
            </div>

        </form>
</div>

<form enctype="multipart/form-data" action="pdo_connect_db/insert_new_kp_in_reestr.php" method="post">


    
<?php if ((isset($_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['inn']))) {?>
    <input type="hidden" name="InnCustomer" value="<?php echo $_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['inn'];?>
">  
<?php } else { ?> 
    <input type="hidden" name="InnCustomer" value="">  
<?php }?>
     
<div class="block"> 

<p class = "zhir">Источник КП :
    <select size="1" name="type_kp" onchange="showhideTypeKP(this.value)">
      <option selected value="2">почта INFO</option>
      <option value="3">Входящий звонок</option>
      <option value="4">Старый клиент</option>
      <option value="5">Нет данных</option>
      <option value="6">Объектное</option>
    </select>
</p>
 </div>

  
<div id="type_kp_manual" class="block">
  <div class="input_form_left">
    <p class = "zhir">Номер КП из 1С: <input type="text" name="KpNumber" value =""></p>
  </div>
 
 
 
      
       <div>
        <p class ="zhir"> Дата КП : <input type="date" name="KpDate" value ="<?php echo $_smarty_tpl->tpl_vars['KpDate']->value;?>
"></p>
       </div>
         <div> 
        *если окно пустое, то номер будет порядковый
   </div>
</div>


  
<div id="type_kp_object" class="block" style="display:none; background-color: darkCyan;">
  <div class="input_form_left">
    <p class = "zhir">Номер КП : <input type="text" name="KpNumberO" value =""></p>
  </div>
 
 
 
      
       <div>
        <p class ="zhir"> Дата КП : <input type="date" name="KpDateO" value ="<?php echo $_smarty_tpl->tpl_vars['KpDateO']->value;?>
"></p>
       </div>
         <div> 
        *если окно пустое, то номер будет порядковый
   </div>
</div>



<div class="block green_bgc">
  
<?php if ((isset($_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['inn']))) {?>
 <p class="pad5px width15 zhir">Наименование Заказчика : <input disabled type="text"  value ="<?php echo $_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['name'];?>
" size="70">
 <input hidden type="text" name="NameCustomer" value ="<?php echo $_smarty_tpl->tpl_vars['arr_inn_comp']->value[0]['name'];?>
" size="70">
 </p>
<?php } else { ?>
 <p class="pad5px width15 zhir">Наименование Заказчика : <input required type="text" name="NameCustomer" value ="" size="70"></p>
<?php }?>


  
<?php if ((isset($_smarty_tpl->tpl_vars['tel_comp']->value))) {?>
 <p class="pad5px width15 zhir">Телефон Заказчика : <input type="tel" name="TelCustomer" value ="<?php echo $_smarty_tpl->tpl_vars['tel_comp']->value;?>
" size="70"></p>
 
<?php } else { ?>
<p class="pad5px width15 zhir">Телефон Заказчика : <input type="tel" name="TelCustomer" value ="" size="70" data-phone-pattern></p>
<?php }?>
  
 <?php if ((isset($_smarty_tpl->tpl_vars['email_comp']->value))) {?>
 <p class="pad5px width15 zhir">Эл. Почта Заказчика : <input type="text" name="EmailCustomer" value ="<?php echo $_smarty_tpl->tpl_vars['email_comp']->value;?>
" size="70"></p>
 <?php } else { ?>
 <p class="pad5px width15 zhir">Эл. Почта Заказчика : <input type="email" name="EmailCustomer" value ="" size="70"></p>

 <?php }?>
  
   <p class="pad5px width15 zhir">Контактное лицо   : <input type="text" name="ContactCustomer" value ="" size="70"></p>
</div>


     
<div class="block">
    <div class="pad5px zhir">
    <p>Важность :
        <select size="1" name="KpImportance">
          <option id="js-new-modal-KpImportance" selected value=""></option>  
          <option value="Нейтрально">Нейтрально</option>
          <option value="Важно">Важно</option>
          <option on value="Очень важно">Очень важно</option>
        </select>
    </p>
    </div>
    
    <div class="pad5px zhir">
    Ответственный :
        <select style="width:150px;" name="responsible" size="1">
            <option selected value="<?php echo $_smarty_tpl->tpl_vars['real_user']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['real_user']->value;?>
</option>
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['active_users_arr_smarty']->value,'output'=>$_smarty_tpl->tpl_vars['active_users_arr_smarty']->value),$_smarty_tpl);?>

            <option value=""></option>
        </select>
    </div>


      <div class="pad5px zhir"> 
        <p>Адрес поставки : </p> 
        <textarea name="Adress" rows="2" cols="50"></textarea>
      </div>
      <div class="pad5px zhir"> 
      <p> <b>Сумма доставки: <input required type="number" name="DostCost" value =""></b></p>
      </div>

</div>
 <div class="block">              
                <input type="hidden" name="MAX_FILE_SIZE" value="500000">
                файл заполненный по шаблону: <input required name="upload_file" type="file">
 
  <div><a href="new_kp_info/temp_kp.xlsx" download>Скачать шаблон для КП</a></div>
 </div>
  <div class="block"> 
 <p><input type="submit" value="Создать"></p>
 </div>
 </form>

   <div class="block"> 
      <a class="zagolovok" href="index.php">Вернуться в реестр</a>
 </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              
<?php }
}
