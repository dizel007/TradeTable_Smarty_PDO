<?php
/* Smarty version 4.1.0, created on 2022-09-09 11:16:31
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\show_one_kp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_631af65f9ac412_38418912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3b078c9da15bb26bf25fbebe11737092e887235' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\show_one_kp.tpl',
      1 => 1662456843,
      2 => 'file',
    ),
    '4feb86069f69d7cf7767fcb7fa2f61b4980990d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\header.tpl',
      1 => 1662096649,
      2 => 'file',
    ),
    '7629ca31684d3b40db7a3249fc6b56842f8c87db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\shapka_menu.tpl',
      1 => 1662463962,
      2 => 'file',
    ),
    '13a2828906884e620a38ea180aeb63cc74291cd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\company_by_id_kp.tpl',
      1 => 1662466368,
      2 => 'file',
    ),
    '41c6dc6a18a8b58a180957fb4cea6d1a8efbd372' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\main_table.tpl',
      1 => 1662706104,
      2 => 'file',
    ),
    'd34797ffad026307bd9185c6e7b7f8fd1de096d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\modal_windows_inn_comp.tpl',
      1 => 1662467945,
      2 => 'file',
    ),
    'ac1e3d6eaa128d645a47a9ac61bceeccb71ee66c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\footer.tpl',
      1 => 1644179667,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_631af65f9ac412_38418912 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ТестоваяEUUdfgdfgEUE3 страница</title>
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
    
    
    <script type="text/javascript" src="js/jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/shapka_menu.js"></script>
    <!-- скрипт для телефоной маски -->
    <script src="jquery-3.3.1.maskedinput.min.js" type="text/javascript"></script> 
 </head>

<body bgcolor="#ffffff">


 
<div class="reset_button">
  <a href="index.php" title="Вернуться к началу страницы">СБРОС</a>
</div>

<div class="">
<form>
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



ФИЛЬТР 1 КП:


</div>


<div class="zagolovok">
        ООО «ПЕРСПЕКТИВА»
 </div>
       <table width="100%" class="table_inn employee_table">
       <tbody>
           <tr class="draw_inn">
             <td width="70">ИНН</td>
             
             <td width="200">Полное наименование</td> 
             <td  width="400">
             Телефон
           
             </td>
             <td width="32">
             <a href="?id=3546&inn=5030088481&typeQuery=309#win309"><img src ="icons/table/plus.png"></a>
             </td>
             <td>Емайл</td>
             <td width="32">
             <a href="?id=3546&inn=5030088481&typeQuery=409#win409"><img src ="icons/table/plus.png"></a>
             </td>
             <td>Контактное лицо</td>
             <td width = "160">Адрес</td>
             <td>Комментарий</td>
             <td>Ред</td>
          </tr>
          <tr class="draw_inn">
             <td class = "inntext" >5030088481</td>
            
             <td></td> 
             
<!-- ************************ ВЫВОД ТЕЛЕФОНОВ *********************************** -->
<td valign="top" colspan="2" width="300">


  
<table width ="100%" class ="telephone">

                                                       <tr>
       <td width ="20">
       <a class="link_tel" itemprop="telephone" href="tel:+7 (905) 770-69-82">
       <img style = "opacity: 0.9" src="icons/table/telephone.png">
       </a>
       </td>

        <td width="80" title="" class ="">
         7 (905) 770-69-82
         </td>
         
         <!-- Актуальность номера -->
         <td width="40" ></td>

         <!-- WhatsApp -->
          <td width ="20"> 
                               
          <a rel="nofollow" href="https://web.whatsapp.com/send?phone=7 (905) 770-69-82" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" opacity ="0.3" viewBox="0 0 20 20"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M10.0036 0.00168721C8.21686 0.00116491 6.46263 0.479332 4.92332 1.38646C3.38401 2.29359 2.11583 3.59656 1.25065 5.15986C0.385481 6.72316 -0.0450837 8.4897 0.00373451 10.2758C0.0525527 12.0619 0.578971 13.8022 1.52825 15.316L1.76616 15.6939L0.755461 19.3824L4.54008 18.3903L4.90454 18.6063C6.4452 19.5187 8.20287 20.0001 9.99345 20H9.99851C12.6506 20.0004 15.1943 18.9473 17.0699 17.0723C18.9456 15.1972 19.9996 12.6539 20 10.0017C20.0004 7.34952 18.9473 4.80581 17.0723 2.93013C15.1973 1.05445 12.654 0.000447549 10.0019 0L10.0036 0.00168721ZM15.0176 15.2202C15.3666 14.9742 15.661 14.6587 15.8821 14.2934C16.0789 13.8444 16.1399 13.3476 16.0576 12.8643C15.9834 12.7394 15.7826 12.6668 15.4822 12.515C15.1819 12.3631 13.7021 11.6359 13.4271 11.5363C13.1521 11.4368 12.953 11.3861 12.7522 11.6865C12.5514 11.9868 11.976 12.6635 11.8005 12.8643C11.6251 13.065 11.4496 13.092 11.1493 12.9402C10.2627 12.5874 9.44445 12.0826 8.73134 11.4486C8.07412 10.841 7.51062 10.1393 7.05923 9.3664C6.88544 9.06606 7.04067 8.90407 7.19252 8.7539C7.32751 8.61891 7.49118 8.40294 7.64303 8.22745C7.76654 8.07559 7.86768 7.90683 7.94337 7.72631C7.98326 7.64338 8.00183 7.5518 7.99741 7.45988C7.99299 7.36796 7.96572 7.27859 7.91806 7.19986C7.84382 7.04969 7.24314 5.5699 6.99005 4.96921C6.74708 4.38201 6.50073 4.46132 6.31513 4.45288C6.13965 4.44276 5.93886 4.44276 5.73975 4.44276C5.58744 4.44684 5.43762 4.48237 5.29969 4.54713C5.16177 4.61188 5.03873 4.70445 4.93829 4.81903C4.59843 5.14069 4.32929 5.52961 4.14801 5.96101C3.96674 6.39242 3.8773 6.85685 3.88541 7.32473C3.98354 8.45825 4.41046 9.53846 5.11376 10.4328C6.40303 12.3647 8.17239 13.9283 10.2482 14.97C10.8076 15.2115 11.3792 15.4232 11.9608 15.6045C12.5741 15.7905 13.2223 15.8309 13.854 15.7226C14.2724 15.6372 14.6685 15.4661 15.0176 15.2202Z"
                              fill="#2CB742"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.0175 15.2202C15.3666 14.9742 15.661 14.6587 15.8821 14.2934C16.0789 13.8444 16.1399 13.3476 16.0576 12.8642C15.9834 12.7394 15.7826 12.6668 15.4822 12.515C15.1819 12.3631 13.7021 11.6359 13.4271 11.5363C13.1521 11.4368 12.953 11.3861 12.7522 11.6865C12.5514 11.9868 11.976 12.6635 11.8005 12.8642C11.6251 13.065 11.4496 13.092 11.1492 12.9402C10.2627 12.5873 9.44444 12.0826 8.73133 11.4486C8.0741 10.841 7.51061 10.1393 7.05921 9.3664C6.88542 9.06605 7.04065 8.90407 7.19251 8.75389C7.32749 8.61891 7.49116 8.40293 7.64302 8.22744C7.76652 8.07558 7.86766 7.90682 7.94336 7.72631C7.98324 7.64337 8.00181 7.5518 7.99739 7.45988C7.99297 7.36795 7.9657 7.27858 7.91805 7.19986C7.84381 7.04968 7.24313 5.56989 6.99003 4.9692C6.74706 4.38201 6.50071 4.46131 6.31511 4.45287C6.13963 4.44275 5.93884 4.44275 5.73974 4.44275C5.58743 4.44683 5.4376 4.48237 5.29968 4.54712C5.16175 4.61187 5.03871 4.70444 4.93827 4.81902C4.59841 5.14068 4.32927 5.5296 4.148 5.96101C3.96672 6.39241 3.87729 6.85685 3.88539 7.32472C3.98353 8.45824 4.41044 9.53845 5.11375 10.4328C6.40302 12.3647 8.17237 13.9283 10.2482 14.97C10.8075 15.2115 11.3792 15.4232 11.9608 15.6045C12.5741 15.7905 13.2223 15.8309 13.854 15.7226C14.2723 15.6372 14.6685 15.4661 15.0175 15.2202Z"
                              fill="white"></path>
                          </svg>
          </a>
          </td>

          <!-- Контактное лицо -->
          <td width ="130"></td>

          <td width="20">
    
    <a href="?id=3546&id_phone=4549&typeQuery=300#win300" class="btn"><img style = "opacity: 0.9" src="icons/table/change.png"></a>
              </td>
      </tr>

    </table>

    </td>
<!-- *********************  ВЫВОД EMAILS ********************* -->
 <td valign="top" colspan="2" width="400">
                     
                                                                          


                     <table width ="100%" class ="telephone">
                         <tr>
                         <td width="150" class ="">
<a class = " link_tel " href="mailto:prospetto@yandex.ru"> prospetto@yandex.ru</a>
                              
                              </td>
                              <!-- Актуальность email -->
                              <td width="70">
                                 
                              </td>
                               <!-- КОмантарий к почте -->
                               <td width =""  title="">
                               
                               </td>
                               <td width="30">
                     <a href="?id=3546&id_email=3342&typeQuery=400#win400" class="btn"><img style = "opacity: 0.9" src="icons/table/change.png"></a>
                               </td>
                        </tr>
 </table>
        
</td>          
 
 



 


 <!-- *********************  ВЫВОД КОНТАКТНОЕ ЛИЦО ********************* -->
             <td width ="200"></td>
             <td>143300, Московская область, Наро-Фоминск район, улица Маршала Жукова Г.К, дом 16</td>
             <td></td>
             <td width="20">
             <a href="?id=3546&typeQuery=200#win8" class="btn"><img style = "opacity: 0.9" src="icons/table/change.png" alt="formatZakup"></a>
             </td>
          </tr>


</tbody>
</table>

<div class="">
        <div class="our_table">
        <table width="100%" class="drawtable employee_table">
          <thead>
            <tr class="DrawDark">
               <td class="hidden_class_column">пп</td>
               <td>№КП</td>
               <td>Ex</td> 
               <td>Дата КП</td>
               <td class="hidden_class_column">ИНН</td>
               <td>PDF</td>
               <td>Наименование</td>
               <td>EM</td>
               <td class="hidden_class_column">Важность</td>
          
               <td class="hidden_class_column">Ответственный</td>
               <td>id</td>
               <td>Комментарий</td>
               <td>Ред</td>
               <td class="hidden_class_column">Сл.звонок</td>
               <td class="hidden_class_column">Состояние</td>
               <td>Сумма КП</td>
               <td class="hidden_class_column">НМЦК Закупки</td>
               <td class="hidden_class_column">ДКЗ</td>
               <td class="hidden_class_column">КЗ</td>
               <td class="hidden_class_column">Финиш</td>
               <td>Ист</td>
               <td class="hidden_class_column">Адрес поставки</td>
         </tr>
         </thead>
      <tbody>

           <tr class ="   DrawLight">
<!-- ***************************  порядковый норме  ************************************************* -->
               <td>1</td>
 <!-- ***************************  Номер КП  ********************************************* -->              

          
       <td>494Е</td> 
         

<!-- ***************************  EXCEL файл  ********************************************** -->   

          
       <td><img style = "opacity: 0.2" src="icons/table/excel.png" alt="Excel"></td>
         

<!-- ***************************  Дата КП  ************************************************* -->          
         <td>2022-05-11</td>
                                      <!--   --> 
<!-- ***************************  ИНН покупателя  ********************************************* -->        
       <td width ="70" class=" hidden_class_column">5030088481</td>
<!-- ***************************  PDF file  ***************************************** -->

          
       <td><img style = "opacity: 0.2" src="icons/table/pdf.png" alt="Excel"></td>
         


<!-- ***************************  Наименование покупателя  ***************************************** -->
            
                      <td width ="150" ><a href="https://zakupki.kontur.ru/0848300051722000175" alt="konturLink" target="_blank">ООО «ПЕРСПЕКТИВА»</a></td>
             
<!-- ******************************  Icons Email  *********************************************** -->
      <td><a href= "mailer/login_mail.php?id=3546&InnCustomer=5030088481" target="_blank"><img class="scale11" style = "opacity: 0.8" src="icons/table/email.png" alt="SeeKp"></a></td>
  <!-- ********************************** ВАЖНОСТЬ КП ************************************************ -->
      <td  class="hidden_class_column" id = "js-KpImportance3546" width ="50" class="hidden_class_column"></td>     

 <!-- ********************************** ОТветственный  ************************************************ -->
     <td id= "js-Responsible3546" width="80" class="hidden_class_column"></td>

 <!-- ******************************  ПАПКА для открытия КП  *************************************  -->
     <td><a name="3546" href="index.php?id=3546" target="_blank"><img class="scale11" src="icons/table/open_dir.png" style = "opacity: 0.6" alt="OPEN" title="Открыть КП id=3546"></a></td> 
<!-- ********************************** Комментарий  ************************************************ -->
      <td id = "js-comment3546" class ="limit_width text_left"></td>

<!-- ********************************** Редактирование  ************************************************ -->
<td><img id = "3546" data-modal = "write_comment" class="js-open-modal commentClass scale11" src="icons/table/change.png" alt="addCooment"></td> 
      <!-- <td  class= "hidden_class_column"  id="markerLink $id"><img id = "$id" data-modal = "write_comment" class="js-open-modal commentClass" src="icons/table/change.png" alt="addCooment"></td>  -->
<!-- ********************************** Дата следующего звонка  ********************************** -->

      <td id = "js-DateNextCall3546" width="60" class ="alarmcolor  hidden_class_column"></td>
<!-- ********************************** СОСТОЯНИЕ КП ********************************** -->
      <td class="hidden_class_column"> <div id = "js-KpCondition3546" class = ""></div></td>
<!-- ********************************** СУММА КП ********************************** -->      
      <td id = "js-KpSum3546" >273,900</td>
 <!-- ********************************** СУММА ТЕНДЕРА  ********************************** -->      
      <td class="hidden_class_column">36,442,810</td>

<!-- ********************************** Дата окончания выполнения контракта ********************** -->
        <td class="hidden_class_column" id = "js-dateContract3546">
        <img style = "opacity: 0.2" src="icons/table/dateContract.png" title="Нет данных">
        </td>

       
      

<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
    <td class="hidden_class_column" id = "js-FinishContract3546" >0</td>
<!-- ******************************  ФИНИШ Контракта   ********************************************* -->
      <td class="hidden_class_column" id = "js-dateFinishContract3546" width="60"></td>

<!-- ******************************  ИСТОРИ КП  *************************************  -->
     <td><a name="3546" href="reports_show_history_kp.php?typeQuery=5&id_kp=3546" target="_blank"><img class="scale11" src="icons/table/history_kp.png" style = "opacity: 0.6" alt="История КП" title="История КП"></a></td> 
<!-- ****************************** Адрес поставки   ********************************************* -->
      <td class="hidden_class_column" id = "js-Adress3546" width ="150" class="hidden_class_column">Сергиево-Посадский г.о., г. Хотьково</td>
               
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

</BODY>
</HTML>
<?php }
}
