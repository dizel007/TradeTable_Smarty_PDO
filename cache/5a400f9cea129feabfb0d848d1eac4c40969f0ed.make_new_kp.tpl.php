<?php
/* Smarty version 4.1.0, created on 2022-10-04 13:50:05
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\make_new_kp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_633c1dedcac1b9_19373471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '592c6aabfbd644fd23aa3b1aa2a89df06a6a53e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\make_new_kp.tpl',
      1 => 1664884039,
      2 => 'file',
    ),
    '4feb86069f69d7cf7767fcb7fa2f61b4980990d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\header.tpl',
      1 => 1663933780,
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
function content_633c1dedcac1b9_19373471 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание нового КП</title>
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
<div class="zagolovok"> Создание нового КП </div>
  
<div class="block">
 <p class="zagolovok">Проверка наличия ИНН в Базе</p>
        <form enctype="multipart/form-data" action="make_new_kp.php" method="get">
            <div class="input_form_left zhir">
              <input type="hidden" name="user" value="zeld">  
                                           ИНН Заказчика : <input type="number" name="InnCustomer" value ="">
                                </div>
            <div class="input_form_left">
              <input type="submit" value="Запросить ИНН">
            </div>
   
    
           <div class="red_string">
              <p>
               
                            
                    Данный ИНН отсутствует в НАШЕЙ(!!!!!!!) Базе    &nbsp&nbsp&nbsp
                    <a href="make_new_comp.php?user=zeld&InnCustomer=" > Добавить?</a>
                                                        
              </p>
            </div>

        </form>
</div>

<form enctype="multipart/form-data" action="pdo_connect_db/insert_new_kp_in_reestr.php" method="post">


    
 
    <input type="hidden" name="InnCustomer" value="">  
     
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
        <p class ="zhir"> Дата КП : <input type="date" name="KpDate" value ="<br />
<b>Notice</b>:  Undefined index: KpDate in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\592c6aabfbd644fd23aa3b1aa2a89df06a6a53e9_0.file.make_new_kp.tpl.cache.php</b> on line <b>104</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\592c6aabfbd644fd23aa3b1aa2a89df06a6a53e9_0.file.make_new_kp.tpl.cache.php</b> on line <b>104</b><br />
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
        <p class ="zhir"> Дата КП : <input type="date" name="KpDateO" value ="<br />
<b>Notice</b>:  Undefined index: KpDateO in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\592c6aabfbd644fd23aa3b1aa2a89df06a6a53e9_0.file.make_new_kp.tpl.cache.php</b> on line <b>123</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\TradeTable_Smarty_PDO\templates_c\592c6aabfbd644fd23aa3b1aa2a89df06a6a53e9_0.file.make_new_kp.tpl.cache.php</b> on line <b>123</b><br />
"></p>
       </div>
         <div> 
        *если окно пустое, то номер будет порядковый
   </div>
</div>



<div class="block green_bgc">
  
 <p class="pad5px width15 zhir">Наименование Заказчика : <input required type="text" name="NameCustomer" value ="" size="70"></p>


  
<p class="pad5px width15 zhir">Телефон Заказчика : <input type="tel" name="TelCustomer" value ="" size="70" data-phone-pattern></p>
  
  <p class="pad5px width15 zhir">Эл. Почта Заказчика : <input type="email" name="EmailCustomer" value ="" size="70"></p>

   
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
            <option selected value="Зелизко">Зелизко</option>
            <option value="Зелизко">Зелизко</option>
<option value="Горячев">Горячев</option>
<option value="Гуц">Гуц</option>
<option value="Штыбко">Штыбко</option>
<option value="Кулиев">Кулиев</option>
<option value="Лобов">Лобов</option>

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
           <option value="Зелизко">Зелизко</option>
<option value="Горячев">Горячев</option>
<option value="Гуц">Гуц</option>
<option value="Штыбко">Штыбко</option>
<option value="Кулиев">Кулиев</option>
<option value="Лобов">Лобов</option>


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
       <option value="В работе">В работе</option>
<option value="Не требуется">Не требуется</option>
<option value="Купили у нас">Купили у нас</option>
<option value="Уже купили">Уже купили</option>
<option value="Перенос на сл.год">Перенос на сл.год</option>



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
