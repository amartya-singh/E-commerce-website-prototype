<!DOCTYPE html>
<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is form to update password
-->
<?php
require "includes/common.php";
?>

<html>
    <head>
        <title>Settings</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">        
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css_of_Home.css">
    </head>
    <body>
        
<?php
include "includes/header.php";
?>

            <div class="container" style="margin-top: 100px; margin-bottom: 100px;">      
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                        <h1>Change Password</h1>
                        <form method="POST" action="setting_script.php">
                            <?php
                                if(isset($_GET['msg']))
                                    {
                                    echo $_GET['msg'];                                            
                                    }
                                    unset($msg);
                                ?>
                            <div class="form-group">
                                <input type="oldpassword" class='form-control' name='oldpassword' placeholder="ENTER YOUR OLD PASSWORD">
                                <?php
                                if(isset($_GET['oldpassword_error']))
                                    {
                                    echo $_GET['oldpassword_error'];                                            
                                    }
                                    unset($oldpassword_error);
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="newpassword1" class='form-control' name='newpassword1' placeholder="ENTER YOUR NEW PASSWORD" pattern="[a-zA-z!@#$%^&*-=?=0-9]{8,}$" title="Password must be 8 character long">  
                                <?php
                                if(isset($_GET['password1_error']))
                                    {
                                    echo $_GET['password1_error'];                                            
                                    }
                                    unset($password1_error);
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="newpassword2" class='form-control' name='newpassword2' placeholder="ENTER NEW PASSWORD AGAIN"> 
                                <?php
                                if(isset($_GET['$password2_error']))
                                    {
                                    echo $_GET['$password2_error'];                                            
                                    }
                                    unset($password2_error);
                                ?>
                            </div>                      
                            <input type="submit" name="submit" value="CHANGE" class="btn btn-primary">
                        </form>
                </div>
            </div>
        </div>                                                              

<?php
include "includes/footer.php";
?>
    </body>
</html>
