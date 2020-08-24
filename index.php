<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        
        <title>Welcome | Life Style Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   
    <link href="style.css" rel="stylesheet">
        <link rel="icon" href="favicon.ico">
 
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
        
        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1 class="are">We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->
          
            <!--Item categories listing-->
            <div class="container">
                
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
            
            <!-- testimonial-->
            <div class="container" style="margin-top: 50px; margin-bottom: 50px; ">
                <center>
                <img src="img/guy2.png" class="mx-auto d-block rounded-circle">
                </center>
        <div class="text-center">
            <h6 style="color: #000; font-weight: 500; font-family: 'Times New Roman', Times, serif; margin: 30px;font-size: 2rem"> MR. CHARLES BASS</h6>
            <p style="color: #393e46; margin-left: 70px; margin-right: 70px; font-size: 1.75rem">"Hello - My first order arrived today in perfect condition.  From the time I sent a question about the item to making the purchase, to the shipping and now the delivery, your company, LifeStyle Store, has stayed in touch.  Such great service.  I look forward to shopping on your site in the future and would highly recommend it."</p>                
        </div>
    </div>
            <!--end of testimonial-->
            
        </div>
        <!-- brands-->
	<div class="slider mm">
			<div class="inside1">
				
				</div>
			<div class="inside2">
				
			</div>
			<div class="inside3">
				
			</div>
			<div class="inside4">
				
			</div>
			<div class="inside5">
				
			</div>
			<div class="inside6">
				
			</div>
			<div class="inside7">
				
			</div>

		</div>
<!-- end of brands-->
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
    </body> 
</html>
