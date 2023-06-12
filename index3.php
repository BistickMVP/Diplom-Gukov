<?php
  require 'checkIsRole.php';
  require 'configDB.php';
  $a=$_GET["fio"];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>СК Фаворит ЮГ-СТРОЙ</title>
  <link rel="stylesheet" href="css/style4.css">

</head>
<body>
<div class="container">
<div id = "form3">
        <div id = "block5">
          <p><a href="index2.php">Вернуться</a></p>
        </div>
      </div>
      <div id = "form1">
        <div id = "block2">
          <p><a href="exit.php">Выход</a></p>
        </div>
      </div>
        <div id = "form2">
          <div id = "block3">
          <p><a href="registr.php">Регистрация</a></p>
          </div>
          <div id = "block4">
          <img src="img/3.png">
          </div>
        </div id = "form2">
</div>
<form action="index3.php" method="get">
<div class="input-form">
      <input type="text" class="form-control" name="fio" placeholder="Что ищем?"><br>
    </div>
    <div class="input-form">
      <input type="submit" value="Найти">
    </div>
</form>
<div class = "container2">
    <div id = "form4">
        <h1>Сотрудники</h1>
        <div id ="form8">
          <h3><a href="sotr.php">Создать</a></h3>
        </div>
    </div>
    <div id = "form5">
        <h2>ФИО</h2>
</div>
<div id = "form6">
<h2>Дата рождения</h2>
</div>
<div id = "form7">
<h2>Серия/номер паспорта</h2>
</div>
<div id = "form9">
<h2>Должность</h2>
</div>
<div id = "form10">
<h2>Прораб</h2>
</div>
<?php

  if (!empty($a)) { 
    $filter = "%" . $a ."%";
    $params = 'SELECT * FROM `employees` WHERE fio like ?';
    $query = $pdo->prepare($params);
    $query->execute(array($filter));
  } else {
    $query = $pdo->query('SELECT * FROM `employees` ORDER BY `id` DESC');
  }
  echo '<ul>';
  while($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo '<li><h4>'.$row->fio. " </h4><h5> ".$row->data. "</h5><h6>".$row->passport. "</h6><h7>" .$row->dolj. "</h7><h8>".$row->prorab."</h8>".'<a href="/updatesotr.php?id='.$row->id.'"><button>Обновить</button></a>'   . '<a href="/delete3.php?id='.$row->id.'"><button>Удалить</button></a></li>';
  } 
  echo '</ul>';
?>
</div>
</body>