<?php
 require 'configDB.php';
 $id = $_GET['id'];
 $name = $_POST['name'];
 $count = $_POST['count'];
 $shron = $_POST['shron'];
 $sql = 'UPDATE `materials` set name = ?, shron = ?, count = ? where id = ?';
 $query = $pdo->prepare($sql);
 $query->execute([$name,$count,$shron,intval($id)]);
 header('Location: /index2.php');
?>