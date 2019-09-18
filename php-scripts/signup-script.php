<?php

    require '../include/common.php';
    
    $name = mysqli_real_escape_string($link,$_POST['name']);
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $pattern_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(preg_match($pattern_email, $email)){
        header('location: ../signup.php?email_error=Enter correct email');
        die();
    }
    
    $pass = $_POST['password'];
    if(strlen($pass) < 6){
        header('location: ../signup.php?password_error=Password should be atleast six characters long');
        die();
    }
    
    $select_query = "SELECT email FROM users WHERE email='$email'";
    $select_query_result = mysqli_query($link, $select_query);
    $row = mysqli_fetch_array($select_query_result);
    if(mysqli_num_rows($select_query_result)>0){
        header('location: ../signup.php?user_error=Email already registered');
        die();
    }
    
    $password = md5($_POST['password']);
    $contact = mysqli_real_escape_string($link,$_POST['contact']);
    $city = mysqli_real_escape_string($link,$_POST['city']);
    $address = mysqli_real_escape_string($link,$_POST['address']);
    
    $insert_query = "INSERT INTO users (name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')"
            or die($insert_query);
    
    $query_submit = mysqli_query($link, $insert_query)
            or die(mysqli_error($link));
    
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($link);
    header('location: ../index.php');

?>
