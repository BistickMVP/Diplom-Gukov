<?php
  require 'configDB.php';

  $id = $_GET['id'];

  $sql = 'DELETE FROM `materials` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

  header('Location: /index2.php');
?>
