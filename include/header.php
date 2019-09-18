<nav class="nav navbar-default navbar-fixed-top">
    <div class="container">
        <div class="nabar-header">
            <?php if(isset($_SESSION['email'])) { ?>
                <a href="./index.php" class="navbar-brand">E-Store</a>
            <?php }else{ ?>
                <a href="./index.php" class="navbar-brand">E-Store</a>
            <?php } ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-bar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['email'])) { ?>
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"> Cart</span></a>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="./php-scripts/logout-script.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                <?php }else{ ?> 
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign-Up</a></li>
                    <li><a href="" data-toggle="modal" data-target="#login-modal" class="btn"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about.php>"><span></span> About Us</a></li>
                    <li><a href="contact.php"><span></span> Contact Us</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<?php include './login.php'; ?>   


