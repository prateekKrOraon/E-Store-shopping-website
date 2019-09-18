<?php

    require '../include/common.php';
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $select_query = "SELECT id,email FROM users WHERE email='$email' AND password='$password'";
    $select_query_result = mysqli_query($link, $select_query);
    
    if(mysqli_num_rows($select_query_result)==0){
        header('location:../login.php?error=Email or password is incorrect');
        die();
    }

    $row = mysqli_fetch_array($select_query_result);
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $row['id'];
    session_start();
    header('location: ../index.php');
?>
