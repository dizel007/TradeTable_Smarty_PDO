<?php
/* Smarty version 4.1.0, created on 2022-09-26 15:20:38
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\templates\make_new_comp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6331a726252f05_27680349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19190798f3ce1c8b7a9eed98b10eebf1587c8e3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\templates\\make_new_comp.tpl',
      1 => 1664198437,
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
function content_6331a726252f05_27680349 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление новой компании по ИНН </title>
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

<div class="zagolovok"> Добавить Новую компанию по ИНН</div>
  

<form enctype="multipart/form-data" action="pdo_connect_db/insert_new_comp_in_bd.php" method="post">


  
<div class="block green_bgc">  
 <p class="pad5px width15 zhir"> ИНН Заказчика :
    <input required type="number" name="InnCustomer" value="666">  
</p>



  

 <p class="pad5px width15 zhir">Наименование Заказчика : <input required type="text" name="NameCustomer" value ="" size="70"></p>

  
<p class="pad5px width15 zhir">Телефон Заказчика : <input name="TelCustomer" size="70" data-phone-pattern></p>
        
        


  
 <p class="pad5px width15 zhir">Эл. Почта Заказчика : <input type="email" name="EmailCustomer" value ="" size="70"></p>

  
   <p class="pad5px width15 zhir">Контактное лицо   : <input type="text" name="ContactCustomer" value ="" size="70"></p>

  
   <p class="pad5px width15 zhir">Адрес Заказчика   : <input type="text" name="Adress" value ="" size="70"></p>



  
 <p><input type="submit" value="Создать"></p>


 </div>
 </form>
            
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