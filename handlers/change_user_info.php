<?php
    include_once "database_connection.php";
    $output = "";
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        if(empty($name) || empty($phone) || empty($email)){
            $output = "empty";
        }else{
            $sql = "update users set name = ? , phone = ? , email = ?  where id= ?  ";
            if($stmt = mysqli_prepare($connection, $sql)){
                mysqli_stmt_bind_param($stmt, "ssss", $name, $phone, $email, $id);
                mysqli_stmt_execute($stmt);

                //Success message here

                $output = "ok";
            }else{
                //Error message
                $output = "error";
            }
        }
    }else{
        //Error message
        $output = "error";
    }
    echo $output;
?>