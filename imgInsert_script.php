<?php

if(isset($_POST['btnSave'])){
	
	
//	require 'db_connection.php';
//	echo "db ready to insert image";
	$path = $_POST['folders'];
	$fileTemp = $_FILES['img']['tmp_name'];
	$fileName = $_FILES['img']['name'];
	$fileType = $_FILES['img']['type'];
	//$filePath = "$path/".$fileName;
	$target_file = "pics/$path/".$fileName;
//	move_uploaded_file($fileTemp,$filePath);
	
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["img"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	   echo "<script>alert('Sorry, file already exists....');window.history.go(-1);</script>";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["img"]["size"] > 500000) {
		echo "<script>alert('Sorry, your file is too large.....');window.history.go(-1);</script>";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
		echo "<script> alert('Sorry, only JPG, JPEG, PNG files are allowed.');window.history.go(-1);</script>";
		$uploadOk = 0;
		
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 1) {
	 //   echo "<script>alert('Sorry, your file was not uploaded...');</script>";
	// if everything is ok, try to upload file
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
		$uploadOk = 1;
        echo "now insert";
		
		require 'db_connection.php';
		echo "db ready to insert image";
		$path = $_POST['folders'];
		echo "$path";
		
		//get product data to store into products table
		$pname = mysqli_real_escape_string($conn,$_POST['txtPname']);
		$pdescription = mysqli_real_escape_string($conn,$_POST['txtPdescription']);
		$pprice = mysqli_real_escape_string($conn,$_POST['txtPprice']);
		

	    /*$fileTemp = $_FILES['img']['temp_name'];
		$fileName = $_FILES['img']['name'];
		$fileType = $_FILES['img']['type'];
		$filePath = "$path/".$fileName;
		echo "$filePath";
		move_uploaded_file($fileTemp,$filePath);*/
		//if(move_uploaded_file($fileTemp,$target_file)){
		
		//getting last product number from database
		$query = mysqli_query($conn,"SELECT pnumber FROM products where pnumber = (SELECT MAX(pnumber) FROM products)");
		//$query = mysqli_query($conn,"SELECT pnumber FROM products ORDER BY PID DESC LIMIT 1");
		//$row= mysqli_num_rows($query);
		$row = mysqli_fetch_assoc($query);
		echo "pnum".$row['pnumber'];
		
		if($row == 0){
			$pnumber=1;
			$query = "INSERT INTO products(PID,pnumber,pname,pdescription,pprice,ptype)VALUES(NULL,'$pnumber','$pname','$pdescription','$pprice','$path');call imageInsert('$pnumber','$fileName','$target_file','$fileType');";
		//	$query .= "call imageInsert('$pnumber','$fileName','$target_file','$fileType')";
			/* execute multi query */
			if (mysqli_multi_query($conn, $query)) {
				do {
					/* store first result set */
					if ($result = mysqli_store_result($conn)) {
						mysqli_free_result($result);
					}
					
				} while (mysqli_next_result($conn));
			}
			echo "<script>alert('The file ". basename( $_FILES["img"]["name"]). " has been uploaded.');window.history.go(-1);</script>";
			
		}else{
			$pnumber=$row['pnumber']+1;
			$query = "INSERT INTO products(PID,pnumber,pname,pdescription,pprice,ptype)VALUES(NULL,'$pnumber','$pname','$pdescription','$pprice','$path');call imageInsert('$pnumber','$fileName','$target_file','$fileType');";
		//	$query .= "call imageInsert('$pnumber','$fileName','$target_file','$fileType')";
			/* execute multi query */
			if (mysqli_multi_query($conn, $query)) {
				do {
					/* store first result set */
					if ($result = mysqli_store_result($conn)) {
						mysqli_free_result($result);
					}
					
				} while (mysqli_use_result($conn));
			}
			echo "<script>alert('The file ". basename( $_FILES["img"]["name"]). " has been uploaded.');window.history.go(-1);</script>";
		}
	/*		if(mysqli_query($conn,"INSERT INTO products(PID,pnumber,pname,pdescription,pprice)VALUES(NULL,'$pnumber','$pname','$pdescription','$pprice')")){
				
				$query = mysqli_query($conn,"call imageInsert('$pnumber','$fileName','$target_file','$fileType')");
				mysqli_multi_query($conn,"INSERT INTO products(PID,pnumber,pname,pdescription,pprice)VALUES(NULL,'$pnumber','$pname','$pdescription','$pprice')");
				mysqli_free_result(mysqli_store_result($conn));
				
			
			echo "<script>alert('The file ". basename( $_FILES["img"]["name"]). " has been uploaded.');window.history.go(-1);</script>";
		}else{
			$pnumber=$row['pnumber']+1;
			$query = mysqli_query($conn,"INSERT INTO products(PID,pnumber,pname,pdescription,pprice)VALUES(NULL,'$pnumber','$pname','$pdescription','$pprice')");
			echo "<script>alert('The file ". basename( $_FILES["img"]["name"]). " has been uploaded.');window.history.go(-1);</script>";
		}
		}*/
		
		} else {
			echo "<script>alert('Sorry, there was an error uploading your file....');window.history.go(-1);</script>";
		}
	}
	/*
	if($uploadOk == 1){
		
		//$query = mysqli_query($conn,"INSERT INTO products(PID,pnumber,pname,pdescription,pprice)VALUES(NULL,)");
		//$query = mysqli_query($conn,"call imageInsert('','$fileName','$target_file','$fileType')");
		/*if($query){
			echo "image inserted succesfully.....";
		}else{
			echo "insertion failed!!!!!";
		}
	else{
		echo "<script>alert('The product is already in the store can't upload');</script>";
	}
	if($successful ==0){
		echo "<script>alert('The product is already in the store can't upload');</script>";
	}
	
	*/
}	 

?>