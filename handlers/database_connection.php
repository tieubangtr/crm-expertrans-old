<?php
    $serverName = "localhost";
    $databaseName = "cadlcoju_crm";
    $databaseUser = "cadlcoju_crm";
    $databasePass = "expertransei";

    $connection = mysqli_connect($serverName, $databaseUser, $databasePass, $databaseName);

    if(!$connection){
        echo "Failed to connect to MySQL: ". mysqli_connect_error();
        exit();
    }
?>