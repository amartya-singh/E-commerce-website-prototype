<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is signup script page this page will validate & update details to database
-->
<?php
require "includes/common.php";

$name = mysqli_real_escape_string($con, $_POST['name']);
$regex_name="/[A-Za-z ']+/";
if (!preg_match($regex_name, $name))
{    
    $name_error = urlencode("Only alphabets,space & ' are allowed");
    header("Location:Sign_Up.php?name_error=".$name_error);
}

$email = mysqli_real_escape_string($con, $_POST['email']);
$regex_email="/[a-z0-9._%+#$-]+@[a-z0-9._-]+\.[a-z]{2,3}+/";
if (!preg_match($regex_email, $email))
{
    $email_error = urlencode("Please enter in correct format i.e someone@gmail.com");
    header("Location:Sign_Up.php?email_error=".$email_error);
}

$password = md5(md5(mysqli_real_escape_string($con, $_POST['password'])));
$regex_password="/[a-zA-z!@#$%^&*-=?=0-9]{8,}$/";
if (!preg_match($regex_password, $password))
{
    $password_error = urlencode("Password must be 8 character long");
    header("Location:Sign_Up.php?password_error=".$password_error);
}

$contact = mysqli_real_escape_string($con, $_POST['contact']);
$regex_contact="/[+]+[0-9]{2,3}+[0-9]{3,12}/";
if (!preg_match($regex_contact, $contact))
{
    $contact_error = urlencode("Please provide country code for ex: +91XXXXXXXXX");
    header("Location:Sign_Up.php?contact_error=".$contact_error);
}

$select_query = "SELECT id FROM users WHERE email='$email'";
$select_query_result = mysqli_query ($con, $select_query);
$count = mysqli_num_rows($select_query_result);
if($count>0)
{
    $duplicate_error = urlencode("This email is already registered. Please try to Login");
    header("Location:Sign_Up.php?duplicate_error=".$duplicate_error);
}
 else
 {
     mysqli_close($con);
     $con = mysqli_connect("localhost", "root", "", "store");
     if($con==FALSE)
     {
        die("ERROR: Could not connect. " . mysqli_connect_error());
     }
     $city = mysqli_real_escape_string($con, $_POST['city']);
     $address = mysqli_real_escape_string($con, $_POST['address']);
     $user_registration_query = "INSERT INTO users(name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
     if (mysqli_query($con, $user_registration_query))
     {
         $id = mysqli_insert_id($con);
         $_SESSION ['id']=$id;
         $_SESSION['email']=$email;
         mysqli_close($con);
         header('location: products.php');
     }
     else
         {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
         }
 }

?>


