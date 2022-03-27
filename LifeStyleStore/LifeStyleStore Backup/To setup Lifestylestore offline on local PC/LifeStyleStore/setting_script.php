<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is setting script page this page will validate & update new password to database
-->
<?php
require "includes/common.php";
if(!isset($_SESSION['email']))
{
    header("location: index.php");
}
$oldpassword = md5(md5(mysqli_real_escape_string($con,$_POST['oldpassword'])));
$email = $_SESSION['email'];
$id = $_SESSION['id'];

$select_query = "SELECT * FROM users WHERE id='$id' AND email='$email' AND password='$oldpassword'";
$select_query_result = mysqli_query($con, $select_query);
$count = mysqli_num_rows($select_query_result);

$password1 = md5(md5(mysqli_real_escape_string($con,$_POST['newpassword1'])));
$password2 = md5(md5(mysqli_real_escape_string($con,$_POST['newpassword2'])));
$regex_password="/[a-zA-z!@#$%^&*-=?=0-9]{8,}$/";

if($count>0)
{
    if (preg_match($regex_password, $password1))
    {
        if(strcmp($password1, $password2)==0)
        {
           $query = "UPDATE  users SET password = '$password1' WHERE email = '$email' AND id = '$id'";
           mysqli_query($con, $query);
           $msg = urlencode("PASSWORD updated");
           header("location: setting.php?msg=".$msg); 
        }
        else
        {
            $password2_error = urlencode("NEW PASSWORD didn't match");
            header("Location:Sign_Up.php?password2_error=".$password2_error);
        }
    }
    else 
    {
       $password1_error = urlencode("PASSWORD must be 8 characters long");
       header("Location:Sign_Up.php?password1_error=".$password1_error); 
    }       
}
 else
 {
    $oldpassword_error = urlencode("Please enter correct OLD PASSWORD");
    header("Location:Sign_Up.php?oldpassword_error=".$oldpassword_error);
 }
     
?>