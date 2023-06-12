<?php
  $fio = $_POST['fio'];
  $data = $_POST['data'];
  $passport = $_POST['passport'];
  $dolj = $_POST['dolj'];
  $prorab = $_POST['prorab'];
  if($fio == '' || $data == '' || $passport == '' || $dolj == '' || $prorab == '') {
    echo 'Введите данные';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO employees(fio,data,passport,dolj,prorab) VALUES(:fio,:data,:passport,:dolj,:prorab)';
  $query = $pdo->prepare($sql);
  $query->execute(['fio' => $fio,"data" => $data, "passport" => $passport, "dolj" => $dolj, "prorab" => $prorab]);

  header('Location: /index3.php');

?>
