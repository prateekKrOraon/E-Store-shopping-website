<?php

    $link = mysqli_connect("localhost", "root", "", "e_store");
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>
