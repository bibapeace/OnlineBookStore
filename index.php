<?php
require "db.php";
?>


<center>
<h1>Welcome to our website!</h1>
</center>


<?php 
if(isset($_SESSION['user']))?>

	Hello, <?php echo $_SESSION['user']['NickName']; ?></br>





<a href="registerpage.html">Sign in</a><br>
<a href="registerpage.html">Sign up</a><br>
<a href="exit.php">Exit</a> 


