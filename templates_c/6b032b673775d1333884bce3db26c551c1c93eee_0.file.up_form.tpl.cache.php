<?php
/* Smarty version 4.1.0, created on 2022-09-02 08:21:29
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\up_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_631192d90d8805_48638576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b032b673775d1333884bce3db26c551c1c93eee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\up_form.tpl',
      1 => 1662038529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631192d90d8805_48638576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1148400736631192d90d4987_65400888';
$_smarty_tpl->_assignInScope('FinishContract', 1);?>
<div class="container-fluid">

<div class="row">
  <div class="card shadow  data-windows mt-4 pt-2 pb-2">
<form>
   <div class ="up_form_new">
    
                <div class="mobile_web">
                    <label for="date_start">Дата начала : </label>
                    <input type="date" id="date_start" name="date_start"/>
                </div>
                <div class="mobile_web">
                    <label for="date_end">Дата окончания : </label>
                    <input type="date" id="date_end" name="date_end"/>
                </div>
        

    
        <div class="mobile_web">
            <label for="param">Поиск : </label>
            <input type="text" id="value" name="value"/>
            <input type="hidden" id="id" name="id"/>
        </div>

        <div class="mobile_web">
            <select size="1" name="typeQuery">
            <option disabled>Выберите параметр поиска</option>
            <option selected value="2">Номер КП</option>
            <option value="3">По Дате</option>
            <option value="4">ИНН</option>
            <option value="7">ID КП</option>
            <option value="10">Ответственный</option>
            <option value="8">Наименование Заказчика</option>
            <option value="12">Москва и МО</option>
            </select>
        </div>

        
        <div class="mobile_web">
            <label for="FinishContract">Закр.Перенос Контр : </label>

<?php if ($_smarty_tpl->tpl_vars['FinishContract']->value == 1) {?>            
 <input type="checkbox" name="FinishContract" value="1" checked>
 <?php } else { ?>
    <input type="checkbox" name="FinishContract" value="1">
<?php }?>

       </div>
              <button  type="submit">ОБНОВИТЬ</button>
        </div>
                
</form>
         


</div>
</div><?php }
}
