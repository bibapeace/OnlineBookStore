<?php require 'config.php';?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books Sorting</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link rel="stylesheet" href="primer212.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Search result</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		<style type="text/css">
			.card-img-top{
				height: 350px;
			}
		</style>
</head>
 <body style="background-size: 100%; background-image: url('https://f.vividscreen.info/soft/30dce646d119834b9ea780f7c74f79a8/Leaves-and-white-background-1920x1200.jpg') ">
    <header>
       <a href="mainmenu.php">
      <div class="logoos">
        <img class="logo" src="https://img.icons8.com/bubbles/2x/books.png" alt="logo">
      </div>
      </a>



      <div class="searchbar">
        <form action="search.php" method="get">
          <input type="search" name="search" placeholder="Search for fun!">
        <!-- <span class="fa fa-search"></span> -->  
        </form>
      </div>

      <div class="navbarrr">
        <nav>
          <ul class="nav_links">
            <li><a class="fas fa-shopping-basket" href="cart.php"></a></li>
            <?php require('UserController.php'); if (User::isGuest()): ?>                                        
                  <li><a href="registerpage.html"><i class="fa fa-lock"></i> </a></li>
                <?php else: ?>
                <li><a href="cabinet.php"><i class="fa fa-user"></i></a></li>
               <li><a href="logout.php"><i class="fa fa-unlock"></i></a></li>
                  <?php endif; ?>
          </ul>
        </nav>
      </div>


  </header>
  <!-- end of single -->


  <div class="nav-scroller py-1 mb-2">
    <nav style="background-color: #F0D49D;" class="nav d-flex justify-content-around">
      <a style="font-size: 15px;" class="p-2 link-secondary" href="primer.php">All Book</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="#">Topseller</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="stocks.php">Stocks</a>
      <a style="font-size: 15px;" class="p-2 link-secondary" href="Yerasyl/book_map.php">Map of Knowledge</a>
    </nav>
  </div>
	<div class="container">
			<div class="row">
				<?php
					$search = $_GET['search'];
					if (strlen($search) < 5 && strlen($search)>0){
							echo "<h2>Request too short</h2><br><br><br><br><br><br><br><br><br>";
					}
					if (!strlen($search)) {
						echo "<h2>You didn't write anything</h2><br><br><br><br><br><br><br><br><br>";
					} 
					else{				
						$sql = "SELECT * FROM `book` WHERE Title LIKE '%$search%' OR ISBN LIKE '%$search%'";
						$result=$conn->query($sql);

					while ($searched_item = $result->fetch_assoc()) {
						if($searched_item['Title'])
						{
				?>
					<div class="col-md-3 mb-2 shadow-lg" book-price = "<?= $searched_item['Price'];?>">
						<div class="card-deck">
							<div class="card border-secondary">
								<img src="<?= $searched_item['Poster']; ?>" class="card-img-top">
								<div class="card-img-overlay">
									<a href ="tovar.php#<?= $searched_item['AuthorID'];?>">
										<h6 style="margin-top: 175px;" class="text-light bg-info text-center rounded p-1">
											<form action="perexodnik.php" method="post">
                    <input style="display:none;" type="text" name="isbn" value="<?= $searched_item['ISBN'] ?>">
                    <input style="background: none; border: none;" type="submit" value="<?= $searched_item['Title']; ?>">
                    </form>
										</h6>
									</a>
								</div>
								<div class="card-body">
									<h4 class="card-title text-danger">Price: <?= $searched_item['Price'];?>$</h4>
									<p>
										Rating : <?= $searched_item['Rating'];?>⭐
									</p>
									
								</div>
							</div>
						</div>
             <button class="add-to-cart-recsa btn btn-success btn-block" data-id="<?= $searched_item['ISBN']?>">Add to Cart</button>
					</div>
				<?php
	    			} else{
	    				echo "<h2>Alas but there is no such book</h2><br><br><br><br><br><br><br><br><br>";
	    			}
	    		}
	    	}
				?>
			</div>
		</div>
		<script>

   $('.add-to-cart-recsa').on('click', addToCart);

   
   function addToCart(){
    var id = $(this).attr('data-id');

    if(cart[id]==undefined){
        cart[id]=1;
    }
    else{
        cart[id]+1;
    }
    saveCart();
}

function saveCart(){
    localStorage.setItem('cart', JSON.stringify(cart));
}
function loadCart(){
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
    }
}
function loadCart(){
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
    }
}
</script>


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
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/tovar55.js"></script>
</body>
</html>