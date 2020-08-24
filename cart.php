<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="icon" href="favicon.ico">
    </head>
    <body style="
  font-family: sans-serif;
   background: url(img/bg.jpg);
  background-size: cover;">
        <div class="container-fluid" id="cont">
            <?php include 'includes/header.php'; ?>
            
            <div class="container-fluid" id="cont">
                <center>
                <div style="background-image: radial-gradient(circle at 61% 52%, hsla(291,0%,0%,0.1) 0%, hsla(291,0%,0%,0.1) 33%,transparent 33%, transparent 75%,transparent 75%, transparent 100%),radial-gradient(circle at 5% 13%, hsla(291,0%,0%,0.1) 0%, hsla(291,0%,0%,0.1) 10%,transparent 10%, transparent 33%,transparent 33%, transparent 100%),radial-gradient(circle at 5% 80%, hsla(291,0%,0%,0.1) 0%, hsla(291,0%,0%,0.1) 54%,transparent 54%, transparent 89%,transparent 89%, transparent 100%),radial-gradient(circle at 77% 51%, hsla(291,0%,0%,0.1) 0%, hsla(291,0%,0%,0.1) 38%,transparent 38%, transparent 68%,transparent 68%, transparent 100%),radial-gradient(circle at 95% 94%, hsla(291,0%,0%,0.1) 0%, hsla(291,0%,0%,0.1) 56%,transparent 56%, transparent 59%,transparent 59%, transparent 100%),linear-gradient(135deg, rgb(131, 104, 246),rgb(2, 148, 192));" class="jumbotron jumbotron-fluid" id="jump">
            <div class="row decor_bg">
                <div class=" col-md-3">
                    <img src="img/image1.png" alt="cart" width="250" height="250" style="border-radius: 50%">
                    <br>
                    <br>
                    <a href="products.php" class="btn bg-success" style="margin-left: 25px">Add more Items to your Cart</a>
                </div>
                <div class="col-md-6  col-md-offset-3">
                    <center><h2 style="color: white" id="fonts">Shopping Cart</h2></center><br>
                    <center>
                    <table  class="table ">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $id ="";
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th style="color: #E7DFD5">Item No.</th>
                                    <th style="color: #E7DFD5">Item Name</th>
                                    <th style="color: #E7DFD5">Price</th>
                                    <th style="color: #E7DFD5">Edit/Confirm</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td id='ll'>" . "#" . $row["id"] . "</td><td id='l'>" . $row["Name"] . "</td><td id='lll'>Rs " . $row["Price"] . "</td><td id='llll'><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove <span class='glyphicon glyphicon-trash'></span></a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td id='ss'></td><td id='s'>Total</td><td id='ssss'>Rs " . $sum . "</td><td id='sss'><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                        
                            <?php
                        } else {
                            echo "<h3>Your Cart is empty!🙁</h3>";
                        }
                        ?>
                       
                    </table>
                    </center>
                    </center>
</div>
                </div>
            </div>
            </div>
        </div>
            </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>