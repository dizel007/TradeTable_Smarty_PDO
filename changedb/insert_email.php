<?php

require_once "../connect_db.php";
// require_once "../functions/telephone_make.php";

$id = $_GET["id"];
$inn = $_GET["inn"];
$new_email = $_GET["new_email"];
$new_email=htmlspecialchars($new_email);
$email_from_kp = $new_email;
require_once("../mailer/modul/valid_email.php"); // Проверяем валидный ли емайл
$actual_email = $_GET["actual_email"];
$commentEmail = $_GET["commentEmail"];
$commentEmail=htmlspecialchars($commentEmail);
$today = date("Y-m-d H:i:s"); 


// Вычитываем все телефоны с таким ИНН
$sql = "SELECT email FROM email WHERE inn = '$inn'";
$query = $mysqli->query($sql);
$i = 0;
while ($row = $query->fetch_assoc()) {
  $email_db[] = $row["email"];
  $i++;
}
$priz = 0;
if (isset($email_db)) {
  
    foreach ($email_db as $key => $email_) {
      
      if ($new_email == $email_) { 
        $priz = 1;
       } 

    }
  }
 
 
  if ($priz <> 1) {
    $sql_insert_email  = "INSERT INTO `email`(`id`, `inn`, `email`, `comment`,`date_write`, `actual`)
                                      VALUES ('','$inn','$new_email','$commentEmail','$today','$actual_email')";
    $query = $mysqli->query($sql_insert_email);
    if (!$query) {
      echo "WE ARE DIE <br>";
      die(mysqli_error($mysqli));
      printf("Соединение не удалось: ");
    }
  } else {
     die("ТАКОЙ EMAIL УЖЕ СУЩЕСТВУЕТ");
  }

  $sql = "SELECT * FROM users WHERE user_hash = '$_COOKIE[hash]'";
  $user = $mysqli->query($sql);
  while ($row = $user -> fetch_assoc()) 
  {
         $user_login = $row["user_login"];
     }
  $now_date = date('Y-m-d');
   
  $db_comment="Нов.почта. :$new_email :";
  $db_comment.=" коммент :".$commentEmail.";";
  $db_comment.=" актуал :".$actual_email.";";
    
     $date_change = $now_date;
     $id_item = $inn;
     $what_change = 6; 
     $comment_change = $db_comment; 
     $author = $user_login;
     //    require "update_reports.php";
       
     $sql = "INSERT INTO `reports`(`id`, `date_change`, `id_item`, `what_change`, `comment_change`, `author`)
       VALUES ('', '$date_change', '$id_item', '$what_change', '$comment_change', '$author')";
     $query = $mysqli->query($sql);
     if (!$query){
      die("Соединение не удалось: (Добавление в реестр изменений) ");
     }


// header ("Location: ../index.php?id=".$id);  // перенаправление на нужную страницу
header ("Location: ../select_transiton.php?id=".$id."&inn=".$inn);
exit();    // прерываем работу скрипта, чтобы забыл о прошлом


?>
