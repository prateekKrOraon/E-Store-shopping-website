
<?php include 'include/common.php'?>
<?php 
    if(!isset($_SESSION['email'])){
        header('location: login.php?error=Login to view your cart');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        
        <title>Lifestyle Store - Cart</title>
        
    </head>
    <body>
        
        <?php include 'include/header.php'; ?>
        
        <div class="container" id="table-cart" style="margin-top: 60px;">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <p>Your Cart</p>
                    </div>
                    <div class="panel-body">
                        <?php 
                            function no_item_in_cart(){
                                echo "<div><p style='color:#f00'>Your cart is empty</p></div>";
                            }
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Item Number</th>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                
                                    <?php
                                        $user_id = $_SESSION['id'];
                                    
                                        $select_query = "SELECT i.id,i.name,i.price FROM users_products ui INNER JOIN products i ON i.id=ui.product_id WHERE user_id='$user_id' AND status='Added to cart'";
                                        $select_query_result = mysqli_query($link, $select_query) or die($select_query_result);
                                        if(mysqli_num_rows($select_query_result)==0){
                                            no_item_in_cart();
                                        }else{
                                            $row_number = mysqli_num_rows($select_query_result);
                                            $row = mysqli_fetch_array($select_query_result);
                                            $counter = 0;
                                            $total_price = 0;
                                            while($counter < $row_number) {
                                    ?>
                                                <tr>
                                                    <td><?php echo $counter+1   ; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td>Rs. <?php echo $row['price']; ?></td>
                                                    <td><?php echo '<a href="php-scripts/remove-from-cart.php?id='.$row['id'].'" class="btn btn-danger remove_item_link">Remove Item</a>' ?></td>
                                                </tr>

                                    <?php
                                                $total_price += $row['price'];
                                                $row = mysqli_fetch_array($select_query_result);
                                                $counter++;
                                            }
                                    ?>        
                                            <tr>
                                                <td></td>
                                                <td>Total</td>
                                                <td>Rs. <?php if(mysqli_num_rows($select_query_result)){echo $total_price;}else{echo "-";} ?></td>
                                                <td><a href="success.php?query=<?php echo $row_number ?>" class="btn btn-primary">Confirm Order</a></td>
                                            </tr>
                                            
                                    <?php    }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'include/footer.php'; ?>
        
    </body>
</html>
