<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IKONKA</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="tovarstyle17.css">
  <link rel="stylesheet" href="comment.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>

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
        <li><a href="registerpage.html"><i class="fa fa-lock"></i></a></li>

      </ul>
    </ul>
  </nav>
</div>


</header>
<div>
 <div class="nav-scroller py-1 mb-2">
  <nav style="background-color: #F0D49D;" class="nav d-flex justify-content-around">
    <a style="font-size: 15px;" class="p-2 link-secondary" href="primer.php">All Book</a>
    <a style="font-size: 15px;" class="p-2 link-secondary" href="#">Topseller</a>
    <a style="font-size: 15px;" class="p-2 link-secondary" href="stocks.php">Stocks</a>
    <a style="font-size: 15px;" class="p-2 link-secondary" href="Yerasyl/book_map.php">Map of Knowledge</a>
  </nav>
</div>

<div class="goods-out">
</div>

<div class = "products">
  <div class = "container">
    <hr>
    <h1 style="color:black;" class = "lg-title">RECOMMENDATIONS</h1>
    <hr>
    <div class="recommendation row"></div>  
  </div>
</div>



<br><br><br>
<div class="wrapper">
  <hr>
  <h1 style="text-align: center; color: black;">Reviews</h1>
  <hr>


  <div class="containercom" style="border:none; padding-bottom: 25px;">
    <h3>Give Us A Review</h3>
    <a href="registerpage.html"><button>Register now</button></a>
  </div>

<?php else: ?>
  <li><a href="cabinet.php"><i class="fa fa-user"></i></a></li>
  <li><a href="logout.php"><i class="fa fa-unlock"></i></a></li>
</ul>
</ul>
</nav>
</div>

</header>
<div>
 <div class="nav-scroller py-1 mb-2">
  <nav style="background-color: #F0D49D;" class="nav d-flex justify-content-around">
    <a style="font-size: 15px;" class="p-2 link-secondary" href="primer.php">All Book</a>
    <a style="font-size: 15px;" class="p-2 link-secondary" href="#">Topseller</a>
    <a style="font-size: 15px;" class="p-2 link-secondary" href="stocks.php">Stocks</a>
    <a style="font-size: 15px;" class="p-2 link-secondary" href="Yerasyl/book_map.php">Map of Knowledge</a>
  </nav>
</div>

<div class="goods-out">
</div>

<div class = "products">
  <div class = "container">
    <hr>
    <h1 style="color:black;" class = "lg-title">RECOMMENDATIONS</h1>
    <hr>
    <div class="recommendation row"></div>  
  </div>
</div>



<br><br><br>
<div class="wrapper">
  <hr>
  <h1 style="text-align: center; color: black;">Reviews</h1>
  <hr>


  <div class="containercom">
    <h3 style="margin-top: 15px;">Give Us A Review</h3>
    <form action="addcomments.php" method="post" style="display: flex; margin-top: 15px;">
      <div class="input-out"></div>

      <input style="display: none;" name="date" type="text" value="<?php echo date("d F Y") ?>">
      <input style="display: none;" name="userid" type="text" value="<?php echo  $_SESSION['user']['id']; ?>">
      <textarea class="textarea" type="text" name="text" placeholder='Give A Review'></textarea>
      <div style="margin-top: 15px;">
        <input type="radio" name="zero" value="1">1
        <input type="radio" name="zero" value="2">2
        <input type="radio" name="zero" value="3">3
        <input type="radio" name="zero" value="4">4
        <input type="radio" name="zero" value="5">5
      </div>
      <div class="btn">
        <input class="inputs" type="submit" value='Give'>
      </div>
    </form>
  </div>


<?php endif; ?>







<?php
require ('dbforbook.php');
require ('db.php');
require ('commentDB.php');

$result = $conn->query($sql); 
while ($row = $result->fetch_assoc()){
  if($_SESSION['bookid'] == $row['bookid']){ 
    if($row['text']){

      ?>
      <div class="team_member"  style="border: 1px solid black ;background: lightgrey; width: 60%; margin: 10px;">
        <div class="xrenego">
          <hr>

          <h4 style="padding-left: 15px;"><?php    
          for ($i=0; $i<count($user); $i++){
            if($row['userid']==$user[$i][0]){
              $idishka = $user[$i][0];
              echo $user[$idishka-1][1]; 

            }
          }



        ?></div></h4>
        <span style="padding-left: 15px;">
        <?php
        for ($i=0; $i < $row['rating']; $i++) { ?>
          <span style="padding-left: 5px; font-size:15px;">⭐</span>          <?php
        }
        ?>
      </span>

        <br> <span style="padding-left: 15px;"><?php echo $row['date']; ?></span>
        <div>
          <p style="width: 80%; padding: 10px;"> <?php echo $row['text']; ?></p>
        </div>
      </div>
      <?php
    }
  }
}
?>


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