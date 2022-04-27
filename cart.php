<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylecart28.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style type="text/css">
    	.imagesss{
 			 width: 90px;
 			 height: 90px;
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

<div class="main-cart" style="margin-bottom: 5%;"></div>


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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/carts121.js"></script>
</body>
</html>