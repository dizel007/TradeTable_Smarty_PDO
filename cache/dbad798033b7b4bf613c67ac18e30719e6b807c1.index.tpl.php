<?php
/* Smarty version 4.1.0, created on 2022-07-20 12:32:25
  from 'C:\xampp\htdocs\smarty-4.1.0\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62d7d9b92249a6_78473284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c258c9b09d90698edd9a3a4d269254547a22bfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.1.0\\templates\\index.tpl',
      1 => 1647516198,
      2 => 'file',
    ),
    '8931ae15e47c48f440005d72e8b3def4ae8051c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.1.0\\templates\\header.tpl',
      1 => 1647063333,
      2 => 'file',
    ),
    '776af37b382820399930a4ba9ef0b44ceec976ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.1.0\\templates\\left_menu.tpl',
      1 => 1647151982,
      2 => 'file',
    ),
    'b44cd424fc4f563dbf83ffc31c62bd26a27bd957' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.1.0\\templates\\work_up_form.tpl',
      1 => 1647516783,
      2 => 'file',
    ),
    '2134328f898a5b8a4ec54bdbdb9b750162ebac94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.1.0\\templates\\up_form.tpl',
      1 => 1647516413,
      2 => 'file',
    ),
    'bc6e32d4a1af18b35db0458ea3cf2aea41dee36a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.1.0\\templates\\main_table.tpl',
      1 => 1647158367,
      2 => 'file',
    ),
    'deee50fc09914541f99baf54d8fa180a70f2360f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-4.1.0\\templates\\footer.tpl',
      1 => 1644179667,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_62d7d9b92249a6_78473284 (Smarty_Internal_Template $_smarty_tpl) {
?><HTML>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
  <script type="text/javascript" src="bootstrap.min.js"></script>

  <link href="css/orders.css" rel="stylesheet">
  <link href="css/main_table.css" rel="stylesheet">
  

<TITLE>Тестовая </TITLE>

</head>

<BODY bgcolor="#ffffff">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Главная</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"></path>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"></path>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
    <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"></path>
  </symbol>
  <symbol id="calendar3" viewBox="0 0 16 16">
    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"></path>
    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
  </symbol>
  <symbol id="chat-quote-fill" viewBox="0 0 16 16">
    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"></path>
  </symbol>
  <symbol id="cpu-fill" viewBox="0 0 16 16">
    <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
    <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"></path>
  </symbol>
  <symbol id="gear-fill" viewBox="0 0 16 16">
    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
  </symbol>
  <symbol id="speedometer" viewBox="0 0 16 16">
    <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
    <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"></path>
  </symbol>
  <symbol id="toggles2" viewBox="0 0 16 16">
    <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"></path>
    <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"></path>
    <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"></path>
  </symbol>
  <symbol id="tools" viewBox="0 0 16 16">
    <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"></path>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
  </symbol>
  <symbol id="geo-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"></path>
  </symbol>
</svg>
<div class="h-100 fixed-top d-flex flex-column flex-shrink-0 bg-light" style="width: 5rem;">
  <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
    <svg class="bi" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    <span class="visually-hidden">Icon-only</span>
  </a>
  <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
    <li class="nav-item">
      <a href="index.php" class="nav-link active py-3 border-bottom" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
        <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#home"></use></svg>
      </a>
    </li>
    <li>
      <a href="new_order.php" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
        <svg class="bi" width="24" height="24" role="img" aria-label="Dashboard"><use xlink:href="#speedometer2"></use></svg>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
        <svg class="bi" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#table"></use></svg>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
        <svg class="bi" width="24" height="24" role="img" aria-label="Products"><use xlink:href="#grid"></use></svg>
      </a>
    </li>
    <li>
      <a href="#" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
        <svg class="bi" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"></use></svg>
      </a>
    </li>
  </ul>
  
  <div class="dropdown border-top">
    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div>
</div><div class="container">

<div class="row">
<div class="center">
<button type="button" class="btn btn-primary col-md-3">Primary</button>

<button type="button" class="btn btn-success col-md-3">Success</button>

<button type="button" class="btn btn-info col-md-3">Info</button>


</div>
</div>
</div><div class="container">

<div class="row">
  <div class="card shadow  data-windows mt-4 pt-2 pb-2">

<form class="row gy-2 gx-3">
<!-- ПЕРВИЧНАЯ ИНФОРМАЦИЯ ПО ВХОДЯЩЕМУ ОБРАЩЕНИЮ -->
  <div class="col-md-1 pb-1 mt-2">
    <label for="inputEmail4" class="form-label">№ заказа</label>
    <input type="text" class="form-control data-windows" id="inputEmail4" >
  </div>
  <div class="row col-md-3 pb-1 mt-2">
    <div class="col-6 ">
      <label for="inputEmail4" class="form-label">Дата от ...</label>
      <input type="date" class="form-control data-windows" id="startDate">
    </div>
    <div class="col-6">
      <label for="inputEmail4" class="form-label">до ...</label>
      <input type="date" class="form-control data-windows" id="stopDate">
    </div>
  </div>

  <div class="col-md-2 pb-1 mt-2">
    <label for="inputManager" class="form-label ">Менеджер</label>
    <select id="inputManager" class="form-select data-windows">
    <option selected value="0">...Выбирете менеджера</option>
         <option value="zeld">Зелизко</option>
<option value="gor">Горячев</option>
<option value="guts">Гуц</option>
<option value="sti">Штыбко</option>
<option value="kul">Кулиев</option>
<option value="lobov">Лобов</option>

    </select>
  </div>




<!-- ИНФОРМАЦИЯ ОБ ОБРАТИВШЕМСЯ КОНТАКЕ -->
<div class="col-md-1 pb-1 mt-2">
  <label for="inputInn" class="form-label">ИНН Компании</label>
  <input type="text" class="form-control data-windows" id="inputPassword4">
</div>
<div class="col-md-2 pb-1 mt-2">
  <label for="inputNameCompany" class="form-label">Название Компании</label>
  <input type="text" class="form-control data-windows" id="inputPassword4">
</div>


  <div class="row col-md-3 pb-1 mt-2">
    <div class="col-5">
      <label for="startSumOrder" class="form-label">Сумма от...</label>
      <input type="number" class="form-control data-windows" id="startSumOrder">
    </div>
    <div class="col-md-5">
      <label for="stopSumOrder" class="form-label">до ...</label>
      <input type="number" class="form-control data-windows" id="stopSumOrder">

    </div>
  </div>





  <div class="col-md-12 ">
    <button class="col-md-2 btn btn-success" type="submit" >Применить</button>
  </div>
</form>







</div>
</div><div class="row">
        <div class="card col-md-12 shadow mt-4 pt-2 pb-2">
        <table class="table table-striped table-sm">
          <thead>
            <tr class ="text-center">
              <th scope="col">№КП</th>
              <th scope="col" width="80" >Дата</th>
              <th scope="col" width="130">Источник</th>
              <th scope="col" width="300">Название Компании</th>
              <th scope="col">Менеджер</th>
              <th scope="col" width="120">Значимость</th>
              <th scope="col" width="120">Сумма</th>
              <th scope="col" width="140">Статус заказа</th>

              <th scope="col">Оплата</th>
              <th scope="col">Комментарий</th>
            </tr>
            </thead>
            <tbody>
                       
          <tr class ="text14">
                <td>35</td>
                <td>2022-03-14</td> 
                <td>Старый клиент</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=35"><div class="ggg">ООО ВХЛЖДУ</div></a></td>
                <td>Горячев</td> 
          
                           <td class=""><div class="back_size very_importance">Очень важно</div></td>
            
                <td class="f_weight500">1 233 333,00</td>
                           <td class=""><div class="back_size not_importance">Заявка получена</div></td>
            
      

 
                <td>100</td>
                <td>55555</td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>34</td>
                <td>2022-03-14</td> 
                <td>Заказ с сайта</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=34"><div class="ggg">ООО ПластТраст</div></a></td>
                <td>Штыбко</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">66 666,00</td>
                           <td class=""><div class="back_size not_importance">Взято в работу</div></td>
            
      

 
                <td>7000</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>22</td>
                <td>2022-03-14</td> 
                <td>Старый клиент</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=22"><div class="ggg">ООО Рогв и Копыта</div></a></td>
                <td>Зелизко</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">Счет оплачен</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>21</td>
                <td>2022-03-14</td> 
                <td>Заказ с сайта</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=21"><div class="ggg"></div></a></td>
                <td>Гуц</td> 
          
                           <td class=""><div class="back_size very_importance">Очень важно</div></td>
            
                <td class="f_weight500">345 234,00</td>
                           <td class=""><div class="back_size not_importance">Счет выписан</div></td>
            
      

 
                <td>0</td>
                <td>qwqwef</td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>20</td>
                <td>2022-03-13</td> 
                <td>Входящий звонок</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=20"><div class="ggg">23апывапм цув</div></a></td>
                <td>Горячев</td> 
          
                           <td class=""><div class="back_size very_importance">Очень важно</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">КП выслано</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>19</td>
                <td>2022-03-12</td> 
                <td>нет данных</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=19"><div class="ggg">ООО ВХЛЖДУ</div></a></td>
                <td>Гуц</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">Заявка получена</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>18</td>
                <td>2022-03-12</td> 
                <td>Старый клиент</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=18"><div class="ggg">Жорик</div></a></td>
                <td>Горячев</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">52 000 125,00</td>
                           <td class=""><div class="back_size importance">Сделка закрыта</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>17</td>
                <td>2022-03-12</td> 
                <td>нет данных</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=17"><div class="ggg">Дубы</div></a></td>
                <td>Горячев</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size very_importance">Сделка сорвалась</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>16</td>
                <td>2022-03-12</td> 
                <td>Почта info</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=16"><div class="ggg">капец</div></a></td>
                <td>Горячев</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size importance">Сделка закрыта</div></td>
            
      

 
                <td>0</td>
                <td>Супер стальной борт Юо...</td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>15</td>
                <td>2022-03-12</td> 
                <td>Входящий звонок</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=15"><div class="ggg">ООО Брасивисо</div></a></td>
                <td>Лобов</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">Счет оплачен</div></td>
            
      

 
                <td>50000</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>14</td>
                <td>2022-03-11</td> 
                <td>Старый клиент</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=14"><div class="ggg"></div></a></td>
                <td>Зелизко</td> 
          
                           <td class=""><div class="back_size very_importance">Очень важно</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">Счет оплачен</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>13</td>
                <td>2022-03-11</td> 
                <td>Заказ с сайта</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=13"><div class="ggg"></div></a></td>
                <td>Штыбко</td> 
          
                           <td class=""><div class="back_size importance">Важно</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">КП выслано</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>12</td>
                <td>2022-03-11</td> 
                <td>нет данных</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=12"><div class="ggg"></div></a></td>
                <td>0</td> 
          
                           <td class=""><div class="back_size very_importance">Очень важно</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">Заявка получена</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>11</td>
                <td>2022-03-11</td> 
                <td>Заказ с сайта</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=11"><div class="ggg"></div></a></td>
                <td>Буц</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">Взято в работу</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>10</td>
                <td>2022-03-11</td> 
                <td>Почта info</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=10"><div class="ggg">333333</div></a></td>
                <td>Дуц</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">Счет выписан</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>9</td>
                <td>2022-03-11</td> 
                <td>Старый клиент</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=9"><div class="ggg">Afanasii</div></a></td>
                <td>Дуц</td> 
          
                           <td class=""><div class="back_size importance">Важно</div></td>
            
                <td class="f_weight500">9 999,00</td>
                           <td class=""><div class="back_size not_importance">КП выслано</div></td>
            
      

 
                <td>0</td>
                <td>Hellp MY litle</td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>6</td>
                <td>2022-03-10</td> 
                <td>нет данных</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=6"><div class="ggg"></div></a></td>
                <td>Гуц</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">Заявка получена</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>7</td>
                <td>2022-03-10</td> 
                <td>нет данных</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=7"><div class="ggg">Кончик</div></a></td>
                <td>Гуц</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">Взято в работу</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                       
          <tr class ="text14">
                <td>8</td>
                <td>2022-03-10</td> 
                <td>нет данных</td>
                 
                <td class="link_tr" ><a href="change_order.php?id=8"><div class="ggg"></div></a></td>
                <td>0</td> 
          
                           <td class=""><div class="back_size neytral">Нейтрально</div></td>
            
                <td class="f_weight500">0,00</td>
                           <td class=""><div class="back_size not_importance">Счет выписан</div></td>
            
      

 
                <td>0</td>
                <td></td>
                
           </tr>
         
                      </tbody>
      </table>
  </div>
</div>




</BODY>
</HTML>
<?php }
}
