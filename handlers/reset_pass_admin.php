<?php
    include_once 'database_connection.php';
    $output = '';
    if(isset($_POST['id'])){
        $id = substr($_POST['id'], 6);
        $pass = 'expertransei';
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "update users set pass = '$hashed_password' where id = '$id';";
        if($result = mysqli_query($connection, $sql)){
            $output = 'ok';
        }
    }
    echo $output;
?>