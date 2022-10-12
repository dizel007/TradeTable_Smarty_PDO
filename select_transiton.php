<?php
// выбираем куда переходить после обновденни данных о компании
isset($_GET['id'])?$id= $_GET['id']:$id ='';
isset($_GET['inn'])?$inn= $_GET['inn']:$inn ='';





// формируем ссылку перехода когда корректировака была в главной таблице
if ($id == "0") {$id = "";};

if ($id <> '') {$link_transition = "index.php?id=".$id;}

// формируем ссылку перехода когда корректировака была в информации о компании
if (($id == '') AND ($inn <>'')) {$link_transition = "show_comp_by_inn.php?inn=".$inn;}

// когда нет НИ АЙДИ ни ИНН ( сюда никогда не должны попадать)
if (($id == '') AND ($inn =='')) { die ("id=".$id."; inn=".$inn."; НЕТ ID  и ИНН СДОХНЕМ ТУТ (файл select_trans....");}

header ("Location: $link_transition"); 
