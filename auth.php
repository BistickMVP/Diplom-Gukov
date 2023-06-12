<?php
  $login = filter_var(trim($_POST ['login']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST ['pass']),
  FILTER_SANITIZE_STRING);

  $pass = md5($pass."sqewqews232");

  $mysql = new mysqli('127.0.0.1','root','','base_SK');

  $result = $mysql->query("SELECT * FROM `Users` WHERE `login` = '$login' AND `pass`='$pass'");
  $user = $result->fetch_assoc();
  if(is_countable($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
  }

setcookie('user',$user['name'],time() + 3600,"/");
setcookie('userID',$user['id'],time() + 3600,"/");


  $mysql->close();
  header('Location: /index2.php');

 ?>