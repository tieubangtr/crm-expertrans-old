<?php
    include_once "database_connection.php";
    $output = "";
    if (isset($_POST['submit'])) {
        $nguoitao = $_POST['uid'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $tinhtrang = $_POST['tinhtrang'];
        $nhomkhachhang = $_POST['nhomkhachhang'];
        $nguonkhachhang = $_POST['nguonkhachhang'];
        $nguoiphutrach = $_POST['nguoiphutrach'];

        if(empty($name) || empty($phone)){
            $output = "empty";
        }else{
            $sql = "INSERT INTO `customer`(`name`, `tinhtrang`, `dienthoai`, `nguoiphutrach`, `mota`, `diachi`, `email`, `nhomkhachhang`, `nguonkhachhang`, `nguoitao`, `timestamp`) VALUES 
            (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
            if($stmt = mysqli_prepare($connection, $sql)){
                mysqli_stmt_bind_param($stmt, "ssssssssss", $name, $tinhtrang, $phone, $nguoiphutrach, $note, $address, $email, $nhomkhachhang, $nguonkhachhang, $nguoitao);
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