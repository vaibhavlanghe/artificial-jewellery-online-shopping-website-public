<?php
    require 'db_connection.php';
	echo "db connected";
	//getting data from front end
    $u_fname= mysqli_real_escape_string($conn,$_POST['fName']);
	$u_mname= mysqli_real_escape_string($conn,$_POST['mName']);
	$u_lname= mysqli_real_escape_string($conn,$_POST['lName']);
    $u_email = mysqli_real_escape_string($conn,trim($_POST['uEmail']));
	$u_gender = mysqli_real_escape_string($conn,trim($_POST['radioGender']));
    $u_pass=mysqli_real_escape_string($conn,trim(md5(sha1(md5(sha1($_POST['password']))))));
	$u_b_date = mysqli_real_escape_string($conn,date('Y-m-d', strtotime($_POST['bDate']))); 
    $u_contact=mysqli_real_escape_string($conn,$_POST['mobNum']);
	$u_local_add = mysqli_real_escape_string($conn,$_POST['localAdd']);
	$u_town = mysqli_real_escape_string($conn,$_POST['townAdd']);
	$u_state = mysqli_real_escape_string($conn,$_POST['state']);
    $u_city=mysqli_real_escape_string($conn,$_POST['city']);
    $u_pin= mysqli_real_escape_string($conn,$_POST['pin']);
    
	//finding records in database
	$sql1= "SELECT * FROM users WHERE u_email='$u_email'";
    $query= mysqli_query($conn, $sql1) or die(mysqli_connect_error());
    $row= mysqli_num_rows($query);
	echo $row;
	
	//if no record already found row=0
	if($row == 0){
        $sql2 = "INSERT INTO users(u_id,u_fname,u_mname,u_lname,u_email,u_pass,u_b_date,u_contact,u_gender,u_local_add,u_town,u_state,u_city,u_pin)VALUES(NULL,'$u_fname','$u_mname','$u_lname','$u_email','$u_pass','$u_b_date','$u_contact','$u_gender','$u_local_add','$u_town','$u_state','$u_city','$u_pin')";
		
        echo $sql2;
	//fire query
		$result= mysqli_query($conn, $sql2) or die(mysqli_connect_error());
		echo $result;
		echo "no result";
	
	//if result inserted then go to home page for login
        if(isset($result)){
            header('location:home.php');
        }else{
			echo "There is technical issue signup failed";
		}
		echo "okay";
        mysqli_close($conn);
    }else{
        echo "<script>";
        echo "alert('user is already exist.....');window.location.href='index.php';";
        echo "</script>";
    }
?>
