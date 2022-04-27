<?php 
	require 'config3.php';
	$sql = "SELECT * FROM map";
	$result = mysqli_query($conn, $sql);
?> 

<!DOCTYPE html>
<head>
	<title>Book map</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
      <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/main2.css">
</head>

<body>

 <header>
      <a href="../mainmenu.php">
      <div class="logoos">
        <img class="logo" src="https://img.icons8.com/bubbles/2x/books.png" alt="logo">
      </div>
      </a>


      <div class="searchbar">
        <form action="../search.php" method="get">
          <input type="search" name="search" placeholder="Search for fun!">
        <!-- <span class="fa fa-search"></span> -->  
        </form>
      </div>

      <div class="navbarrr">
        <nav>
          <ul class="nav_links">
            <li><a class="fas fa-shopping-basket" href="../cart.php"></a></li>
            <?php require('../UserController.php'); if (User::isGuest()): ?>                                        
                  <li><a href="../registerpage.html"><i class="fa fa-lock"></i> </a></li>
                <?php else: ?>
                <li><a href="../cabinet.php"><i class="fa fa-user"></i></a></li>
               <li><a href="../logout.php"><i class="fa fa-unlock"></i></a></li>
                  <?php endif; ?>
          </ul>
        </nav>
      </div>


  </header>
  <!-- end of single -->


  <div class="nav-scroller py-1 mb-2">
    <nav style="background-color: #F0D49D;" class="nav d-flex justify-content-around">
      <a style="font-size: 15px;" class="p-2 link-secondary" href="../primer.php">All Book</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="#">Topseller</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="../stocks.php">Stocks</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="book_map.php">Map of Knowledge</a>
    </nav>
  </div>


	<div class="map">
		<svg class="mysvg" viewbox="0 0 1009.6727 665.96301">
			<?php
				while ($row = mysqli_fetch_assoc($result)) {

				$sql2 = "SELECT COUNT(DISTINCT Name) AS number FROM author WHERE Country = '".$row['country_name']."'";
				$result2 = mysqli_query($conn, $sql2);
				$row2 = mysqli_fetch_array($result2);
			?>
				<a href="authors_country.php?country=<?= $row['country_name'];?>">
					<path class="country" 
					d="<?= $row['coordinate']; ?>" fill="#bf2523" 
					description-data="<img src='<?= $row['flag'];?>'><br> Country name: <?= $row['country_name'];?> <br> Authors quantity: <?= $row2['number'];?>"/>
				</a>
			<?php } ?>
		</svg>

		<div class="description"></div>
	</div>

<footer>
  <div class="footer-content">
    <h3>Book Store</h3>
    <p>These initials mean that all the authors of this site have tried their best. Don't judge so harshly</p>
    <ul class="socials">
      <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
      <li> <a href="#"> <i class="fa fa-telegram"></i> </a> </li>
      <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
      <li> <a href="#"> <i class="fa fa-youtube"></i> </a> </li>
      <li> <a href="#"> <i class="fa fa-instagram"></i> </a> </li>
    </ul>
  </div>
  <div class="footer-bottom">
    <p>copyright &copy;2021 Sodium Corporate. Designed by <span>ZEB</span> </p>

  </div>


</footer>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="script/main.js"></script>
</body>
</html>