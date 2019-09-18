<?php

    require 'include/common.php';
    
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    echo $item_id."<br>";
    echo $user_id;
    
    $delete_query = "DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$item_id'";
    $delete_query_result = mysqli_query($link, $delete_query) or die($delete_query_result);
    
    header('location: cart.php');

?>
