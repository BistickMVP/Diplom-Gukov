<?php
  $name = $_POST['name'];
  $count = $_POST['count'];
  $shron = $_POST['shron'];
  if($name == '' || $count == '' || $shron == '') {
    echo 'Введите данные';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO materials(name,count,shron) VALUES(:name,:count,:shron)';
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name,"count" => $count, "shron" => $shron]);

  header('Location: /index2.php');

?>
