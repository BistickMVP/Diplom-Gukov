<?php
  require 'configDB.php';

  $id = $_GET['id'];

  $sql = 'DELETE FROM `employees` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

  header('Location: /index3.php');
?>
