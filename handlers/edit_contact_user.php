<?php 
    include_once 'database_connection.php';
    if (isset($_POST['submit'])) {
        $customer_id = $_POST['cus_id'];
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
            $sql = "update customer set name = '$name', dienthoai='$phone', email = '$email', diachi='$address', mota='$note', tinhtrang='$tinhtrang', nhomkhachhang='$nhomkhachhang', nguonkhachhang='$nguonkhachhang', nguoiphutrach = '$nguoiphutrach' where id ='$customer_id'";
            if($result = mysqli_query($connection, $sql)){
                $output = 'ok';
            }else{
                $output = 'error';
            }
        }
    }else{
        //Error message
        $output = "error";
    }
    echo $output;
?>