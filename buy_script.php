<?php
    require 'db_connection.php';
        $name=mysqli_real_escape_string($conn,$_POST["name"]);
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $pass = mysqli_real_escape_string($conn,md5(sha1(md5(sha1($_POST["password"])))));
        $sql = "SELECT * FROM users WHERE u_email = '$email' AND u_pass = '$pass'";
        $query = mysqli_query($conn,$sql);
        $row_num = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);
        if(isset($_POST['send'])){
        if(!empty($email) && ($email==$row['u_email']) && ($pass==$row['u_pass'])){
            if($row_num>0){
                $subject= mysqli_real_escape_string($conn,$_POST['subject']);
                $msg= "From ".$name?><br><?php mysqli_real_escape_string($conn,$_POST['message']);
                mail('vaibhavlanghe25@gmail.com', $subject,$msg);
                header('location:index.php');
            }else{
                echo "<script>";
                echo "alert('You are not the user. Please signup first...');";
                echo "window.location.href='signup.php'";
                echo "</script>";
            }
        }
        }else{
            echo 'doesnt get email and password '.$email.$pass;
                die();
                
        }
?>