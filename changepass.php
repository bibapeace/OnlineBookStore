<?php
require('config.php');
session_start();
$newpass = $_POST['newpass'];

$sql = "UPDATE `user` SET `Password` = '".$newpass."' WHERE `user`.`email` = '".$_SESSION['email']."'";


        $result = mysqli_query($conn,$sql);

        header('location: succes.php')


?>