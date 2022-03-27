<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is script to add items to cart
-->
<?php
require "includes/common.php";
$item_id = $_GET['id'];
$user_id = $_SESSION['id'];
$item_user_query = "INSERT INTO users_items(user_id, item_id, status) VALUES ('$user_id', '$item_id', 'Added to Cart')";
if (mysqli_query($con, $item_user_query))
     {
         header('location: products.php');
     }
else
     {
         echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
     }
?>