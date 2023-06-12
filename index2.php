<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>СК Фаворит ЮГ-СТРОЙ</title>
  <link rel="stylesheet" href="css/style2.css">
<?php
  require 'configDB.php';
  $a=$_GET["name"];
  $b=$_GET["number"];
?>
</head>
<body>
<div class="container">
    <div id = "block1">
      <p> Здравствуйте, <?=$_COOKIE['user']?>!</p>
    </div>
      <div id = "form1">
        <div id = "block2">
          <p><a href="exit.php">Выход</a></p>
        </div>
      </div>
      <?php
        $userID = $_COOKIE['userID'];
        $params = "SELECT * FROM `Users` WHERE `id` = ?";
        $query = $pdo->prepare($params);
        $query->execute([$userID]);

        while($row = $query->fetch(PDO::FETCH_OBJ)) {
          if($row->role === "ROLE_ADMIN"){
            echo '<div id = "form2">
            <div id = "block3">
            <p><a href="index3.php">Таблица сотрудников</a></p>
            </div>
            <div id = "block4">
            <img src="img/3.png">
            </div>
          </div id = "form2">';
          }
        }

      
        


      ?>
</div>
<form action="index2.php" method="get">
<div class="input-form">
      <input type="text" class="form-control" name="name" placeholder="Что ищем?"><br>
    </div>
    <div class="input-form">
      <input type="submit" value="Найти">
    </div>
</form>
    <div class = "conteiner2">
      <div id = "form3">
        <div id ="form8">
          <h3><a href="mater.php">Создать</a></h3>
        </div>
        <h1>Материалы</h1>
      </div id = "form3">
      <div id = "form5">
        <h2>Наименование</h2>
</div>
<div id = "form6">
<h2>Колличество</h2>
</div>
<div id = "form7">
<h2>Место хранения</h2>
</div>
<?php

  if (!empty($a)) { 
    $filter = "%" . $a ."%";
    $params = 'SELECT * FROM `materials` WHERE name like ?';
    $query = $pdo->prepare($params);
    $query->execute(array($filter));
  } else {
    $query = $pdo->query('SELECT * FROM `materials` ORDER BY `id` DESC');
  }
  echo '<ul>';
  while($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo '<li><h4>'.$row->name. " </h4><h5> ".$row->count. "</h5><h6>".$row->shron. "</h6>" .'<a href="/updatemater.php?id='.$row->id.'"><button>Обновить</button></a>'   . '<a href="/delete2.php?id='.$row->id.'"><button>Удалить</button></a></li>';
  } 
  echo '</ul>';
?>
</div>




<form action="index2.php" method="get">
<div class="input-form2">
      <input type="text" class="form-control" name="number" placeholder="Что ищем?"><br>
    </div>
    <div class="input-form2">
      <input type="submit" value="Найти">
    </div>
</form>
<div class = "conteiner3">
<div id = "form4">
<div id ="form8">
          <h3><a href="instr.php">Создать</a></h3>
        </div>
        <h1>Инструменты</h1>
      </div id = "form4">
      <div id = "form5">
        <h2>Наименование</h2>
</div>
<div id = "form6">
<h2>ID номер</h2>
</div>
<div id = "form7">
<h2>Место хранения</h2>
</div>
<?php
  if (!empty($b)) { 
    $filter = "%" . $b ."%";
    $params = 'SELECT * FROM `instrument` WHERE number like ?';
    $query = $pdo->prepare($params);
    $query->execute(array($filter));
  } else {
    $query = $pdo->query('SELECT * FROM `instrument` ORDER BY `id` DESC');
  }

  echo '<ul>';
  while($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo '<li><h4>'.$row->name. " </h4><h5> ".$row->number. "</h5><h6>".$row->shron. "</h6>" .'<a href="/updateinst.php?id='.$row->id.'"><button>Обновить</button></a>'   . '<a href="/delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
  } 
  echo '</ul>';
?>
</div>
</body>