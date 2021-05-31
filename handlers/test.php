<?php
    include_once "database_connection.php";
    $pass = "expertransei";
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users`(`id`, `email`, `name`, `phone`, `pass`, `last_login`)
         VALUES ('1', 'admin', 'Admin', '', '$hashed_password', NOW())";
    if(mysqli_query($connection, $sql)){
        echo "ok";
    }
?>