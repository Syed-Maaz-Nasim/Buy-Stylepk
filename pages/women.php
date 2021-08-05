<?php
include ('../admin/dist/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Women-BuyStyle</title>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/styles.css"/>
    <script src="index.js"></script>
    <!-- <link rel="stylesheet" media="screen and (max-width: 1220px)" href="css/phone.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
</head>


<body>
    
    <nav id="navbar">
        <div id="logo">
            <a href="../index.php"><img src="../img/logo.png" alt="Online Shopping Store" /></a>
        </div>
        <div>
            <ul>
                <!-- <li class="item"><a href="#">About Us</a></li> -->
                <li class="item"><a href="../#services">Services</a></li>
                <li class="item"><a href="../#client-section">Our Clients</a></li>
                <li class="item"><a href="../#contact">Contact Us</a></li>
                <li class="item"><a href="./cart.php">Cart</a></li>
            </ul>
        </div>
        
    </nav>
        <!-- Nav Bar Ends -->
        <section class="page-section" id="gallery">
               <div class="container"><!--Container start -->
       <h1 style="text-align:center; color:pink;">Women</h1>
       <h4 style="text-align:center; color:orange;">New Designs women clothes are available here!!</h4>
        <div class="row">
            <?php
            // session_start();
            // $_SESSION = array();
            // die();
                  $query="SELECT * FROM wgallery";
                  $data=mysqli_query($mycon,$query);
                  $total=mysqli_num_rows($data);
                    
                  if($total!=0) {
                    while ($rows=mysqli_fetch_assoc($data)) {
                        
                      ?>
                    <div class="col-lg-4 mt-20pk"><br>
                    <div class="card shadow bg-white rounded border-info">
                    <div class="card-body cd " style="height: 500px;">
                        <img src="../admin/dist/<?php echo $rows['product_image'];?> " width="" height="200;" class="card-img-top" alt="Products Image"/>
                        <h4 class="card-title text-center"><?php echo "<br>".$rows['product_title'];?></h4>
                        <p class="car-text text-center"><?php echo $rows['product_discription'];?></p>
                        <h4 class="card-title text-center"><?php echo "<br> PKR ".$rows['product_price'];?></h4>
                        <form action="addToCart1w.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $rows["product_id"];?>">
                            <button type="submit" name="order" class="btn btn-info btn-block" height="" width="50px">Add To Cart</button>
                        </form>
                    </div>
                    </div>
                    </div>
                    <?php
                    }
                  }
                  else{
                       echo "";
                  }
               ?>
        


        </div><!--row end-->
    </div><!--container-end-->
        </section>

        <!-- checkout -->
        
        <footer>
            <div class="text-center">
                Copyright &copy; www.buystyle.com All rights reserved!
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="../assets/mail/jqBootstrapValidation.js"></script>
        <script src="../assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>