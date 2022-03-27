<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This page validate user login details
-->
<?php
require "includes/common.php";
$email = mysqli_real_escape_string($con, $_POST['email'] );
$password = md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
if($email!="" && $password!="")
{
$select_query = "SELECT id, email FROM users WHERE email='$email' AND password='$password'";
$select_query_result = mysqli_query ($con, $select_query);
$row = mysqli_fetch_array($select_query_result);
$count = mysqli_num_rows($select_query_result);
if ($count==0)
{
    echo"There is no user with this Email & Password";
}
 else
 {
     $_SESSION ['id']=$row['id'];
     $_SESSION['email']=$row['email'];
     header('location: products.php');
 }
}
 else
 {
     echo"Please enter Email & Password. It is compulsary.";
 }
?>
