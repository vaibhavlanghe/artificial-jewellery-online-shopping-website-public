<?php
    require 'db_connection.php';
	//click on add to cart get product added to cart
    if(isset($_GET['Add_to_cart'])){
        $user_id=$_SESSION['id'];
        $product_id=$_SESSION['product_id'];
        $sql="INSERT INTO users_items(user_id,item_id,status)VALUES('$user_id','$product_id','Added to cart');";
        $query= mysqli_query($conn, $sql) or die(mysqli_connect_error());
        header('location:cart.php');
    }
 else {
    echo"<script>";
    echo"alert('Please select the item.....');";
    echo"</script>";
}
?>