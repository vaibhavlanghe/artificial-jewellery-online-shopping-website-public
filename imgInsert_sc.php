<?php

require 'db_connection.php';

$query = "SELECT p.pname,p.pdescription,p.pprice,p.ptype,i.PID,i.PATH FROM products p JOIN images i WHERE p.pnumber = i.PID";

$result = mysqli_query($conn,$query);

$num_rows= mysqli_num_rows($result);
$arr = array();
if($num_rows > 0){
//	for($i = $num_rows ; $i >= 0 ;$num_rows--){
	while(	$row = mysqli_fetch_assoc($result)){
		$arr[] = $row;	
	}
//	print_r($arr);
//	echo $arr[0]['pname'];
	echo count($arr);
	//}
	for($i = count($arr)-1;$i >= 0; $i--){
		echo $arr[$i]['pname'];
	}
}

?>