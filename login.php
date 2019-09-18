<!DOCTYPE html>
<div class="modal fade" role="dialog" id="login-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Login</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body">
                <?php 
                    if (isset($_GET['error'])){
                        echo "<p style='color:#f00;'>".$_GET['error']."</p>";
                    }
                ?>
                <form method="post" action="php-scripts/login-script.php">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" data-toddle="modal" data-target="#login-modal">Login</button>
                </form>
            </div>
            
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>