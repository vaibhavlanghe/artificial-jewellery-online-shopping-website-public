<?php
    require 'db_connection.php';
    if(isset($_GET['pageSet'])){
        if(isset($_SESSION['email'])){
            echo "<script>";
            echo "alert('User is already loged in...');";
            echo "window.location.href='home.php';";
            echo "</script>";
        }else{
            echo '<h6><a name="footerLogin" data-toggle="modal" data-target="#myModal">Login</a></h6>';
        }
    }
?>
                        