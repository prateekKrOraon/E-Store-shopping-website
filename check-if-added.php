<?php

    function check_if_added_to_cart($item_id){
        include 'include/common.php';
        $user_id = $_SESSION['id'];
        $select_query_check="SELECT * FROM users_products WHERE product_id='$item_id' AND user_id='$user_id' AND status='Added to cart'";
        $select_query_result_check = mysqli_query($link, $select_query_check) or die($select_query_result_check);
        
        if(mysqli_num_rows($select_query_result_check) >= 1){
            return 1;
        }else{
            return 0;
        }
        
    }

?>