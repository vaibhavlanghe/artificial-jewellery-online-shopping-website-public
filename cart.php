<!DOCTYPE html>
<?php
    require 'db_connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
   
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> </title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<style>
			footer{
				padding:10px 0;
				background-color:#101010;
				color:#9d9d9d;
				bottom:0;
				width:100%;
			}
			#bodyContent{
				width:50%;
				margin-top:15%;
				margin-bottom:22%;				
			}
		</style>
	</head>
	<body>
		<?php include'header.php';?>
            <form action="success.php" method="POST">
		<div class="container" id="bodyContent">
			<table class="table table-stiped">
				<tbody>
					<tr>
						<th>Item Number</th>
						<th>Item Name</th>
						<th>Price</th>
						
					</tr>
					<?php           $sql="SELECT i.name,i.price,ui.id,ui.user_id,ui.status FROM items i,users_items ui WHERE i.id = ui.item_id AND ui.status='Added to cart' ORDER BY ui.id";
                                                        $query= mysqli_query($conn, $sql);
                                                        $row_num= mysqli_num_rows($query);
                                                        while($row= mysqli_fetch_array($query)){
                                                            if($_SESSION['id']==$row['user_id']){
                                                            $_SESSION['user_item_id']=$row['id'];
                                                ?>
                                        <tr><td><?php
                                                
                                                echo $row['id'];
                                            ?></td>
                                            <td><?php
                                                echo $row['name'];
                                            ?></td>
                                            <td><?php
                                                echo $row['price'];
                                                }?></td>
                                        </tr>
                                        <?php } ?>
					<tr>
						<td></td>
						<td>Total</td>
						<td>Rs. <?php
                                                        $sql="SELECT i.name,i.price,ui.id,ui.user_id,ui.status FROM items i,users_items ui WHERE i.id = ui.item_id AND ui.status='Added to cart' ORDER BY ui.id";
                                                        $query= mysqli_query($conn, $sql);
                                                        $row_num= mysqli_num_rows($query);
                                                        $total_price=0;
                                                        echo $row['name'];
                                                        while($row= mysqli_fetch_array($query)){
                                                            if($_SESSION['id']==$row['user_id']){
                                                                $total_price=$total_price+$row['price'];
                                                            }
                                                        }
                                                            echo $total_price."/-";
                                                        ?></td>
                                                
						<td><input type="submit" class="btn btn-primary" name="confirmBtn" value="Confirm Order"></td>
					</tr>
                                        
				</tbody>
			</table>
                    
		</div>
            </form>
		<?php include 'footer.php';?>
	</body>
</html>