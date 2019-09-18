<?php
    require '../include/common.php';
    
    if(!isset($_SESSION['email'])){
        header('location: ../index.php');
    }
    
    $email_id = $_SESSION['email'];
    $old_pass = md5($_POST['old-password']);
    $new_pass = $_POST['new-password'];
    $re_new_pass = $_POST['re-new-password'];
    
    $select_query = "SELECT password FROM users WHERE email='$email_id'";
    $select_query_result = mysqli_query($link, $select_query) or die($select_query_result);
    $retrieved_pass = mysqli_fetch_array($select_query_result);
    
    if($retrieved_pass['password'] == $old_pass){
        if($new_pass == $re_new_pass){
            if(strlen($new_pass) >= 6){
                $new_pass = md5($_POST['new-password']);
                $re_new_pass = md5($_POST['re-new-password']);
                $update_query = "UPDATE users SET password='$new_pass' WHERE email='$email_id'";
                $update_query_result = mysqli_query($link, $update_query) or die($update_query_result);
                header('location: ../settings.php?msg=Password successfully changed');
            }else{
                header('location: ../settings.php?msg=Password should be at least six characters long.');
            }
        }else{
            header('location: ../settings.php?msg=New password ond old password do not match.');
        }
    }else{
        header('location: ../settings.php?msg=Old password entered is incorrect.');
    }
?>