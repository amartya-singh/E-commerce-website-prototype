<!--
Developer: Amartya Singh
Project From Internshala

Project Name: Lifestyle Store
page: This contains the session variable & session_start() function code
-->
<?php 
$con = mysqli_connect("localhost", "root", "", "store");
if(!isset($_SESSION)) 
    { 
        session_start();
    } 
?>