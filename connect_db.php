<?php
    //  *************************************** OOP *****************************************
      $host="localhost";//имя  сервера
      $user="root";//имя пользователя
      $password="";//пароль
      $db="kpanmaks";//имя  базы данных
      // подключаемся к БД
      
      $mysqli = new mysqli ($host, $user, $password, $db) or die("Нет подключения"); //подключение к серверу
      $mysqli->query("SET NAMES 'utf8'");
      
             
      
      if ($mysqli -> connect_error) {
        printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
        exit();
      }
      

// ************************************** PDO ***********************************
      $host="localhost";//имя  сервера
      $user="root";//имя пользователя
      $password="";//пароль
      $db="kpanmaks";//имя  базы данных
 
      try {  
        $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $password);
        $pdo->exec('SET NAMES utf8');
        } catch (PDOException $e) {
          print "Has errors: " . $e->getMessage();  die();
        }


?>
