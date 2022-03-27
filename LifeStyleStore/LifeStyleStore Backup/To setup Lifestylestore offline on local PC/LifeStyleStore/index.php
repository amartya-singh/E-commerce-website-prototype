<!DOCTYPE html>
<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is home page
-->
<?php
require"includes/common.php";
if(isset($_SESSION['email']))
{
    header('location: products.php');
}
?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">        
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css_of_Home.css">
    </head>

    <body>
        
<?php
include "includes/header.php";
?>
 
            <div class="container-fluid">                                      
                <div id="banner_image">
                    <div class="container">
                        <div id="banner_content">
                            <div class="btn btn-danger btn-lg active">
                                <a href="Login.php" style="color: white;">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                                            
            
 <?php
include "includes/footer.php";
?>
    </body>
</html>
