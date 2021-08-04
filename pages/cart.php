<?php
session_start();
include('../admin/dist/connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home-BuyStyle</title>
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
                <li class="item"><a href="cart.php">Cart</a></li>
            </ul>
        </div>
        
    </nav>
        <!-- Masthead-->
        <!-- <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our BuyStyle</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You! Let's Start Shoping With Us...!</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#products">Tell Me More</a>
            </div>
        </header> -->
        <!-- products-->

        <section id="cart_items">
            <div class="container">
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
                                <td class="description"></td>
                                <td class="price">Price</td>
                                <td class="quantity">Quantity</td>
                                <td class="total">Total</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($_SESSION as $value) { ?>
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img width="75px" height="75px" src="../admin/dist/<?php echo $value["image"];?>" alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href=""><?php echo $value["title"];?></a></h4>
                                    <p>Web ID: <?php echo $value["id"];?></p>
                                </td>
                                <td class="cart_price">
                                    <p>PKR <?php echo $value["price"];?></p>
                                </td>
                                <td class="cart_quantity">

                                <!-- <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="" > + </a>
                                        <input class="cart_quantity_input" type="number" min="0" name="quantity" value="1" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href=""> - </a>
                                    </div> -->
                                    <div id="myDiv">
                                <div class="quantity-container">
                                <!-- <span>1</span>  -->
                                <!-- <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>  -->
                                <input type="number" id="quantity" name="quantity" value="1" />
                                <!-- <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div> -->
                                </div>
                                    <!-- <div class="cart_quantity_button">
                                         <a class="cart_quantity_up" href=""> + </a>
                                        <select class="cart_quantity_input"><?php echo $value["quantity"];?> 
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <a class="cart_quantity_down" href=""> - </a>
                                    </div> -->
                                    

                                <div id="product-price">

                            </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">PKR <?php echo $value["price"];?></p>
                                </td>
                                <td class="cart_delete">
                                    <form action="deleteFromCart.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $value["id"];?>">
                                        <button type="submit" class="btn btn-warning"> x </button>
                                        <!-- <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a> -->
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                    <!-- <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span id="total">Total: <?php echo $total_price; ?></span> -->
                            <!-- PKR <span id="prdPr<?php echo $value["id"]; ?>"><?php echo $value["price"]; ?></span> -->
                            
                        </div><br>
                        <!-- <input type="text" class="form-control" name="total">      -->
                    </div><br>
                    
                </div>
            </div>
        </section> <!--/#cart_items-->
        
        <!-- checkout -->
        

        
        </div><section id="do_action">
            <div class="container">
                <div class="heading">
                    <h3>More Details</h3>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">

                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-user fa-lg"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Your Name*" name="name" maxlength="30" required>
                    </div><br>

                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-phone fa-lg fa-rotate-90"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Contact*" name="contact" pattern="[0-9]{11}" maxlength="30" required>
                    </div><br>

                        <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-envelope fa-lg"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Your Email*" name="email" maxlength="30" required>
                    </div><br>

                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-home fa-lg"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Your Address*" name="address" maxlength="30" required>
                    </div><br>

                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-id-card fa-lg"></span></span>
                        </div>
                        <select type="text" class="form-control" placeholder="Your City*" name="city" required>
                            <option>Karachi</option>
                            <option>Islamabad</option>
                            <option>Quetta</option>
                            <option>Peshawar</option>
                            <option>KPK</option>
                            <option>Faislabad</option>
                            <option>Hyderabad</option>
                        </select>
                    </div><br>

                    
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fa fa-list-ul fa-lg"></span></span>
                        </div><br>
                        <textarea name="anymsg"  class="form-control" placeholder="Any Extra Details (max 300 characters)" rows="3" maxlength="300"></textarea>
                            <div class="input-group-prepend"><br>
                                <span class="input-group-text">0</span>
                            </div>      
                    </div><br>

                    <input type="text" class="form-control" value="200Pkr (Cash on delivery)" name="deliverycharges" maxlength="30" readonly="200Pkr (Cash on delivery)"><br>
                    
                    

                    <div class="col-1"><br>
                        <button type="submit" style="padding:5px 30px 5px 30px; border: solid gray 1px;" name="orderconfirm"><b>Order Now</b></button>
                    </div>
                </form>
            </div>
        </section>
        <div class="order">
        <?php
        if(isset($_POST['orderconfirm'])){
            foreach($_SESSION as $value) {
                $qry = "INSERT INTO orders (`product_id`, `quantity`) INTO (".$value['id'].", '');";

            }
        }
            ?>

<?php 
            if (isset($_POST['submit'])) {
            $image = $rows["product_image"];
            $title = $rows["product_title"];
            $desc = $rows["product_discription"];
            $price = $rows["product_price"];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['phone'];
            $message = $_POST['msg'];
            $qry = "insert into menorder values (null, '$image', '$title' , '$desc' , '$price' , '$name', '$email', '$number', '$message')";
            if ($result = $mycon -> query($qry)) {
                echo '<div style="text-align:center" class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Order Placed!</strong>   
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }
            else{

                echo '<div style="text-align:center" class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Order Placed!</strong>   
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';

            }
            }
            ?>
        <!-- Footer-->
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
        <!-- <script src="../assets/mail/contact_me.js"></script> -->
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>
