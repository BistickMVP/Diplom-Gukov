<?php
  require 'checkIsRole.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>СК Фаворит Юг Строй</title>
  <link rel="stylesheet" href="css/style3.css">
</head>
<body>
<div id = "form3">
        <div id = "block5">
          <p><a href="index3.php">Вернуться</a></p>
        </div>
      </div>
<div id = "form2">
        <div id = "block2">
          <p><a href="exit.php">Выход</a></p>
        </div>
      </div>
  <div class="form1">
    <h1>Форма регистрации</h1>
    <form action="check.php" method="post">
      <div class="input-form">
      <input type="text" class="form-control" name="login"
      id="login" placeholder="Введите логин"><br>
    </div>
     <div class="input-form">
      <input type="text" class="form-control" name="name"
      id="name" placeholder="Введите имя"><br>
    </div>
     <div class="input-form">
      <input type="password" class="form-control" name="pass"
      id="pass" placeholder="Введите пароль"><br>
    </div>
    <div class="input-form">
      <input type="submit" value="Зарегистрировать">
    </div>
    </form>
  </div>
</body>
