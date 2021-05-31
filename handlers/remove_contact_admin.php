<?php
    include_once "database_connection.php";
    $output = '';
    if(isset($_POST['remove_id'])){
        $id = substr($_POST['remove_id'], 7);
        $sql = "delete from customer where id = '".$id."';";
        if($result = mysqli_query($connection, $sql)){
            $output = "ok";                
        }
    }
    echo $output;
?>