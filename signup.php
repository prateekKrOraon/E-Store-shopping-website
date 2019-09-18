<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up - E-Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <?php include 'include/header.php'; ?>
        
        <div class="container signup-image" style="margin-top: 60px;">
            <div class="col-xs-8"></div>

            <div class="col-xs-4">
                <h2>SIGN UP</h2>
                    <?php 
                        if(isset($_GET['user_error'])){
                    ?>
                            <p class="form-error"><?php echo $_GET['user_error']; ?></p>
                    <?php   }   ?>
                <form method="post" action="php-scripts/signup-script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                        <?php 
                            if(isset($_GET['email_error'])) { ?>
                        <p class="form-error"><?php echo $_GET['email_error']; ?></p>
                        <?php   }   ?>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <?php 
                            if(isset($_GET['password_error'])) { ?>
                        <p class="form-error"><?php echo $_GET['password_error']; ?></p>
                        <?php   }   ?>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="contact" placeholder="Contact">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>

                </form>
            </div>
        </div>
        
        <?php include 'include/footer.php'; ?>
    </body>
</html>
