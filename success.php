<?php
    require 'db_connection.php';
    
    if($_GET['confirmBtn']){
        $sql1="SELECT i.name,i.price,ui.id,ui.user_id,ui.status FROM items i,users_items ui WHERE i.id = ui.item_id AND ui.status='Added to cart' ORDER BY ui.id";
        $query1= mysqli_query($conn, $sql1);
        $row_num= mysqli_num_rows($query1);
        $total_price=0;
        while($row1= mysqli_fetch_array($query1)){
            if($_SESSION['id']==$row1['user_id']){
                $total_price=$total_price+$row1['price'];
                $id=$row1['id'];$name=$row1['name'];$price=$row1['price'];
                $sql2="UPDATE users_items SET status='confirmed' WHERE id='$id'";
                $query2= mysqli_query($conn, $sql2);
                while($row2= mysqli_fetch_array($query2)){
                    echo $row1['status'];
                }
                }
        }
        /*mail service for confirmed*/
        $to=$_SESSION['email'];
        $msg=$to?><br><?php."Your order is confirmed.".?><br><?php."Your product is:".$name.?><br><?php "You have to pay the amount Rs.".price."/- at the time of delevery."?><br><?php "Thank you to choosing our online shopping.";
        $email="vaibhavlanghe25@gmail.com";
        mail($to,$msg,$email);
        echo "<script>";
        echo "alert('order confirmed');window.location.href='logout.php';";
        echo "</script>";
    }
?>