<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IKONKA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mzfkstyle15.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
               <li><a href="logout.php"><i class="fa fa-unlock"></i></a></li>

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
<?php
require('UserController.php');
$userid = User::checkLogged();
?>

<div class="containercab">
  <div class="maincab">
    <div class="rowcab row" style="margin-right: 15px;">

      <div class="col-md-4 mt-1">
        <div class="card text-center sidebar">
          <div class="card-body">
            <img src="images/Jango.jpg" class="rounded-circle" width="150">
            <div class="mt-3">
              <h3><?php echo  $_SESSION['user']['NickName'];?></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 mt-1">
        <div class="card mb-3 contentcab">
          <h1 class="m-3 pt-3">About</h1>
          <div class="card-body">
            <div class="rowcab">
              <div class="col-md-12" >
                <h5 >Full Name</h5>
              </div>
              <div class="col-md-9 text-secondary">
                <span><?php echo  $_SESSION['user']['fname'];?></span> 
                <span><?php echo  $_SESSION['user']['sname'];?></span>
              </div>
            </div>
            <hr>
            <div class="rowcab">
              <div class="col-md-12">
                <h5>Email</h5>
              </div>
              <div class="col-md-9 text-secondary">
                <span><?php echo  $_SESSION['user']['email'];?></span>
              </div>
            </div>
            <hr>
            <div class="rowcab">
              <div class="col-md-12">
                <h5>Phone</h5>
              </div>
              <div class="col-md-9 text-secondary">
                <span><?php echo  $_SESSION['user']['phone'];?></span>
              </div>
            </div>
                        <hr>

          </div>
        </div>
</div>

      <aside class="sideside bg-light p-3">
        <a href="#">Change Password</a>
        <br>
        <br>
        <a href="#">Edit Info</a>
        <br>
        <br>
        <a href="#">My Reviews</a>
        <br>
        <br>
        <a href="#">Top Up Your Account</a>
        <br>
        <br>
        <a href="#">My Orders</a>
        <br>
        <br>
        <a href="#">My Purchases</a>
      </aside>

    </div>
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
