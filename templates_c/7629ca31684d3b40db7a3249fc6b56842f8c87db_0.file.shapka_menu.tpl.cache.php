<?php
/* Smarty version 4.1.0, created on 2022-09-27 09:29:18
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\shapka_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6332983e73e6c9_02545929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7629ca31684d3b40db7a3249fc6b56842f8c87db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\shapka_menu.tpl',
      1 => 1664184220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6332983e73e6c9_02545929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->compiled->nocache_hash = '14600329386332983e7369b7_32669368';
?>
 
 <div class="reset_button">
  <a href="index.php" title="Вернуться к началу страницы">СБРОС</a>
</div> 

<form class ="up_form_new">
   <div class ="up_form_new">

   
        <div class="mobile_web">
            <select size="1" name="typeQuery" onchange="showhideBlocks(this.value)">
            <option disabled>Выберите параметр поиска</option>
            <option selected value="2">Номер КП</option>
            <option value="3">По Дате</option>
            <option value="4">ИНН</option>
            <option value="5">ID КП</option>
            <option value="6">Ответственный</option>
            <option value="7">Наименование Заказчика</option>
            <option value="8">Адрес поставки</option>
            </select>
        </div>

     
        <div id="g_nomerKP" class="mobile_web">
            <label for="param"> Введите номер КП : </label>
            <input type="text" id="get_nomerKP" name="get_nomerKP" value = "<?php echo $_smarty_tpl->tpl_vars['get_nomerKP']->value;?>
">
        
        </div>

                <div id="g_dateKPs" class="mobile_web">
                    <label for="date_start">Дата начала : </label>
                    <input type="date" id="get_date_start" name="get_date_start" value = "<?php echo $_smarty_tpl->tpl_vars['get_date_start']->value;?>
">
                </div>
                <div id="g_dateKPe" class="mobile_web">
                    <label for="date_end">Дата окончания : </label>
                    <input type="date" id="get_date_end" name="get_date_end" value = "<?php echo $_smarty_tpl->tpl_vars['get_date_end']->value;?>
">
                </div>
        
     
        <div id="g_inn" class="mobile_web">
            <label for="param">Введите ИНН : </label>
            <input type="text" id="get_inn" name="get_inn" value = "<?php echo $_smarty_tpl->tpl_vars['get_inn']->value;?>
">
        </div>

     
        <div id="g_id_kp" class="mobile_web">
            <label for="param"> Введите ID КП : </label>
            <input type="text" id="get_id_kp" name="get_id_kp" value = "<?php echo $_smarty_tpl->tpl_vars['get_id_kp']->value;?>
">
        
        </div>

  
 <div id="g_responsible" class="mobile_web" >
Ответственный :
    <select style="width:150px;" id="get_responsible" class="form-select data-windows" name="get_responsible" size="1">
        <option selected value="<?php echo $_smarty_tpl->tpl_vars['get_responsible']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['get_responsible']->value;?>
</option>
         <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['active_users_arr_smarty']->value,'output'=>$_smarty_tpl->tpl_vars['active_users_arr_smarty']->value),$_smarty_tpl);?>

         <option value=""></option>
         
     </select>
 </div>
     
        <div id="g_name_zakazchik" class="mobile_web">
            <label for="param"> Наименование Заказчика : </label>
            <input type="text" id="get_name_zakazchik" name="get_name_zakazchik" value = "<?php echo $_smarty_tpl->tpl_vars['get_name_zakazchik']->value;?>
">
   
        </div>

     
        <div id="g_adres_postavki" class="mobile_web">
            <label for="param"> Адрес поставки : </label>
            <input type="text" id="get_adres_postavki" name="get_adres_postavki" value = "<?php echo $_smarty_tpl->tpl_vars['get_adres_postavki']->value;?>
">
      
        </div>

       
        <div class="mobile_web">
            <label for="FinishContract">Закр.Перенос Контр : </label>
                    <?php if ($_smarty_tpl->tpl_vars['get_FinishContract']->value == 1) {?>            
                    <input type="checkbox" name="get_FinishContract" value="1" checked>
                    <?php } else { ?>
                        <input type="checkbox" name="get_FinishContract" value="1">
                    <?php }?>
       </div>

 <button  type="submit">ОБНОВИТЬ</button>
   </div>
             
</form>




<?php }
}
