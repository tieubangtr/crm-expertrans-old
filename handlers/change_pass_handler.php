<?php
    include_once "database_connection.php";
    $output = "";
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $new = $_POST['new'];
        $old = $_POST['old'];
        $rpt = $_POST['rpt'];

        $sql_get_pass = "select pass from users where id = '".$id."';";
        $result = mysqli_query($connection, $sql_get_pass);
        $row = mysqli_fetch_assoc($result);
        $pass = $row['pass'];

        if($new == $rpt){
            if(password_verify($old, $pass) == 1){
                $hashed_password = password_hash($new, PASSWORD_DEFAULT);
                $sql_update_new_pass = "UPDATE `users` SET `pass`= '".$hashed_password."' WHERE id = '".$id."'";
                if(mysqli_query($connection, $sql_update_new_pass)){
                    $output = "ok";
                }else{
                    echo mysqli_error($connection);
                    // echo "<script>
                    //     alert('Đã có lỗi xảy ra, hãy thử kiểm tra lại!');
                    //     document.location.href = '../login.php' ;
                    // </script>";
                }
            }else{
                $output = "wrongPass";
            }
        }else{
            $output =  "notMatch";            
        }
    }else{
        //Error message
        $output = "error";
    }
    echo $output;
?>