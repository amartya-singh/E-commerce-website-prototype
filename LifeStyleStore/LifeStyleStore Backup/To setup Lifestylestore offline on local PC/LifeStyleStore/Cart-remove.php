<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is script to remove items from cart
-->
<?php
require "includes/common.php";
if (isset($_GET['id']))
    {
    $item_id = $_GET["id"]; 
    $user_id = $_SESSION['id'];
    $query = "DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' ";
    $result = mysqli_query($con, $query);
    header("location:cart.php");
}
?>