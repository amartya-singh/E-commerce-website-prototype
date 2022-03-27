<!DOCTYPE html>
<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is successfully order placed page
-->
<?php
require "includes/common.php";                    
if(!isset($_SESSION['email']))                   
{
    header("location: index.php");
}
$user_id = $_SESSION['id'];                    
$item_ids_string = $_GET['itemsid'];           
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to Cart'"; //here we are changing the status of odered item from added to cart to confirmed
mysqli_query($con, $query)
?>
<html>
    <head>
        <title>Order Successful</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">       
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css_of_Home.css">
    </head>
    <body>
        <?php
        include "includes/header.php";                    
        ?>
         <div class="container col-xs-6 col-xs-offset-3" style="margin-top: 100px; margin-bottom: 50px;">   
        <div class="panel panel-primary">
            <div class="panel-heading">
                Order Placed SUCCESSFULLY !
            </div>
            <div class="panel-body">
                THANKS for shopping with us.
            </div>
            <div class="panel-footer">
                <center>
                <a href="products.php">
                    <div class="btn btn-primary">           
                       Continue Shopping
                    </div>
                </a>
                <a href="logout.php">
                    <div class="btn btn-primary">           
                       Logout
                    </div>
                </a>
                </center>
            </div>
        </div>
        </div>                                               
    </body>
</html>
