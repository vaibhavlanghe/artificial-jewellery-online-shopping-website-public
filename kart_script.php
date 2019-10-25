<?php
require 'db_connection.php';
if((isset($_GET['id'])) && (isset($_POST['submit'])) ){
    $pid = $_GET['id'];

    //getting product and image details from database
    $query = "SELECT p.pname,p.ptype,p.pdescription,p.pprice,i.PATH FROM products p JOIN images i WHERE i.PID = $pid AND p.pnumber = $pid ";
    $result = mysqli_query($conn,$query)or die ("server down");
    $row = mysqli_fetch_assoc($result);
    $src = $row['PATH'];
    $title = $row['pname'];
    $description = $row['pdescription'];
    $price = $row['pprice'];
    $ptype = $row['ptype'];
    $u_mail = $_SESSION['u_email'];
    //echo $u_mail;
    
    //getting user id from database
    $query1 = "SELECT u_id FROM users WHERE u_email='$u_mail'";
    $result1 = mysqli_query($conn,$query1);
    $row1 = mysqli_fetch_assoc($result1);
    //echo $row1['u_id'];
    $u_id = $row1['u_id'];
    
            //insert data required to cart along with the user and product id
            $query2 = "INSERT INTO cart(CARTID,PTYPE,PRICE,QUANTITY,TOTAL,BUY_STATUS,PID,CID)VALUES(NULL,'$ptype','$price','0','0','UNSUCCESSFUL','$pid','$u_id')";
            //$result2 = mysqli_query($conn,$query2) or die("data not inserted into cart!!!");
            //$num_rows = mysqli_num_rows($result2);
            $u_mail = $_SESSION['u_email'];
            if(mysqli_query($conn,$query2)){
               // echo '<script>window.location=kart.php?id='.$pid.'</script>';
               header("location:kart.php?id=".$pid);
            }else{
                echo 'query not executed';
            }
            
}

?>