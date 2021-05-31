<?php
    include_once 'database_connection.php';
    $output = '';
    if(isset($_POST['value'])){
        $value = $_POST['value'];
        $sql = "select id, email, name from users where email like '%".$value."%' order by id";
        $result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $output .= "<option value='".$row['id']."'>".$row['email']." - ".$row['name']."</option>";
        }
    }
    echo $output;
?>