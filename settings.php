<?php include 'include/common.php'?>
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        
        <title>Lifestyle Store - Settings</title>
        
    </head>
    <body>
        
        <?php include 'include/header.php'; ?>  
        
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    
                    <h2>Change Password</h2>
                    
                    <?php
                        if(isset($_GET['msg'])) { ?>
                    
                            <p style="color:#f00;"><?php echo $_GET['msg']; ?></p>
                            
                    <?php } ?>
                    
                    <form method="post" action="scripts/settings-script.php">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password" placeholder="Old Password">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" name="new-password" placeholder="New Password">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" name="re-new-password" placeholder="Re-type New Password">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="change" value="Change">Change</button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
        
        <?php include 'include/footer.php'; ?>
        
    </body>
</html>