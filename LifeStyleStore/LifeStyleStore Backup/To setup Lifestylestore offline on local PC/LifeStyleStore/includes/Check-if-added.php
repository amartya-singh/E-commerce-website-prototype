<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is script to check whether item is added to cart or not. This helps to display added to cart or add to cart button on products.php
-->
<?php
function check_if_added_to_cart($item_id)
{
    include "common.php";
    $user_id = $_SESSION['id'];
    $select_query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' AND status='Added to Cart'";
    $select_query_result = mysqli_query ($con, $select_query);
    $count = mysqli_num_rows($select_query_result);
    if($count>=1)
    {
        return 1;
    }
    else
    {
        return 0;
    }        
}
?>