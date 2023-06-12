<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>СК Фаворит ЮГ-СТРОЙ</title>
  <link rel="stylesheet" href="css/style5.css">
</head>
<body>
<div id = "form2">
        <div id = "block2">
          <p><a href="index2.php">Назад</a></p>
        </div>
      </div>
<?php
  $id = $_GET['id'];
 require 'configDB.php';

 $sql = 'SELECT * FROM `materials` WHERE `id` = ?';
 $query = $pdo->prepare($sql);
 $query->execute([$id]);
 while($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo '<div class = form1>
    <h1>Редактирование материала</h1>
    <form action="update2.php?id='.$id.'" method="post">
        <div class="input-form">
        <input type="text" class="form-control" name="name"\
        id="name" value="'.$row->name.'"><br>
      </div>
      <div class="input-form">
        <input type="text" class="form-control" name="count"
        id="count" value="'.$row->count.'"><br>
      </div>
      <div class="input-form">
        <input type="text" class="form-control" name="shron"
        id="shron" value="'.$row->shron.'"><br>
      </div>
      <div class="input-form">
                <input type="submit" value="Сохранить">
            </div>'; 
 }
 ?>
 </div>
</body>