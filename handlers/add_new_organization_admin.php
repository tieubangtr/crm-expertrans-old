<?php
    include_once "database_connection.php";
    $output = "";
    if (isset($_POST['submit'])) {
        $nguoitao = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $name1 = $_POST['name1'];
        $phone1 = $_POST['phone1'];
        $email1 = $_POST['email1'];
        $name2 = $_POST['name2'];
        $phone2 = $_POST['phone2'];
        $email2 = $_POST['email2'];
        $name3 = $_POST['name3'];
        $phone3 = $_POST['phone3'];
        $email3 = $_POST['email3'];
        $name4 = $_POST['name4'];
        $phone4 = $_POST['phone4'];
        $email4 = $_POST['email4'];
        $name5 = $_POST['name5'];
        $phone5 = $_POST['phone5'];
        $email5 = $_POST['email5'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $tinhtrang = $_POST['tinhtrang'];
        $nhomkhachhang = $_POST['nhomkhachhang'];
        $nguonkhachhang = $_POST['nguonkhachhang'];
        $nguoiphutrach = $_POST['nguoiphutrach'];

        if(empty($name) || empty($phone)){
            $output = "empty";
        }else{
            $sql = "INSERT INTO `organizations`( `name`, `tinhtrang`, `dienthoai`, `email`, `lienhe_phone1`, `lienhe_name1`, `lienhe_email1`, `lienhe_phone2`, `lienhe_name2`,
                    `lienhe_email2`, `lienhe_phone3`, `lienhe_name3`, `lienhe_email3`, `lienhe_phone4`, `lienhe_name4`, `lienhe_email4`, `lienhe_phone5`, `lienhe_name5`, `lienhe_email5`,
                    `nguoiphutrach`, `mota`, `diachi`, `nhomkhachhang`, `nguonkhachhang`, `nguoitao`, `timestamp`)
                     VALUES ('$name', '$tinhtrang', '$phone', '$email', 0$phone1, '$name1', '$email1', 0$phone2, '$name2', '$email2', 0$phone3, '$name3', '$email3', 0$phone4, '$name4', '$email4', 0$phone5, '$name5', '$email5', 
                    '$nguoiphutrach', '$note', '$address', '$nhomkhachhang', '$nguonkhachhang', '$nguoitao', NOW())";
            if($result = mysqli_query($connection, $sql)){
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