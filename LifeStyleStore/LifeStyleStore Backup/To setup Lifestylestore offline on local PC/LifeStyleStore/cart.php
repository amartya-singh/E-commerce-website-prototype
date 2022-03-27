<!DOCTYPE html>
<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This is cart page
-->

<?php
require "includes/common.php";
if(!isset($_SESSION['email']))
{
    header('location: index.php');
}
?>
<html>
    <head>
        <title>Cart</title>
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
           <table>
               <?php
                        $sum = 0;
                        $user_id = $_SESSION['id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to Cart'";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum = $row["Price"] + $sum;
                                    $id = $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='Cart-remove.php?id={$row['id']}' class='btn btn-warning'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        <?php
                        ?>
               </tbody>
           </table>
       </div>
       <?php
       include "includes/footer.php";
       ?>
    </body>
</html>
