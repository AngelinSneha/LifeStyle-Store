<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link rel="icon" href="favicon.ico">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="
  font-family: sans-serif;
  background: url(img/bg.jpg) no-repeat;
  background-size: cover;">
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4 style="color: white">Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <?php
                        if (isset($error)) {
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>
        <?php include("includes/footer.php"); ?>
    </body>
</html>