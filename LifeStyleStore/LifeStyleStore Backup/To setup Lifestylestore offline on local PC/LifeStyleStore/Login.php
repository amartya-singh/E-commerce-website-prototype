<!DOCTYPE html>
<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is Login Page
-->

<?php
require "includes/common.php";
?>
<html>
    <head>
        <title>Login Page</title>
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
                         <div class="panel panel-primary">
                             <div class="panel-heading">
                                 Login
                             </div>
                             <div class="panel-body">
                                 <div class="text-warning">
                                     <p>Login to make purchase</p>
                                 </div>
                                 <form method="POST" action="login_submit.php">
                                 <div class="form-group">
                                     <label for="email">Enter your E-mail: </label>
                                     <input type="email" class='form-control' name='email'>
                                 </div>
                                 <div class="form-group">
                                     <label for="password">Enter your Password: </label>
                                     <input type="password" class='form-control' name='password'>
                                 </div>                                
                                     <input type="submit" name="submit" value="LOGIN" class="btn btn-primary">                                 
                                 </form>
                             </div>
                             <div class="panel-footer">
                                 <a href="Sign_Up.php">
                                     Don't have a account? Register now
                                 </a>
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
