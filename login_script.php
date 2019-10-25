<?php require "db_connection.php";
 
    if (isset($_POST['submit'])) {
    $user_id = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = mysqli_real_escape_string($conn,md5(sha1(md5(sha1($_POST["password"])))));
	//$user_id="adityap123@gmail.com";
	//$password=md5(sha1(md5(sha1("aditya@123"))));
	//echo $user_id;
	//echo $password;
	
    	 if (empty($user_id) || empty($password )) {
         echo '<script>alert("You must fill all the fields!!!");window.location="index.php";</script>';
	//echo "empty";
       } else {
        $sql = "SELECT * FROM users WHERE u_email='$user_id' AND u_pass='$password'";
		$query = mysqli_query($conn,$sql)or die(mysqli_error($conn));
	
        $row= mysqli_fetch_array($query,MYSQLI_BOTH);
		//echo $row;
        $u_id=$row['u_id'];
		//echo $u_id;
        if ($query === false) {
            echo "Could not successfully run query ($sql) from DB: " . mysql_error();
			
            exit;
        }

        if ($row=mysqli_num_rows($query) > 0) {
			echo $user_id;
			echo $u_id;
            $_SESSION['u_email']=$user_id;
            $_SESSION['u_id']=$u_id;
            header('location:home.php');
        }else{
        echo '<script>alert("Username and password does not match!!!");window.location="index.php";</script>';
		
        }
    }
}
mysqli_close($conn);
?>