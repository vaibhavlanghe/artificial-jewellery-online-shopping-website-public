<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(!isset($_SESSION['u_email'])){
            header('location:index.php');
        }else{
            session_unset();
            session_destroy();
            if(!isset($_SESSION['u_email'])){
            header('location:index.php');
            }
        }
?>
    </body>
</html>
