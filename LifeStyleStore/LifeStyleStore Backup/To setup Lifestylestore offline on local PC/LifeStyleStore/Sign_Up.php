<!DOCTYPE html>
<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is Sign Up Page

-->


<?php
require "includes/common.php";
if(isset($_SESSION['email']))
{
    header('location: products.php');
}
?>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">        
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css_of_Home.css">
    </head>
    <body>
        
<?php
include "includes/header.php";
?>

        <div class="container" style="margin-top: 100px;">   
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                        <h1>Sign Up</h1>
                        <form method="POST" action="signup_script.php">
                            <div class="form-group">
                                <?php
                                if(isset($_GET['duplicate_error']))
                                    {
                                    echo $_GET['duplicate_error'];                                            
                                    }
                                    unset($duplicate_error);
                                ?>
                                <input type="name" class='form-control' name='name' placeholder="Name" required="true" pattern="[A-Za-z ']+" title="Only alphabets,space & ' are allowed">     
                                <?php
                                if(isset($_GET['name_error']))
                                    {
                                    echo $_GET['name_error'];                                            
                                    }
                                    unset($name_error);
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="email" class='form-control' name='email' placeholder="E-mail" required="true" pattern="[a-z0-9._%+#$-]+@[a-z0-9._-]+\.[a-z]{2,3}+" title="Please enter in correct format i.e someone@gmail.com">                                
                                <?php
                                if(isset($_GET['email_error']))
                                    {
                                    echo $_GET['email_error'];                                            
                                    }
                                    unset($email_error);
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class='form-control' name='password' placeholder="password" required="true" pattern="[a-zA-z!@#$%^&*-=?=0-9]{8,}$" title="Password must be 8 character long">
                                <?php
                                if(isset($_GET['password_error']))
                                    {
                                    echo $_GET['password_error'];                                            
                                    }
                                    unset($password_error);
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="number" class='form-control' name='contact' placeholder="contact_no" required="true" pattern="[+]+[0-9]{2,3}+[0-9]{3,12}" title="Please provide country code for ex: +91XXXXXXXXX">
                                <?php
                                if(isset($_GET['contact_error']))
                                    {
                                    echo $_GET['contact_error'];                                            
                                    }
                                    unset($contact_error);
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="city" class='form-control' name='city' placeholder="city" required="true">                                
                            </div>
                            <div class="form-group">
                                <input type="address" class='form-control' name='address' placeholder="address" required="true">                                
                            </div>
                            <input type="submit" name="submit" value="SIGN UP" class="btn btn-primary">
                        </form>
                        <a href="Login.php">
                                     <br>Already have a account? Login now
                        </a>
                </div>
            </div>
        </div>                                                           
        
<?php
include "includes/footer.php";
?>
    </body>
</html>
