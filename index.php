<?php 
    include 'include/common.php';
    $select_query = "SELECT id,name,price,description,image FROM products";
    $select_query_result = mysqli_query($link, $select_query);
    $row = mysqli_fetch_array($select_query_result);
    $row_no = mysqli_num_rows($select_query_result);
    $counter = 0;
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
    </head>
    <body class="container-fluid">
        
        <?php include 'include/header.php';
                include 'check-if-added.php';?>

        <div class="row" style="margin-top: 60px">

            <?php
                while($counter < $row_no){ ?>
            
                    <div class="container col-xs-4">
                        
                        <div class="panel">
                            
                            <div class="panel-heading">
                                
                                <h5><?php echo $row['name'] ?></h5>
                            
                            </div>
            
                            <div class="panel-body">
                                
                                <center><img src="<?php echo $row['image'] ?>" alt="Model 1" class="products"></center>
                                <p><?php echo $row['description'] ?></p>
                                <p>Rs. <?php echo $row['price'] ?></p>
                                
                                <?php if(!isset($_SESSION['email'])) { ?>
                                
                                    <a href="" data-toggle="modal" data-target="#login-modal" class="btn btn-primary btn-block">Buy Now</a>
                                
                                <?php }else{ 
                                    if(check_if_added_to_cart($row['id'])) { ?>
                                        
                                    <a href="" class="btn btn-block btn-primary" disabled>Added to Cart</a>
                                        
                                    <?php }else {?>
                                        
                                    <a href="php-scripts/add-to-cart.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-block">Add to cart</a>
                                    
                                <?php }} ?>
                            </div>
                        </div>
                    </div>

            <?php 
                    $row = mysqli_fetch_array($select_query_result);
                    $counter++;
            } ?>

        </div>
        
        
        
    </body>
</html>
