<?php
    if(isset($_POST['submit'])){
        echo 'alo';
        $search = $_POST['search-input'];
        header("Location: ../admin/index.php?search=".$search);
    }

?>