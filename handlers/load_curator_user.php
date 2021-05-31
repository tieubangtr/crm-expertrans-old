<?php
    include_once 'database_connection.php';
    $output = '';
    if(isset($_POST['value'])){
        $id = $_POST['id'];
        $value = $_POST['value'];
        $sql1 = "select * from users where id = '$id'";
        $result1 = mysqli_query($connection, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $output = "<option value='".$row1['id']."'>".$row1['name']." - ".$row1['email']."</option>";
        $sql = "select * from users where email like '%".$value."%' and in_charge_of = '$id' order by id";
        $result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $output .= "<option value='".$row['id']."'>".$row['name']." - ".$row['email']."</option>";
        }
    }
    echo $output;
?>