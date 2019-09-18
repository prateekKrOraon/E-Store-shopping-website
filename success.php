<?php include 'include/common.php'; ?>
<?php 
    if(!isset($_SESSION['email'])){
        header('location: index.php');
        die();
    }
?>
<?php
    $user_id = $_SESSION['id'];
    $row_no = $_GET['query'];
    $counter = 0;
    while($counter < $row_no){
        $update_query = "UPDATE users_products SET status='Confirmed' WHERE user_id='$user_id' AND status='Added to cart'";
        $update_query_result = mysqli_query($link, $update_query);
        $counter++;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Order Confirmed</title>
    </head>
    <body>
        
        <div class="col-xs-4 col-xs-offset-4" style="margin-top: 60px;">
            <center>
                <p>Thank you  for ordering from E-Store. The Order shall be delivered to you shortly</p>
            
                <hr class="col-xs-4 col-xs-offset-4">
            
                <p>Order some more electronic items from <a href="index.php">here.</a></p>
            </center>
        </div>
        
    </body>
</html>
