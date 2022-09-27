<?php
/* Smarty version 4.1.0, created on 2022-09-27 09:29:18
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6332983e7ea4e4_92826207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff1b85001aaf4fd0e29b5f6c11783a9f89cb18c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\index.tpl',
      1 => 1663244120,
      2 => 'file',
    ),
    '4feb86069f69d7cf7767fcb7fa2f61b4980990d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\header.tpl',
      1 => 1663933780,
      2 => 'file',
    ),
    '7629ca31684d3b40db7a3249fc6b56842f8c87db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\shapka_menu.tpl',
      1 => 1664184220,
      2 => 'file',
    ),
    '73df6082b981915c25f4912eaa64fa36867a2bbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\info_filtr.tpl',
      1 => 1662969553,
      2 => 'file',
    ),
    '8264840b9e898db5405ed6ce0a706ac4ca910330' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\page_numbers.tpl',
      1 => 1664185053,
      2 => 'file',
    ),
    '41c6dc6a18a8b58a180957fb4cea6d1a8efbd372' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\main_table.tpl',
      1 => 1662970009,
      2 => 'file',
    ),
    'ac1e3d6eaa128d645a47a9ac61bceeccb71ee66c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\footer.tpl',
      1 => 1664198333,
      2 => 'file',
    ),
    'd34797ffad026307bd9185c6e7b7f8fd1de096d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\modal_windows_inn_comp.tpl',
      1 => 1662467945,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_6332983e7ea4e4_92826207 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Базовая страница страница</title>
    <link rel = "stylesheet" href = "css/bootstrap/css/bootstrap-grid.css">
    <!-- <link rel = "stylesheet" href = "css/bootstrap/css/bootstrap.css"> -->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">


    <link rel = "stylesheet" href = "css/for_all_class.css">
    <link rel = "stylesheet" href = "css/drawtable.css">
    <link rel = "stylesheet" href = "css/admin_panel.css">
    <link rel = "stylesheet" href = "css/info_company.css">
    <link rel = "stylesheet" href = "css/modal.css"> 
    <link rel = "stylesheet" href = "css/mobile.css">
    <link rel = "stylesheet" href = "css/phone_tab.css">
    <link rel = "stylesheet" href = "css/up_down_button.css">
    <link rel = "stylesheet" href = "css/make_new_kp.css">
    
    
    
    <script type="text/javascript" src="js/jquery/jquery-3.6.0.min.js"></script>
    <!-- скрипт по выбору типа Фильтра в шапке  -->
    <script type="text/javascript" src="js/shapka_menu.js"></script>
    <!-- скрипт по выбору типа КП при создании нового КП   -->
    <script type="text/javascript" src="js/make_new_kp_type_kp.js"></script>
    <!-- скрипт для телефоной маски -->
    <script src="jquery-3.3.1.maskedinput.min.js" type="text/javascript"></script> 
 </head>

<body bgcolor="#ffffff">

 
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
            <input type="text" id="get_nomerKP" name="get_nomerKP" value = "">
        
        </div>

                <div id="g_dateKPs" class="mobile_web">
                    <label for="date_start">Дата начала : </label>
                    <input type="date" id="get_date_start" name="get_date_start" value = "">
                </div>
                <div id="g_dateKPe" class="mobile_web">
                    <label for="date_end">Дата окончания : </label>
                    <input type="date" id="get_date_end" name="get_date_end" value = "">
                </div>
        
     
        <div id="g_inn" class="mobile_web">
            <label for="param">Введите ИНН : </label>
            <input type="text" id="get_inn" name="get_inn" value = "">
        </div>

     
        <div id="g_id_kp" class="mobile_web">
            <label for="param"> Введите ID КП : </label>
            <input type="text" id="get_id_kp" name="get_id_kp" value = "">
        
        </div>

  
 <div id="g_responsible" class="mobile_web" >
Ответственный :
    <select style="width:150px;" id="get_responsible" class="form-select data-windows" name="get_responsible" size="1">
        <option selected value=""></option>
         <option value="Зелизко">Зелизко</option>
<option value="Горячев">Горячев</option>
<option value="Гуц">Гуц</option>
<option value="Штыбко">Штыбко</option>
<option value="Кулиев">Кулиев</option>
<option value="Лобов">Лобов</option>

         <option value=""></option>
         
     </select>
 </div>
     
        <div id="g_name_zakazchik" class="mobile_web">
            <label for="param"> Наименование Заказчика : </label>
            <input type="text" id="get_name_zakazchik" name="get_name_zakazchik" value = "">
   
        </div>

     
        <div id="g_adres_postavki" class="mobile_web">
            <label for="param"> Адрес поставки : </label>
            <input type="text" id="get_adres_postavki" name="get_adres_postavki" value = "">
      
        </div>

       
        <div class="mobile_web">
            <label for="FinishContract">Закр.Перенос Контр : </label>
                                            <input type="checkbox" name="get_FinishContract" value="1">
                           </div>

 <button  type="submit">ОБНОВИТЬ</button>
   </div>
             
</form>





<div class = "filter_p">
ФИЛЬТР: <b>20</b> КП:

</div>


 
</div>


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

                  <td><a href="open_excel/simplexlsx.php?LinkKp=EXCEL/№123123 от 26.09.2022 ООО ПКТ СТРОЙ от ООО ТД АНМКАС.xlsx" class=\"btn\" target=\"_blank\">123123</a></td>
                 

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№123123 от 26.09.2022 ООО ПКТ СТРОЙ от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3634&inn=3525395322&LinkKp=EXCEL/№123123 от 26.09.2022 ООО ПКТ СТРОЙ от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-26</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">3525395322</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «ПКТ СТРОЙ»</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3634&InnCustomer=3525395322" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3634" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3634" width="80" class="hidden_class_column">Гуц</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3634" href="index.php?id=3634" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3634"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3634" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3634" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3634" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3634" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3634" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3634">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3634" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3634" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3634" href="reports_show_history_kp.php?typeQuery=5&id_kp=3634" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3634" width ="150" class="hidden_class_column"></td>
               
       </tr>
    
           <tr class ="RedColor   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>2</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

                  <td><a href="open_excel/simplexlsx.php?LinkKp=EXCEL/№82 от 23.09.2022 Пучин Михаил Михайлович от ООО ТД АНМКАС.xlsx" class=\"btn\" target=\"_blank\">82</a></td>
                 

<!-- ***************************  EXCEL файл  ********************************************** -->   

                      <td><a href="EXCEL/№82 от 23.09.2022 Пучин Михаил Михайлович от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/excel.png" alt="Excel"></a></td>
          
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
    
   <td><a href = "xls_schet/make_schet.php?id=3633&inn=862002062408&LinkKp=EXCEL/№82 от 23.09.2022 Пучин Михаил Михайлович от ООО ТД АНМКАС.xlsx"><img class="scale11" style = "opacity: 0.8" src="icons/table/schet.png" alt="Excel"></a></td>
          

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-23</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">862002062408</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">Пучин Михаил Михайлович</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3633&InnCustomer=862002062408" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3633" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3633" width="80" class="hidden_class_column">Зелизко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3633" href="index.php?id=3633" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3633"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3633" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3633" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3633" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3633" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3633" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3633">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3633" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3633" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3633" href="reports_show_history_kp.php?typeQuery=5&id_kp=3633" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3633" width ="150" class="hidden_class_column">длтдтлдоитд др ро  д </td>
               
       </tr>
    
           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>3</td>
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
       <td width ="70" class=" hidden_class_column">5018186852</td>
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
      <td id = "js-comment3632" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3632" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3632" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3632" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3632" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3632">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3632" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3632" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3632" href="reports_show_history_kp.php?typeQuery=5&id_kp=3632" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3632" width ="150" class="hidden_class_column">3567</td>
               
       </tr>
    
           <tr class ="   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>4</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>77</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

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
    
           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>5</td>
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
       <td width ="70" class=" hidden_class_column">5018186852</td>
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
      <td id = "js-comment3626" class ="limit_width text_left">2022-09-22(zeld): цуцуцу; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3626" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
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
    
           <tr class ="GreenColor   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>6</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>1111111</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-16</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">7810489590</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «ПитерСпортСтрой»</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3606&InnCustomer=7810489590" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3606" width ="50" class="hidden_class_column">Очень важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3606" width="80" class="hidden_class_column"></td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3606" href="index.php?id=3606" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3606"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3606" class ="limit_width text_left">2022-09-22(zeld): цйу; <br><hr>2022-09-15(zeld): ssss; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3606" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3606" width="60" class ="alarmcolor  hidden_class_column">2022-08-30</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3606" class = "">В работе</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3606" >11,709,518</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      
     <td class="hidden_class_column" id = "js-dateContract3606"><img class="scale11" style = "opacity: 0.8" src="icons/table/dateContract.png" title="Дата Закл :2022-09-08"></td>
         
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3606" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3606" width="60">2022-09-16</td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3606" href="reports_show_history_kp.php?typeQuery=5&id_kp=3606" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3606" width ="150" class="hidden_class_column">99</td>
               
       </tr>
    
           <tr class ="RedColor   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>7</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>1111111</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-16</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">7810489590</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ООО «ПитерСпортСтрой»</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3607&InnCustomer=7810489590" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3607" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3607" width="80" class="hidden_class_column">Лобов</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3607" href="index.php?id=3607" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3607"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3607" class ="limit_width text_left">2022-09-22(zeld): 555555; <br><hr>2022-09-15(zeld): ertuyrtuy; 34563456; rty; ert; as; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3607" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3607" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3607" class = "">В работе</div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3607" >11,709,518</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3607">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3607" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3607" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3607" href="reports_show_history_kp.php?typeQuery=5&id_kp=3607" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3607" width ="150" class="hidden_class_column">sssssdsds</td>
               
       </tr>
    
           <tr class ="   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>8</td>
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
       <td width ="70" class=" hidden_class_column">5018186852</td>
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
      <td id = "js-comment3623" class ="limit_width text_left">2022-09-22(zeld): ty hvbnm; tyutyu; r; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3623" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
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
    
           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>9</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>65</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-16</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">862002062408</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">Пучин Михаил Михайлович</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3611&InnCustomer=862002062408" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3611" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3611" width="80" class="hidden_class_column">Зелизко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3611" href="index.php?id=3611" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3611"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3611" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3611" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3611" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3611" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3611" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3611">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3611" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3611" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3611" href="reports_show_history_kp.php?typeQuery=5&id_kp=3611" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3611" width ="150" class="hidden_class_column"></td>
               
       </tr>
    
           <tr class ="   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>10</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>63</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-16</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">3627008639</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">АО «КОТТЕДЖ-ИНДУСТРИЯ»</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3609&InnCustomer=3627008639" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3609" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3609" width="80" class="hidden_class_column">Зелизко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3609" href="index.php?id=3609" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3609"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3609" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3609" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3609" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3609" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3609" >233,023</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3609">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3609" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3609" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3609" href="reports_show_history_kp.php?typeQuery=5&id_kp=3609" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3609" width ="150" class="hidden_class_column"></td>
               
       </tr>
    
           <tr class ="RedColor   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>11</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>87875</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-15</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">666666666666</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">Горсвет зажчс авап</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3596&InnCustomer=666666666666" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3596" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3596" width="80" class="hidden_class_column">Горячев</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3596" href="index.php?id=3596" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3596"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3596" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3596" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3596" width="60" class ="alarmcolor  hidden_class_column">2022-09-17</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3596" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3596" >11,709,518</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3596">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3596" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3596" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3596" href="reports_show_history_kp.php?typeQuery=5&id_kp=3596" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3596" width ="150" class="hidden_class_column">москва</td>
               
       </tr>
    
           <tr class ="RedColor   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>12</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>87875</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-15</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">666666666666</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">Горсвет зажчс авап</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3595&InnCustomer=666666666666" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3595" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3595" width="80" class="hidden_class_column"></td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3595" href="index.php?id=3595" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3595"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3595" class ="limit_width text_left">2022-09-22(zeld): dfgsgsdf; 321; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3595" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3595" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3595" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3595" >11,709,518</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3595">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3595" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3595" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3595" href="reports_show_history_kp.php?typeQuery=5&id_kp=3595" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3595" width ="150" class="hidden_class_column">москва</td>
               
       </tr>
    
           <tr class ="GreenColor   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>13</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>145И</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-15</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class="sell_comp hidden_class_column">0</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">ГорсДорСтрой</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3597&InnCustomer=0" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3597" width ="50" class="hidden_class_column">Очень важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3597" width="80" class="hidden_class_column">Кулиев</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3597" href="index.php?id=3597" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3597"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3597" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3597" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3597" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3597" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3597" >11,709,518</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3597">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3597" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3597" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3597" href="reports_show_history_kp.php?typeQuery=5&id_kp=3597" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3597" width ="150" class="hidden_class_column">12121212</td>
               
       </tr>
    
           <tr class ="   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>14</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>4545</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-09-08</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">234</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
                          <td width ="150">234234</td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3608&InnCustomer=234" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3608" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3608" width="80" class="hidden_class_column">Зелизко</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3608" href="index.php?id=3608" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3608"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3608" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3608" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3608" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3608" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3608" >11,709,518</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">0</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3608">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3608" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3608" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3608" href="reports_show_history_kp.php?typeQuery=5&id_kp=3608" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3608" width ="150" class="hidden_class_column"></td>
               
       </tr>
    
           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>15</td>
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
    
           <tr class ="   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>16</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>153Е</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-03-04</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">6820036862</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/0164200003022000082" alt="konturLink" target="_blank">ООО «РОТОР»</a></td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3203&InnCustomer=6820036862" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3203" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3203" width="80" class="hidden_class_column">Гуц</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3203" href="index.php?id=3203" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3203"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3203" class ="limit_width text_left">2022-03-14(guts): дубль на вотс ап; Городской телефон - говорят, что ошибка. Мобильный не але; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3203" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3203" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3203" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3203" >502,240</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">11,989,796</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      
     <td class="hidden_class_column" id = "js-dateContract3203"><img class="scale11" style = "opacity: 0.8" src="icons/table/dateContract.png" title="Дата Закл :2022-02-28"></td>
         
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3203" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3203" width="60">2022-09-12</td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3203" href="reports_show_history_kp.php?typeQuery=5&id_kp=3203" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3203" width ="150" class="hidden_class_column">Тамбовская область, с. Пичаево</td>
               
       </tr>
    
           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>17</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>147Е</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-03-03</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">310259684507</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/0126300029122000040" alt="konturLink" target="_blank">Меликов Сергей Еврасович</a></td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3197&InnCustomer=310259684507" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3197" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3197" width="80" class="hidden_class_column">Гуц</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3197" href="index.php?id=3197" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3197"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3197" class ="limit_width text_left">2022-03-14(guts): телефон не але, вотс апа нет. Дубль КП на почту; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3197" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3197" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3197" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3197" >425,000</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">1,058,060</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      
     <td class="hidden_class_column" id = "js-dateContract3197"><img class="scale11" style = "opacity: 0.8" src="icons/table/dateContract.png" title="Дата Закл :2022-02-28"></td>
         
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3197" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3197" width="60">2022-06-30</td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3197" href="reports_show_history_kp.php?typeQuery=5&id_kp=3197" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3197" width ="150" class="hidden_class_column">Белгородский район, с. Таврово</td>
               
       </tr>
    
           <tr class ="RedColor   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>18</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>145Е</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-03-03</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">7810489590</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/0157200000322000022" alt="konturLink" target="_blank">ООО «ПитерСпортСтрой»</a></td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3195&InnCustomer=7810489590" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3195" width ="50" class="hidden_class_column">Важно</td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3195" width="80" class="hidden_class_column"></td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3195" href="index.php?id=3195" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3195"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3195" class ="limit_width text_left">2022-09-15(zeld): 34523452345; <br><hr>2022-03-11(guts): трубки не берут, дубль кп на почту.; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3195" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3195" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3195" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3195" >416,900</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">40,720,000</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      
     <td class="hidden_class_column" id = "js-dateContract3195"><img class="scale11" style = "opacity: 0.8" src="icons/table/dateContract.png" title="Дата Закл :2022-02-28"></td>
         
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3195" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3195" width="60">2022-08-26</td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3195" href="reports_show_history_kp.php?typeQuery=5&id_kp=3195" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3195" width ="150" class="hidden_class_column">Псковская область, Порховский район район, г. Порхов.</td>
               
       </tr>
    
           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>19</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>114Е</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-02-21</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">5610004196</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/1053600002422000001" alt="konturLink" target="_blank">АО «ОРЕНБУРГОБЛГРАЖДАНСТРОЙ»</a></td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3156&InnCustomer=5610004196" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3156" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3156" width="80" class="hidden_class_column">Лобов</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3156" href="index.php?id=3156" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3156"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3156" class ="limit_width text_left">2022-05-04(lobov): ЛПР Сергей, есть предложения от Аквастока и от местных.
Отправил КП на рассмотрение.; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3156" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3156" width="60" class ="alarmcolor  hidden_class_column">2022-05-17</td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3156" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3156" >543,710</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">295,923,200</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      
     <td class="hidden_class_column" id = "js-dateContract3156"><img class="scale11" style = "opacity: 0.8" src="icons/table/dateContract.png" title="Дата Закл :2022-02-15"></td>
         
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3156" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3156" width="60">2023-09-30</td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3156" href="reports_show_history_kp.php?typeQuery=5&id_kp=3156" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3156" width ="150" class="hidden_class_column">Оренбургская обл, Орск</td>
               
       </tr>
    
           <tr class ="   DrawDark">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>20</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>112Е</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         
<! -- Проверяем есть ли файл с КП в формате ексель на сервере ************************************** -->
<! -- Скачиваем счет -->
      <td><img style = "opacity: 0.2" src="icons/table/schet.png" alt="Excel"></td>
        

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-02-16</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">7736279690</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/0149200002321009766" alt="konturLink" target="_blank">ООО «ТОРИОН»</a></td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3154&InnCustomer=7736279690" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3154" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3154" width="80" class="hidden_class_column">Гуц</td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3154" href="index.php?id=3154" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3154"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3154" class ="limit_width text_left">2022-04-13(lobov): Отправил КП.; </td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3154" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3154" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3154" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3154" >818,300</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">1,869,980,893</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
      
     <td class="hidden_class_column" id = "js-dateContract3154"><img class="scale11" style = "opacity: 0.8" src="icons/table/dateContract.png" title="Дата Закл :2022-03-02"></td>
         
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3154" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3154" width="60">2024-12-20</td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3154" href="reports_show_history_kp.php?typeQuery=5&id_kp=3154" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3154" width ="150" class="hidden_class_column">Мурманская область, г. Мурманск</td>
               
       </tr>
    
           </tbody>
      </table>
  </div>
</div>


  <!-- Корректировка данных о Компании -->
<!--    Добавление НОВОГО НОМЕРА телефона -->

 

<!--  *******************   ******** Корректировка телефонного номера -->
<!-- *********************************// корректировка EMAIL /////////************************* -->
 
<!-- ***********************************// Добавление НОВОГО EMAIL  ///////// -->
 <!-- модальные окна для правки по ИНН  -->


<script type="text/javascript" src="js/ajax_query_comment.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript" src="js/phone_mask.js"></script>

</body>

</html>


<?php }
}
