<?php
include ('admin/dist/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home-BuyStyle</title>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="index.js"></script>
    <!-- <link rel="stylesheet" media="screen and (max-width: 1220px)" href="css/phone.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
</head>


<body>
    
    <nav id="navbar">
        <div id="logo">
            <a href="index.php"><img src="./img/logo.png" alt="Online Shopping Store" /></a>
        </div>
        <div>
            <ul>
                <!-- <li class="item"><a href="#">About Us</a></li> -->
                <li class="item"><a href="#services">Services</a></li>
                <li class="item"><a href="#client-section">Our Clients</a></li>
                <li class="item"><a href="#contact">Contact Us</a></li>
                <li class="item"><a href="pages/cart.php">Cart</a></li>
            </ul>
        </div>
        
    </nav>
    <section id="home">
        <h1 class="h-welcome">Welcome to Our Online Store</h1>
        <p class="h-para">
            BUY STYLE has a collection that invites you into design wear. Celebrate the visions that art inspires in Muzlin.  We have array of summer tints and relaxing pattern incorporated in each article speaks of the days filled with fun along with small moments of delight. It presents you with the beautiful styles for this summer and Eid season and also browse through our ready-to-wear collection for getting your wardrobe essentials at affordable prices
        </p>
        <a href="#services"><button class="h-btn">Order Now</button> </a>
    </section>

    <section class="services-container">
        <h1 class="h-services">Our Services</h1>
        <div id="services">
            <div class="box">
                <a href="pages/men.php" ><img src="img/menclothes.jpg" alt="men" />
                <h2 class="h-secondary center">Men Clothing</h2> </a>
                <!-- <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque distinctio laborum id cumque quas, vitae assumenda maxime porro asperiores. Sapiente nisi magnam ullam facilis repellendus eius amet voluptates neque rem omnis. Unde, aut illo!</p> -->
            </div>
            <div class="box">
                <a href="pages/women.php" ><img src="img/women clothes.jpg " alt="women" />
                <h2 class="h-secondary center">Women Clothing</h2> </a>
                <!-- <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque distinctio laborum id cumque quas, vitae assumenda maxime porro asperiores. Sapiente nisi magnam ullam facilis repellendus eius amet voluptates neque rem omnis. Unde, aut illo!</p> -->
            </div>
        </div>
    </section>

    <section id="client-section">
         <h1 class="client-heading">Our Clients</h1>
         <table class="clients">
             <tr>
                 <td><img src="./img/customers3.png" alt="1" style="width:100%;"></td>
                 <td><img src="./img/customers.png" alt="2" style="width:100%;"></td>
                 <td><img src="./img/customer5.png" alt="3" style="width:100%;"></td>
                 <td><img src="./img/customers2.png" alt="4" style="width:100%;"></td>
             </tr>
         </table>
    </section>

    <section id="contact" style="  background-image:url('img/contact bg.jpg');background-repeat: no-repeat;background-size: 100%;">
        <h1 class="contact-heading">Contact Us</h1>
        <div id="contact-box">
        <form id="contactForm" method="POST" name="sentMessage" novalidate="novalidate" action="#contactus">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" name="cusname" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" name="cusemail" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" name="cusphone" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" name="cusmsg" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <input class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" name="submit" value="Send Message">
                    </div>
                </form>
            </div>
        </section>
        <?php 
            if (isset($_POST['submit'])) {
            $name = $_POST['cusname'];
            $email = $_POST['cusemail'];
            $number = $_POST['cusphone'];
            $message = $_POST['cusmsg'];
            $qry = "insert into message values (null, '$name', '$email', '$number', '$message')";
            if ($result = $mycon -> query($qry)) {
                echo '<div style="text-align:center" class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Message Sent!</strong>   
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }
            else{

                echo '<div style="text-align:center" class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Message Not Send!</strong>   
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';

            }
            }
            ?>
        
    <footer>
        <div class="text-center">
            Copyright &copy; www.buystyle.com All rights reserved!
        </div>
    </footer>
</body>

</html>