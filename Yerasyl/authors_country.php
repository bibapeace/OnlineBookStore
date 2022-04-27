<?php require 'config3.php'; ?>

<?php
	$country = $_GET['country'];
	$sql = "SELECT DISTINCT * FROM author WHERE country = '$country'";
	$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Authors</title>
			<!-- Latest compiled and minified CSS -->

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
		<style >
			.image{
				height: 350px;
			}
		</style>
		<link rel="stylesheet" href="../stocks11	.css">
	</head>
	  <body style="background-size: 100%; background-image: url('https://f.vividscreen.info/soft/30dce646d119834b9ea780f7c74f79a8/Leaves-and-white-background-1920x1200.jpg') ">
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


  <div class="nav-scroller py-1 mb-2"  style="color: blue;">
    <nav style="background-color: #F0D49D;" class="nav d-flex justify-content-around">
      <a style="font-size: 15px;" class="p-2 link-secondary" href="../primer.php">All Book</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="#">Topseller</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="../stocks.php">Stocks</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="book_map.php">Map of Knowledge</a>
    </nav>
  </div>
		<div class="container">
			<div class="row">
				<?php
					while ($row = mysqli_fetch_assoc($result)) {
				?>
				<div class="col-md-3 mb-2 shadow-lg">
					<div class="card-deck">
						<div class="card border-secondary">
							<img class="image" src="<?= $row['Photo']; ?>" class="card-img-top">
							<div class="card-img-overlay">
								<a href ="../authorpage.php#<?= $row['ID']; ?>">
					                <h6 class="text-light bg-info text-center rounded p-1"><?= $row['Name']; ?></h6>
					            </a>
							</div>
							<div class="card-body">
								<h4 class="card-title text-danger">Country: <?= $row['Country']; ?></h4>
							</div>
						</div>
					</div>
				</div>
				<?php
	    			}
				?>
			</div>
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

	</body>
</html>