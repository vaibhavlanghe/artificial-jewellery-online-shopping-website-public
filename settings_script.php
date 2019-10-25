<?php
    require'db_connection.php';
    if(isset($_POST['change'])){
        $oldpassword= mysqli_real_escape_string($conn, sha1($_POST['oldpassword']));
        $newpassword= mysqli_real_escape_string($conn, sha1($_POST['newpassword']));
		$retypenewpassword= mysqli_real_escape_string($conn, sha1($_POST['retypenewpassword']));
        if(isset($_SESSION['u_email'])){
		$user_id= $_SESSION['u_email'];
		echo $user_id;
		}
		else{
			echo "<script>";
			echo "alert('session not started');";
			echo "<script>";
		}
        $sql="SELECT * FROM users WHERE u_email='$user_id' AND u_pass='$oldpassword'";
        $query= mysqli_query($conn, $sql);
        $row= mysqli_fetch_array($query);
        $no_of_rows= mysqli_num_rows($query);
        $id= $row['u_id'];
		echo $no_of_rows;
        if($newpassword == $retypenewpassword){
            if($no_of_rows > 0){
                $sql_update= "UPDATE users SET u_pass='$newpassword' WHERE u_id='$id'";
                $query_update= mysqli_query($conn, $sql_update);
                $row_update= mysqli_fetch_array($query_update);
                 echo "<script>";
                echo "alert('Password is reset....');";
                echo "window.location.href='logout.php';";
                echo "</script>";
            } else {
                echo "<script>";
                echo "alert('Please enter correct old passwords!!!');window.location.href='#';";
                echo "</script>";
            }
        }else{
            echo "<script>";
            echo "alert('Please enter correct newpassword and re-type password !!!');window.location.href='settings.php';";
            echo "</script>";
        }
    }
?>