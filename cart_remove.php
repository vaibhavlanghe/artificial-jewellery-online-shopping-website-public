<?php
require 'db_connection.php';
if((isset($_GET['id'])) && (isset($_POST['submit']))){
    //echo $_GET['id'];
    $cartId = $_GET['id'];
    $query = "DELETE FROM cart WHERE cartid ='$cartId'";
    if(mysqli_query($conn,$query)){
        header("location:kart.php?set=1");
    }
}
?>