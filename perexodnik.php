<?php
session_start();
$bookid = $_REQUEST['isbn'];
$_SESSION['bookid'] = $_REQUEST['isbn'];

header("location: tovar.php#$bookid");



?>