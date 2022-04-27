<?php
session_start(); // Important if you're not already doing it!
if(isset($_POST['fgdname'])) {
    $fgdname= $_POST['fgdname'];
    $_SESSION['fgdname']=$fgdname;
    echo $fgdname;
}
?>