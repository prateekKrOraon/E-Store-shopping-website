<?php
       
    include '../include/common.php';
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $status = 'Added to cart';
    
    $insert_query = "INSERT INTO  users_products (user_id,product_id,status) VALUES ('$user_id','$item_id','$status')";
    $insert_query_result = mysqli_query($link, $insert_query) or die($insert_query_result);
    
    header('location: ../index.php');

?>
