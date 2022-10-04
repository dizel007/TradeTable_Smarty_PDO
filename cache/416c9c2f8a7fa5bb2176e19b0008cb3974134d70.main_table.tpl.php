<?php
/* Smarty version 4.1.0, created on 2022-10-04 14:33:33
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\main_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_633c1a0d421808_97104095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41c6dc6a18a8b58a180957fb4cea6d1a8efbd372' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\main_table.tpl',
      1 => 1664866249,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_633c1a0d421808_97104095 (Smarty_Internal_Template $_smarty_tpl) {
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

          
       <td>73</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-16</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class="sell_comp hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=5018186852" target="_blank">
                  5018186852
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «ГОРЗЕЛЕНСТРОЙ»</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3623&InnCustomer=5018186852" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3623" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3623" width="80" class="hidden_class_column"></td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3623" href="index.php?id=3623" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3623"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3623" class ="limit_width text_left">2022-09-28(zeld): Созвонился с Андреем; Созвонился с Андреем; Созвонился с Андреем; <br><hr>2022-09-22(zeld): ty hvbnm; tyutyu; r; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3623" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3623" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3623" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3623" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3623">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3623" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3623" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3623" href="reports_show_history_kp.php?typeQuery=5&id_kp=3623" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3623" width ="150" class="hidden_class_column"></td>
               
       </tr>
    
           <tr class ="  BlinkColor DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>2</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>81</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-23</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class="sell_comp hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=5018186852" target="_blank">
                  5018186852
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «ГОРЗЕЛЕНСТРОЙ»</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3632&InnCustomer=5018186852" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3632" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3632" width="80" class="hidden_class_column">Зелизко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3632" href="index.php?id=3632" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3632"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3632" class ="limit_width text_left">2022-09-28(zeld): Созвонился с Андреем; Созвонился с Андреем; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3632" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3632" width="60" class ="  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3632" class = "buyour">Купили у нас</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3632" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3632">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3632" >1</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3632" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3632" href="reports_show_history_kp.php?typeQuery=5&id_kp=3632" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3632" width ="150" class="hidden_class_column">3567</td>
               
       </tr>
    
           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>3</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>5676</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-20</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class="sell_comp hidden_class_column">
                        <a href="show_comp_by_inn.php?inn=5018186852" target="_blank">
                  5018186852
            </a>
            
       </td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «ГОРЗЕЛЕНСТРОЙ»</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3626&InnCustomer=5018186852" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3626" width ="50" class="hidden_class_column">Нейтрально</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3626" width="80" class="hidden_class_column">Штыбко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3626" href="index.php?id=3626" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3626"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3626" class ="limit_width text_left">2022-09-30(zeld): dfgsdfghdfg; <br><hr>2022-09-28(zeld): ДДДДДОООРРРРТТТИ; Созвонился с Андреем; <br><hr>2022-09-22(zeld): цуцуцу; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3626" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 

<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3626" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3626" class = "">В работе</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3626" >187,468</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3626">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3626" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3626" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3626" href="reports_show_history_kp.php?typeQuery=5&id_kp=3626" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3626" width ="150" class="hidden_class_column">45646вапв  ып п па</td>
               
       </tr>
    
           </tbody>
      </table>
  </div>
</div>
<?php }
}
