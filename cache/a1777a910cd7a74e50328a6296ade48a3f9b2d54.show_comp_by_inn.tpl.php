<?php
/* Smarty version 4.1.0, created on 2022-10-04 14:56:17
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\show_comp_by_inn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_633c2d71c95644_30962704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5833027cb3e733864eaaba90bb3a2e8ac386f93d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\show_comp_by_inn.tpl',
      1 => 1664881584,
      2 => 'file',
    ),
    '4feb86069f69d7cf7767fcb7fa2f61b4980990d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\header.tpl',
      1 => 1663933780,
      2 => 'file',
    ),
    '13a2828906884e620a38ea180aeb63cc74291cd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\company_by_id_kp.tpl',
      1 => 1664881623,
      2 => 'file',
    ),
    'b624aef312b557a8d7a555db9f94335e0db5453d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\_include_modal.tpl',
      1 => 1664879449,
      2 => 'file',
    ),
    '662f3fbd71c8786d1996b8e4ab7d17cf2d8d0594' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\modal\\modal_insert_phone.tpl',
      1 => 1664886070,
      2 => 'file',
    ),
    'cd5e441338f8f31e52ac79de07ed17ae0b3cf1fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\modal\\modal_update_phone.tpl',
      1 => 1664864914,
      2 => 'file',
    ),
    '67fb86d7e76c14609c84f932423a79fadb370786' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\modal\\modal_insert_email.tpl',
      1 => 1664865026,
      2 => 'file',
    ),
    '04a907787aed794a061734015c4fb893d08dc517' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\modal\\modal_update_email.tpl',
      1 => 1664865086,
      2 => 'file',
    ),
    '82b77f7a6596b41ea166f56dbfd3e3d1173922ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\modal\\modal_update_infocomp.tpl',
      1 => 1664865156,
      2 => 'file',
    ),
    'ac1e3d6eaa128d645a47a9ac61bceeccb71ee66c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\footer.tpl',
      1 => 1664879491,
      2 => 'file',
    ),
    'd919f8696e4c7692c2c26cd01ce509933ce6b3fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\modal\\modal_change_zakup.tpl',
      1 => 1664879304,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_633c2d71c95644_30962704 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вывод информации о компании</title>
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

<div class="zagolovok">
        <br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\13a2828906884e620a38ea180aeb63cc74291cd6_0.file.company_by_id_kp.tpl.cache.php</b> on line <b>27</b><br />

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
             <a href="?id=&inn=<br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\13a2828906884e620a38ea180aeb63cc74291cd6_0.file.company_by_id_kp.tpl.cache.php</b> on line <b>42</b><br />
&typeQuery=309#win309"><img src ="icons/table/plus.png"></a>
             </td>
             <td>Емайл</td>
             <td width="32">
             <a href="?id=&inn=<br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\13a2828906884e620a38ea180aeb63cc74291cd6_0.file.company_by_id_kp.tpl.cache.php</b> on line <b>48</b><br />
&typeQuery=409#win409"><img src ="icons/table/plus.png"></a>
             </td>
             <td>Контактное лицо</td>
             <td width = "160">Адрес</td>
             <td>Комментарий</td>
             <td>Ред</td>
          </tr>
          <tr class="draw_inn">
             <td class = "inntext" ><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\13a2828906884e620a38ea180aeb63cc74291cd6_0.file.company_by_id_kp.tpl.cache.php</b> on line <b>57</b><br />
</td>
            
             <td><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\13a2828906884e620a38ea180aeb63cc74291cd6_0.file.company_by_id_kp.tpl.cache.php</b> on line <b>60</b><br />
</td> 
             
<!-- ************************ ВЫВОД ТЕЛЕФОНОВ *********************************** -->
<td valign="top" colspan="2" width="300">


  
<table width ="100%" class ="telephone">

    </table>

    </td>
<!-- *********************  ВЫВОД EMAILS ********************* -->
 <td valign="top" colspan="2" width="400">
                     
</td>          
 
 



 


 <!-- *********************  ВЫВОД КОНТАКТНОЕ ЛИЦО ********************* -->
             <td width ="200"><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\13a2828906884e620a38ea180aeb63cc74291cd6_0.file.company_by_id_kp.tpl.cache.php</b> on line <b>209</b><br />
</td>
             <td><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\13a2828906884e620a38ea180aeb63cc74291cd6_0.file.company_by_id_kp.tpl.cache.php</b> on line <b>211</b><br />
</td>
             <td><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\13a2828906884e620a38ea180aeb63cc74291cd6_0.file.company_by_id_kp.tpl.cache.php</b> on line <b>213</b><br />
</td>

<!-- *********************  Корректировка данных компании ********************* -->
             <td width="20">
             <a href="?id=&typeQuery=200#win8" class="btn"><img style = "opacity: 0.9" src="icons/table/change.png" alt="formatZakup"></a>
             </td>
          </tr>


</tbody>
</table>   <!-- модальные окна для вставки телефонов -->
 <!-- модальные окна для изменения телефонов -->
 <!-- модальные окна для вставки email -->
  <!-- модальные окна для изменения email -->
<!-- Корректировка данных о Компании -->

  <div class="dm-overlay" id="win8">
      <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal">
                  <a href="#close" class="close"></a>
      <form  action="changedb/update_inn_company.php?id=&typeQuery=200" method="post">
 <table class="modal_tabel" width="100%" cellspacing="0" cellpadding="5">

       <tr> 
          <td width="200" valign="top">ИНН КОМПАНИИ</td>
          <td valign="top"><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\82b77f7a6596b41ea166f56dbfd3e3d1173922ec_0.file.modal_update_infocomp.tpl.cache.php</b> on line <b>40</b><br />
</td>
          <td> 
             <input type="hidden" name="inn" value="<br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\82b77f7a6596b41ea166f56dbfd3e3d1173922ec_0.file.modal_update_infocomp.tpl.cache.php</b> on line <b>43</b><br />
">
          </td>
      </tr>
      <tr> 
          <td> 
              <input type="hidden" name="id" value=""></p>
        </td>
      </tr>
      <tr> 
          <td width="200" valign="top">КРАТКОЕ Наименование КОМПАНИИ</td>
          <td valign="top"><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\82b77f7a6596b41ea166f56dbfd3e3d1173922ec_0.file.modal_update_infocomp.tpl.cache.php</b> on line <b>55</b><br />
</td>
      </tr>
      <tr> 
          <td width="200" valign="top">Полное Наименование КОМПАНИИ</td>
          <td valign="top"><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\82b77f7a6596b41ea166f56dbfd3e3d1173922ec_0.file.modal_update_infocomp.tpl.cache.php</b> on line <b>60</b><br />
</td>
      </tr>
  
      <tr> 
          <td width="200" valign="top">Контактное Лицо</td>
         <td valign="top"><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\82b77f7a6596b41ea166f56dbfd3e3d1173922ec_0.file.modal_update_infocomp.tpl.cache.php</b> on line <b>66</b><br />
</td>
         <td>   
              <p>    
                <textarea name="contactFace" rows="3" cols="50"><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\82b77f7a6596b41ea166f56dbfd3e3d1173922ec_0.file.modal_update_infocomp.tpl.cache.php</b> on line <b>70</b><br />
</textarea>
              </p>
         </td>
        </tr>
        <tr> 
          <td width="200" valign="top">Юрид. Адрес</td>
          <td valign="top"><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\82b77f7a6596b41ea166f56dbfd3e3d1173922ec_0.file.modal_update_infocomp.tpl.cache.php</b> on line <b>77</b><br />
</td>
      </tr>
      <tr> 
          <td width="200" valign="top">Коментарий</td>
          <td valign="top"><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\82b77f7a6596b41ea166f56dbfd3e3d1173922ec_0.file.modal_update_infocomp.tpl.cache.php</b> on line <b>82</b><br />
</td>
          <td>   
              <p>    
                <textarea name="comment" rows="3" cols="50"><br />
<b>Notice</b>:  Undefined offset: 0 in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\82b77f7a6596b41ea166f56dbfd3e3d1173922ec_0.file.modal_update_infocomp.tpl.cache.php</b> on line <b>86</b><br />
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
  
 <!-- модальные окна для изменения инорфмаци о комапнии -->
 <!-- модальные окна для правки по ИНН  -->

 <!-- модальные окна для вставки телефонов -->

  <div class="dm-overlay js-modal " data-modal = "write_comment">
     <div class="dm-table">
          <div class="dm-cell">
              <div class="dm-modal"  >
                  <!-- <a href="#close" class="close js-modal-close"></a> -->
                  <a class="close js-modal-close"></a>

  <div>
    <select id = "js-id" name="id">
      <option id ="js-new-modal-id" value ="$id"></option>
            
    </select>
  </div>

 <div><b> Номер КП : <span id="js-new-modal-KpNumber">$KpNumber</span></b></div>

  
 <div>ИНН Заказчика :<span id="js-new-modal-InnCustomer">$InnCustomer</span></div>
 <div><b>Наименование Заказчика :<span id="js-new-modal-NameCustomer">$NameCustomer</span></b></div>
  <hr>
<div>ID  закупки :<span id="js-new-modal-idKp">$idKp</span></div>
  <hr>
     
<div> 
<p>Важность :
    <select id="KpImportance" size="1" name="KpImportance">
      <option id="js-new-modal-KpImportance" selected value=""></option>  
      <option value="Нейтрально">Нейтрально</option>
      <option value="Важно">Важно</option>
      <option on value="Очень важно">Очень важно</option>
    </select>
</p>
 </div>

<div> 
  <p>Ответственный
    <select id="Responsible" size="1" name="Responsible">
        <option id="js-new-modal-Responsible" selected value = ""></option>
           <br />
<b>Notice</b>:  Undefined index: active_users_arr_smarty in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\d919f8696e4c7692c2c26cd01ce509933ce6b3fb_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>67</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\d919f8696e4c7692c2c26cd01ce509933ce6b3fb_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>67</b><br />
<br />
<b>Notice</b>:  Undefined index: active_users_arr_smarty in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\d919f8696e4c7692c2c26cd01ce509933ce6b3fb_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>67</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\d919f8696e4c7692c2c26cd01ce509933ce6b3fb_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>67</b><br />


     </select>
  </p>
</div>
   <hr>

<div> 
    <p>Комментарий :<span id="js-new-modal-Comment">$Comment</span></p>
      <p id="Comment">    
         <textarea id="textarea-Comment" name="Comment" rows="2" cols="50"></textarea>
      </p>
</div>
<hr>

<div> 
    <p >Дата след.Звонка <input id="DateNextCall" type="date" name="DateNextCall" value ="$DateNextCall"></p>
</div>


<div> 
  <p>Состояние КП
    <select id="KpCondition" size="1" name="KpCondition">
        <option id="js-new-modal-KpCondition" selected value = ""></option>
       <br />
<b>Notice</b>:  Undefined index: array_condition_kp in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\d919f8696e4c7692c2c26cd01ce509933ce6b3fb_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>92</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\d919f8696e4c7692c2c26cd01ce509933ce6b3fb_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>92</b><br />
<br />
<b>Notice</b>:  Undefined index: array_condition_kp in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\d919f8696e4c7692c2c26cd01ce509933ce6b3fb_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>92</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\d919f8696e4c7692c2c26cd01ce509933ce6b3fb_0.file.modal_change_zakup.tpl.cache.php</b> on line <b>92</b><br />



        </select>
  </p>
</div>
<div><p>Сумма КП  <input type="number" id="KpSum" name="KpSum" value ="$KpSum"></p></div>
<div><p>НМЦК Тендера КП : <span id="js-new-modal-TenderSum">$TenderSum</span></p></div>
<hr>

<div> 
    <p>Дата заключения Контакта <input id="dateContract" type="date" name="dateContract" value ="$dateContract">
    Процент выполнения  <input type="number" id="procent_work" name="procent_work" value ="$procent_work"></p>
    <p>Дата окончания Контакта <input id="dateFinishContract" type="date" name="dateFinishContract" value ="$dateFinishContract"></p>
</div>
<hr>

<div> 
  <p>Контракт закрыт 
    <select id="FinishContract" size="1" name="FinishContract">
      <!-- <option id="js-new-modal-FinishContract" selected value = "$FinishContract">$FinishContract</option> -->
      <option value="0">Контракт НЕ закрыт</option>
      <option value="1">Контракт закрыт</option>
  </select>
  </p>
</div>

<div> 
  <p>Адрес поставки : </p> 
  <textarea id="textarea-Adress" name="Adress" rows="1" cols="50"><span id="js-new-modal-Adress">$Adress</span></textarea>
</div>
<div class="container-for-btn">
<div class = "btncommentClass button">СОХРАНИТЬ</div>                
</div>    

              
       

              </div>
          </div>
      </div>
  </div> <!-- модальные окна для изменения инорфмаци d КП -->
<script type="text/javascript" src="js/ajax_query_comment.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript" src="js/phone_mask.js"></script>

</body>

</html>






<?php }
}
