<?php
/* Smarty version 4.1.0, created on 2022-10-12 14:30:43
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\main_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6346a5637c3b67_15394398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41c6dc6a18a8b58a180957fb4cea6d1a8efbd372' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\main_table.tpl',
      1 => 1665574184,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_6346a5637c3b67_15394398 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
        <div class="our_table">
        <table width="100%" class="drawtable employee_table">
          <thead>
            <tr class="DrawDark">
               <td class="hidden_class_column">пп</td>
               <td>№КП</td>
               <td>sEx</td>
               <td>Ex</td> 
               <td>Сч</td> 
               <td width ="60" >Дата КП</td>
               <td width ="70" class="hidden_class_column">ИНН</td>
               <td>PDF</td>
               <td>Наименование</td>
               <td>Кон</td>
               <td>EM</td>
               <td class="hidden_class_column">Важность</td>
          
               <td class="hidden_class_column">Ответственный</td>
               <td>id</td>
               <td>Комментарий</td>
               <td>Ред</td>
               <td width ="60" class="hidden_class_column">Сл.звонок</td>
               <td class="hidden_class_column">Состояние</td>
               <td>Сумма КП</td>
               <td class="hidden_class_column">НМЦК Закупки</td>
                      <td class="hidden_class_column">КЗ</td>       
                        <td>Ист</td>
               <td class="hidden_class_column">Адрес поставки</td>
         </tr>
         </thead>
      <tbody>

           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>1</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

                  <td><a href="open_excel/simplexlsx.php?LinkKp=EXCEL/№83 от 04.10.2022 Пупок свисток от ООО ТД АНМКАС.xlsx" class=\"btn\" target=\"_blank\">83</a></td>
                 
<!-- ***************************  парсер EXCEL файл  ********************************************** -->   

                      <td><a href="open_excel/simplexlsx.php?LinkKp=EXCEL/№83 от 04.10.2022 Пупок свисток от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/see_excel.png" alt="Excel"></a></td>
          
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№83 от 04.10.2022 Пупок свисток от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3635&inn=0&LinkKp=EXCEL/№83 от 04.10.2022 Пупок свисток от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-10-04</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td class="sell_comp hidden_class_column">
                              &nbsp
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">Пупок свисток</td>
             <!-- ******************************  Icons konturLink   ***************************************************** -->

                          <td><img class="" style = "opacity: 0.2" src="icons/kontur.png" alt="SeeLinkKontur"></td>
             

<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3635&InnCustomer=0" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3635" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3635" width="80" class="hidden_class_column">Гуц</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3635" href="index.php?id=3635" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3635"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3635" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3635" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3635" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3635" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3635" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3635" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3635" href="reports_show_history_kp.php?typeQuery=5&id_kp=3635" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3635" width ="150" class="hidden_class_column"></td>
               
       </tr>
    
           </tbody>
      </table>
  </div>
</div>
<?php }
}
