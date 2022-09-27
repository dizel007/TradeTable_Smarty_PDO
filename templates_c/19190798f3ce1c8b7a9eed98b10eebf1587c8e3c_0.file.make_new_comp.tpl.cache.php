<?php
/* Smarty version 4.1.0, created on 2022-09-26 15:20:38
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\make_new_comp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6331a7261f1474_69462767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19190798f3ce1c8b7a9eed98b10eebf1587c8e3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\make_new_comp.tpl',
      1 => 1664198437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6331a7261f1474_69462767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3538127686331a7261b2c68_03237197';
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<div class="zagolovok"> Добавить Новую компанию по ИНН</div>
  

<form enctype="multipart/form-data" action="pdo_connect_db/insert_new_comp_in_bd.php" method="post">


  
<div class="block green_bgc">  
 <p class="pad5px width15 zhir"> ИНН Заказчика :
<?php ob_start();
echo $_smarty_tpl->tpl_vars['input_inn']->value;
$_prefixVariable1 = ob_get_clean();
if ((isset($_prefixVariable1))) {?>
    <input required type="number" name="InnCustomer" value="<?php echo $_smarty_tpl->tpl_vars['input_inn']->value;?>
">  
<?php } else { ?> 
    <input required type="number" name="InnCustomer" value="">  
<?php }?>
</p>



  

 <p class="pad5px width15 zhir">Наименование Заказчика : <input required type="text" name="NameCustomer" value ="" size="70"></p>

  
<p class="pad5px width15 zhir">Телефон Заказчика : <input name="TelCustomer" size="70" data-phone-pattern></p>
        
        


  
 <p class="pad5px width15 zhir">Эл. Почта Заказчика : <input type="email" name="EmailCustomer" value ="" size="70"></p>

  
   <p class="pad5px width15 zhir">Контактное лицо   : <input type="text" name="ContactCustomer" value ="" size="70"></p>

  
   <p class="pad5px width15 zhir">Адрес Заказчика   : <input type="text" name="Adress" value ="" size="70"></p>



  
 <p><input type="submit" value="Создать"></p>


 </div>
 </form>
            
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              
<?php }
}
