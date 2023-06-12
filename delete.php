<?php
  require 'configDB.php';

  $id = $_GET['id'];

  $sql = 'DELETE FROM `instrument` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

  header('Location: /index2.php');
?>
