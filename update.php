<?php
 require 'configDB.php';
 $id = $_GET['id'];
 $name = $_POST['name'];
 $number = $_POST['number'];
 $shron = $_POST['shron'];
 $sql = 'UPDATE `instrument` set name = ?, shron = ?, number = ? where id = ?';
 $query = $pdo->prepare($sql);
 $query->execute([$name,$shron,$number,intval($id)]);
 header('Location: /index2.php');
?>