<?php 	
require('db.php');
require('funcforgotten.php');


$email= $_POST['email'];
$_SESSION['email'] = $email;

$sql = "SELECT * FROM user WHERE email = '$email' LIMIT 1";

$res = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($res);

sendPasswordResetLink($email);
header ('location: message.php');





?>