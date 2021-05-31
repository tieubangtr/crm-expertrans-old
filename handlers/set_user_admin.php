<?php
    include_once 'database_connection.php';
    $output = '';
    if(isset($_POST['id'])){
        $id = substr($_POST['id'], 9);
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $manager = $_POST['manager'];
        if(empty($manager) || empty($name) || empty($phone)){
            $output = 'empty';
        }else{
            $sql = "update users set name = '$name', phone = '$phone', in_charge_of = '$manager' where id = '$id'";
            if($result = mysqli_query($connection, $sql)){
                $output = 'ok';
            }else{
                $output = 'error';
            }
        }
    }
    echo $output;
?>