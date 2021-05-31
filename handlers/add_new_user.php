<?php
    include_once 'database_connection.php';
    include_once 'main_functions.php';
    $output = "";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = getRandomPass(6);
        $manager = $_POST['manager'];
        $sql_select = "select email from users where email='$email' ";

        mysqli_query($connection, $sql_select);

        $check = mysqli_affected_rows($connection);

        if($check > 0){//Neu da co ten dang nhap trong he thong
            $output = "existed";

        }else{//Neu chua co trong he thong thi tiep tuc dang ky
            if(empty($name) || empty($phone) || empty($email)){
                $output = "empty";
            }else{
                if(empty($manager)){
                    $output = "manager_empty";
                }else{
                    $sql_insert = "INSERT INTO `users`(`email`, `name`, `phone`, `in_charge_of`, `pass`, `last_login`) 
                                    VALUES (?, ?, ?, ?, ?, NOW())";
                    // $sql = "INSERT INTO `users`(`email`, `name`, `phone`, `in_charge_of`, `pass`, `last_login`) 
                    //                  VALUES ($email, $name, $phone, $manager, $pass, NOW())";
                    //Insert to the database
                    if($stmt = mysqli_prepare($connection, $sql_insert)){//Neu thanh cong thi redirect ve trang login
                        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sssss", $email, $name, $phone, $manager, $hashed_password);
                        mysqli_stmt_execute($stmt);
                        $output = $pass;

                    }else{//Khong thanh cong thi hien thong bao khong thanh cong
                        $output = "error";
                    }
                }
            }
        }
    }
    echo $output;
?>