<!DOCTYPE html>
<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is product page
-->
<?php
require "includes/common.php";
?>

<html>
    <head>
        <title>products</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">        
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css_of_Home.css">
    </head>
    <body>
        
<?php
include "includes/header.php";
include "includes/Check-if-added.php";
?>    

        <div class="container">               
            <div class="jumbotron">
                <center>
                <h1>Welcome to our LifeStyle Store</h1>
                <p>
                    We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
                </p>
                </center>
            </div>                              
            


            <div class="container-fluid">
                <div class="row">                 
                    
                    <div class="col-sm-6 col-md-3"> 
                        <div class="thumbnail">
                            <a>
                                <img src="images/product_images/camera_images/cannon.jpeg" alt="cannon dslr" style="height: 200px;">
                            <div class="caption">
                                <h1>Cannon</h1>
                                <h3>DSLR</h3>
                                <p>Price: Rs.36000</p>
                            </div>
                            </a>
                            <center>                 
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(1))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>                                 
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a>
                            <img src="images/product_images/camera_images/nikon.jpg" alt="nikon dslr" style="height: 200px;">
                            <div class="caption">
                                <h1>Nikon</h1>
                                <h3>DSLR</h3>
                                <p>Price: Rs.45000</p>
                            </div>
                            </a>
                            <center>
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(2))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a>
                            <img src="images/product_images/camera_images/olympus.jpg" alt="olympus dslr" style="height: 200px;">
                            <div class="caption">
                                <h1>Olympus</h1>
                                <h3>DSLR</h3>
                                <p>Price: Rs.31000</p>
                            </div>
                            </a>
                            <center>
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(3))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a>
                                <img src="images/product_images/camera_images/sony.jpg" alt="sony dslr" style="height: 200px;">
                            <div class="caption">
                                <h1>Sony</h1>
                                <h3>DSLR</h3>
                                <p>Price: Rs.55000</p>
                            </div>
                            </a>
                            <center>
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(4))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>                           
                
                
                
               
                <div class="row">                 
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a>
                                <img src="images/product_images/watch_images/titan.jpg" alt="TITAN watch" style="height: 200px;">
                            <div class="caption">
                                <h1>TITAN</h1>
                                <h3>Model: UVB304X</h3>
                                <p>Price: Rs.3000</p>
                            </div>
                            </a>
                            <center>
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(5))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a>
                            <img src="images/product_images/watch_images/samsung.jpg" alt="samsung watch" style="height: 200px;">
                            <div class="caption">
                                <h1>SAMSUNG</h1>
                                <h3>Model: SOXRT5</h3>
                                <p>Price: Rs.42000</p>
                            </div>
                            </a>
                            <center>
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(6))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a>
                            <img src="images/product_images/watch_images/fossil.jpg" alt="fossil watch" style="height: 200px;">
                            <div class="caption">
                                <h1>FOSSIL</h1>
                                <h3>Model: FO567</h3>
                                <p>Price: Rs.5000</p>
                            </div>
                            </a>
                            <center>
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(7))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a>
                                <img src="images/product_images/watch_images/apple.jpg" alt="apple watch" style="height: 200px;">
                            <div class="caption">
                                <h1>APPLE</h1>
                                <h3>Model: AP3X21</h3>
                                <p>Price: Rs.25000</p>
                            </div>
                            </a>
                            <center>
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(8))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>                           
                
                
                
                
                
                <div class="row">                             
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a>
                                <img src="images/product_images/shirt_images/US polo assn.jpg" alt="US polo shirt" style="height: 200px;">
                            <div class="caption">
                                <h1>US Polo</h1>
                                <h3>Style: USP502RT</h3>
                                <p>Price: Rs.6000</p>
                            </div>
                            </a>
                            <center>
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(9))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a>
                            <img src="images/product_images/shirt_images/pantaloons.jpg" alt="pantaloons shirt" style="height: 200px;">
                            <div class="caption">
                                <h1>Pantaloons</h1>
                                <h3>Style: PS10X</h3>
                                <p>Price: Rs.5000</p>
                            </div>
                            </a>
                            <center>
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(10))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a>
                            <img src="images/product_images/shirt_images/blue buddha.jpg" alt="blue buddha shirt" style="height: 200px;">
                            <div class="caption">
                                <h1>Blue Buddha</h1>
                                <h3>Style: RL205</h3>
                                <p>Price: Rs.2500</p>
                            </div>
                            </a>
                            <center>
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(11))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a>
                                <img src="images/product_images/shirt_images/h&w.jpg" alt="h&w shirt" style="height: 200px;">
                            <div class="caption">
                                <h1>H & W</h1>
                                <h3>Style: 23409</h3>
                                <p>Price: Rs.1000</p>
                            </div>
                            </a>
                            <center>
                                <?php
                                if(!isset($_SESSION['email']))
                                {
                                    ?>
                                <p><a href="Login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                }
                                else
                                {
                                    if(check_if_added_to_cart(12))
                                    {
                                        echo '<a href="#" class="btn btn-block btn-success"disabled>Added to Cart</a>';
                                    }
                                    else
                                    {
                                        ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">
                                    Add to Cart
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>                                   
<?php
require "includes/footer.php";
?>
    </body>
</html>
