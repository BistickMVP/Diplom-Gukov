<?php

  $login = filter_var(trim($_POST ['login']),
  FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST ['name']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST ['pass']),
  FILTER_SANITIZE_STRING);

if(mb_strlen($login) <5 || mb_strlen($login)> 190) {
  echo "Недопустимая длина логина";
  exit();
} else if(mb_strlen($name) < 3 || mb_strlen($name) >50) {
  echo "Недопустимая длина имени";
  exit();
} else if(mb_strlen($pass) <2 || mb_strlen($pass) > 6) {
  echo "Недопустимая длина пароля";
}
      $pass = md5($pass."sqewqews232");
    $mysql = new mysqli('127.0.0.1','root','','base_SK');
    $mysql->query("INSERT INTO `Users` (`login`, `pass`, `name`)
    VALUES ('$login', '$pass', '$name')");

  header('Location: /');
  $mysql->close();
 ?>
