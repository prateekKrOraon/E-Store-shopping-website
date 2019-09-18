<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Us - E-Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
    </head>
    <body>
        <?php include 'include/header.php'; ?>
        
        <div class="container">
            <div>
                <div class="col-xs-10">
                    <h2>LIVE SUPPORT</h2><br>
                    <p>24 hours | 7 days a week | 365 days a year Technical Support</p><br>
                    <p>Lorer ipsum dolor</p>
                </div>
                <div class="col-xs-2">
                    <img src="image/customer-support-person.jpg" alt="customer-support-person">
                </div>
            </div>
            <div class="col-xs-8">
                <h2>CONTACT US</h2>
                <form method="post" action="customer-query-script.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group" id="message">
                        <label for="message">Message</label>
                        <input type="text" class="form-control" name="message">
                    </div>
                    <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
                </form>
            </div>
            <div class="col-xs-4">
                <h2>Company Information:</h2><br>
                <p>Address: Lorem Ipsum Dolor</p><br>
                <p>address line 2 Lorem ipsum dolor</p><br>
                <p>India</p><br>
                <p>Phone: +91-9931XXXXXX</p><br>
                <p>E-mail: customer-support@estore.com</p>
            </div>
        </div>
        
        <?php include 'include/footer.php'; ?>
    </body>
</html>
