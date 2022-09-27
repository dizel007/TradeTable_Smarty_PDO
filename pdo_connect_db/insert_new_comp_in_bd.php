<?php
// https://habr.com/en/post/137664/
// инструкция по вставки через PDO

require_once ("../connect_db.php");

// Если задан ИНН то проверим его по БД, если добавляем по инн, то нужно будет его ввести в Базу
$InnCustomer = $_POST['InnCustomer'];
// ******************* делаем запрос, чтобы узнать есть ли у нас в БД этот ИНН ********
$NameCustomer = $_POST['NameCustomer'];
// контактного лица
$ContactCustomer = $_POST['ContactCustomer'];

$TelCustomer = $_POST['TelCustomer'];
$EmailCustomer = $_POST['EmailCustomer'];
$adress = $_POST['Adress'];
$date_write = date('Y-m-d');
$CommentCustomer='';


// **************************************************************************************

// echo ':KpNumber=', $KpNumber."<br>";
// echo ':KpData=', $KpDate."<br>";
// echo ':InnCustomer=', $InnCustomer."<br>";
// echo ':NameCustomer=', $NameCustomer."<br>";
// echo ':idKp=', $idKp."<br>";
// echo ':KpImportance=', $KpImportance."<br>";
// echo ':Responsible=', $Responsible."<br>";
// echo ':KpSum=', $KpSum."<br>";
// echo ':adress=', $adress."<br>";
// echo ':date_write=', $date_write."<br>";
// echo ':LinkKp=', $LinkKp."<br>";


// **************** вставляем каждый параметр  данных  *********************
$stmt  = $pdo->prepare("INSERT INTO `inncompany` 
                       (inn, name, adress, contactFace, comment, date_write)
                       VALUES (:inn, :name, :adress, :contactFace, :comment, :date_write)");


$stmt ->bindParam(':inn', $InnCustomer);
$stmt ->bindParam(':name', $NameCustomer);
// $stmt ->bindParam(':telefon', $TelCustomer);
// $stmt ->bindParam(':email', $EmailCustomer);
$stmt ->bindParam(':adress', $adress);
$stmt ->bindParam(':comment', $CommentCustomer);
$stmt ->bindParam(':contactFace', $ContactCustomer);
$stmt ->bindParam(':date_write', $date_write);

if ($stmt ->execute()) {
  $last_id = $pdo->lastInsertId(); // получаем id - введенной строки 
  // echo "Запись УДАЧНО добавлена successfully";
} else {
  die (" ** DIE ** Не получилось добавить данные о компании, INSERT новой компании по ИНН");
}


// ******************* делаем перенаправление на создание нового КП ********
header("Location: ../index.php?id=".$last_id);

die('Че то померли на инсерте нового  ИНН в БД');