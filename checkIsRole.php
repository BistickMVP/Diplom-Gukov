<?php
require 'configDB.php';
    $userID = $_COOKIE['userID'];
    $params = "SELECT * FROM `Users` WHERE `id` = ?";
    $query = $pdo->prepare($params);
    $query->execute([$userID]);
    while($row = $query->fetch(PDO::FETCH_OBJ)) {
        if($row->role !== "ROLE_ADMIN"){
             header("HTTP/1.1 404 Not Found");
             exit();
        }
    }




