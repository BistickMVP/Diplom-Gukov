<?php
 require 'configDB.php';
 $id = $_GET['id'];
 $fio = $_POST['fio'];
 $data = $_POST['data'];
 $passport = $_POST['passport'];
 $dolj = $_POST['dolj'];
 $prorab = $_POST['prorab'];
 $sql = 'UPDATE `employees` set fio = ?, data = ?, passport = ?, dolj = ?, prorab = ? where id = ?';
 $query = $pdo->prepare($sql);
 $query->execute([$fio,$data,$passport,$dolj,$prorab,intval($id)]);
 header('Location: /index3.php');
?>