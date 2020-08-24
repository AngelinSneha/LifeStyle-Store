<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Life Style Store</title>
          <link rel="icon" href="favicon.ico">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="
  background: url(img/bg.jpg) ;
  background-size: cover;
  background-position: center;
    font-family: sans-serif;
     margin: 0;
   padding-top:100px;">
        <?php include 'includes/header.php'; ?>
        <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  
        <div id="content">
            <!--<div class="container-fluid decor_bg" id="login-panel">-->
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                      
                            <div class="login-box">
            <img src="img/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <p class="text-warning"><i>Login to make a purchase</i></p>
        <form action="login_submit.php" method="POST">
            <p>Username</p>
            <input type="email" name="e-mail" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="signUp.php">Do not have an Account?<br>Register</a>    
            </form>
        
        </div>
        
                            
                            
                            
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
