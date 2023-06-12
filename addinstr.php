<?php
  $name = $_POST['name'];
  $number = $_POST['number'];
  $shron = $_POST['shron'];
  if($name == '' || $number == '' || $shron == '') {
    echo 'Введите данные';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO instrument(name,number,shron) VALUES(:name,:number,:shron)';
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name,"number" => $number, "shron" => $shron]);

  header('Location: /index2.php');

?>
