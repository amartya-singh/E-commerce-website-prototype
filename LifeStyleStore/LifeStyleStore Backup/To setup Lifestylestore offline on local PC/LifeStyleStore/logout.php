<!DOCTYPE html>
<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is successfully logout Page
-->

<?php
require "includes/common.php";
session_destroy();
?>

<html>
    <head>
        <title>Logged out</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">        
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css_of_Home.css">
    </head>
    <body>
        
<?php
include "includes/header.php";
?>

        <div class="container col-xs-6 col-xs-offset-3" style="margin-top: 150px; margin-bottom: 150px;">   
        <div class="panel panel-primary">
            <div class="panel-heading">
                Logged Out Successfully
            </div>
            <div class="panel-body">
                You have been logged out.
            </div>
            <div class="panel-footer">
                <center>
                    <a href="Login.php">
                    <div class="btn btn-primary">           
                       Login again 
                    </div>
                </a>
                    <a href="index.php">
                    <div class="btn btn-primary">            
                       Return to Home Page 
                    </div>
                </a>
                </center>
            </div>
        </div>
        </div>                                        
        
    </body>
</html>
