<?php
    require 'db_connection.php';
	echo "db connected";

        //$query="INSERT INTO users($u_id,$u_name,u_email,u_pass,u_b_date,u_contact,u_local_add,u_state,u_city,u_pin)VALUES(NULL,'$u_name','$u_email','$u_pass','$u_b_date','$u_contact','$u_local_addr','u_state','$u_city','$u_pin')";
		$query="INSERT INTO mytb(name)VALUES('vaibhav')";
        echo $query;

		//$result= mysqli_query($conn, $query) or die(mysqli_connect_error());
		$result= mysqli_query($conn, $query) or die(mysqli_connect_error());
		echo $result;
        if(isset($result)){
            header('location:home.php');
        }
		echo "okay";
        mysqli_close($conn);
    
?>
