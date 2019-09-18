<?php

    include '../include/common.php';
    
    if(isset($_SESSION['email'])){
        session_unset();
        session_destroy();
        header('location: ../index.php');
    }

?>
