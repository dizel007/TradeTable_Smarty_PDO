<?php
/* Smarty version 4.1.0, created on 2022-09-26 12:05:17
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\main_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63316b4dd90cb6_25164597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41c6dc6a18a8b58a180957fb4cea6d1a8efbd372' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\main_table.tpl',
      1 => 1662970009,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_63316b4dd90cb6_25164597 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
        <div class="our_table">
        <table width="100%" class="drawtable employee_table">
          <thead>
            <tr class="DrawDark">
               <td class="hidden_class_column">пп</td>
               <td>№КП</td>
               <td>Ex</td> 
               <td>Сч</td> 
               <td width ="56" >Дата КП</td>
               <td class="hidden_class_column">ИНН</td>
               <td>PDF</td>
               <td>Наименование</td>
               <td>EM</td>
               <td class="hidden_class_column">Важность</td>
          
               <td class="hidden_class_column">Ответственный</td>
               <td>id</td>
               <td>Комментарий</td>
               <td>Ред</td>
               <td width ="56" class="hidden_class_column">Сл.звонок</td>
               <td class="hidden_class_column">Состояние</td>
               <td>Сумма КП</td>
               <td class="hidden_class_column">НМЦК Закупки</td>
               <td class="hidden_class_column">ДКЗ</td>
               <td class="hidden_class_column">КЗ</td>
               <td width ="56" class="hidden_class_column">Финиш</td>
               <td>Ист</td>
               <td class="hidden_class_column">Адрес поставки</td>
         </tr>
         </thead>
      <tbody>

           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>1</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

                  <td><a href="open_excel/simplexlsx.php?LinkKp=EXCEL/№77 от 23.09.2022 ООО ПКТ СТРОЙ от ООО ТД АНМКАС.xlsx" class=\"btn\" target=\"_blank\">77</a></td>
                 

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№77 от 23.09.2022 ООО ПКТ СТРОЙ от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3628&inn=3525395322&LinkKp=EXCEL/№77 от 23.09.2022 ООО ПКТ СТРОЙ от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-23</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">3525395322</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «ПКТ СТРОЙ»</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3628&InnCustomer=3525395322" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3628" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3628" width="80" class="hidden_class_column">Зелизко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3628" href="index.php?id=3628" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3628"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3628" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3628" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3628" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3628" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3628" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3628">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3628" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3628" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3628" href="reports_show_history_kp.php?typeQuery=5&id_kp=3628" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3628" width ="150" class="hidden_class_column">Млсвка</td>
               
       </tr>
    
           <tr class ="   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>2</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>158Е</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-03-09</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">3525395322</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/0830600001622000002" alt="konturLink" target="_blank">ООО «ПКТ СТРОЙ»</a></td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3208&InnCustomer=3525395322" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3208" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3208" width="80" class="hidden_class_column"></td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3208" href="index.php?id=3208" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3208"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3208" class ="limit_width text_left">2022-03-28(lobov): Созвонился с Андреем Владимировичем. Отправил КП.
Закупка в апреле.; <br><hr>2022-03-16(lobov): Не отвечают. Отправил КП; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3208" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3208" width="60" class ="alarmcolor  hidden_class_column">2022-04-04</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3208" class = "">$KpCondition</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3208" >332,800</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">93,518,028</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      
     <td class="hidden_class_column" id = "js-dateContract3208"><img class="scale11" style = "opacity: 0.8" src="icons/table/dateContract.png" title="Дата Закл :2022-02-28"></td>
         
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3208" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3208" width="60">2022-11-23</td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3208" href="reports_show_history_kp.php?typeQuery=5&id_kp=3208" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3208" width ="150" class="hidden_class_column"> Вологодская обл, Вологда ввв</td>
               
       </tr>
    
           </tbody>
      </table>
  </div>
</div>
<?php }
}
