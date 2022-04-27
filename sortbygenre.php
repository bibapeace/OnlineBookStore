
<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'config.php';
session_start();
error_reporting(0);
?>

<?php
$genre = $_REQUEST['genre'];
$sql = "SELECT * FROM `book` WHERE genre1 = '".$genre."' OR genre2 = '".$genre."' OR genre3 = '".$genre."'";


if($_POST['select']) {

$select=$_POST['select'];
  switch ($select) {

    case "a_z":
      $sql = "SELECT * FROM `book` WHERE genre1 = '".$genre."' OR genre2 = '".$genre."' OR genre3 = '".$genre."' ORDER BY Title";
      break;

    case "z_a":
      $sql = "SELECT * FROM `book` WHERE genre1 = '".$genre."' OR genre2 = '".$genre."' OR genre3 = '".$genre."' ORDER BY Title DESC";
      break;

    case "priceMin":
    $sql = "SELECT * FROM `book` WHERE genre1 = '".$genre."' OR genre2 = '".$genre."' OR genre3 = '".$genre."' ORDER BY price";
      break;
      
      case "priceMax":
      $sql = "SELECT * FROM `book` WHERE genre1 = '".$genre."' OR genre2 = '".$genre."' OR genre3 = '".$genre."' ORDER BY price DESC ";
      break;

      case "ratingMax":
      $sql = "SELECT * FROM `book` WHERE genre1 = '".$genre."' OR genre2 = '".$genre."' OR genre3 = '".$genre."' ORDER BY showrating DESC ";
      break;  
  } 
}
?>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Books Sorting</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link rel="stylesheet" href="primer212.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IKONKA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<head>
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
 <body style="background-size: 100%; background-image: url('https://f.vividscreen.info/soft/30dce646d119834b9ea780f7c74f79a8/Leaves-and-white-background-1920x1200.jpg') "><div class="container">
  <div class="row">
       <div class="col-md-9">
        <form action='' method='post'>
          <select style="height: 39px" class="bg-warning rounded-lg w-25" name='select'>
                <option value='a_z'>By name (A-Z)</option>
                <option value='z_a'>By name (Z-A)</option>
                <option value='priceMin'>By price (cheaper)</option>
                <option value='priceMax'>By price (more expensive)</option>
                <option value='ratingMax'>Top popular</option>
              </select>
              <button type="submit" class="btn btn-primary mb-2">Sort</button>

        </form>
      </div>

        <div class="col-md-3">
        <div class="dropdown ">
          <button class="dropbtn">Catalog</button>
          <form class="dropdown-content" style="right:210px;" action="sortbygenre.php">
            <input class="inputssss" name="genre" type="submit" value='Novel'>
            <input class="inputssss" name="genre" type="submit" value='Satire'>
            <input class="inputssss" name="genre" type="submit" value='Action'>
            <input class="inputssss" name="genre" type="submit" value='Dark fantasy'>
            <input class="inputssss" name="genre" type="submit" value='Fiction'>
            <input class="inputssss" name="genre" type="submit" value='Adventure'>
            <input class="inputssss" name="genre" type="submit" value='Fantasy'>
            <input class="inputssss" name="genre" type="submit" value='Tragedy'>
            <input class="inputssss" name="genre" type="submit" value='Comedy'>
            <input class="inputssss" name="genre" type="submit" value='Antinovel'>
            <input class="inputssss" name="genre" type="submit" value='Epic'>
            <input class="inputssss" name="genre" type="submit" value='Drama'>
            <input class="inputssss" name="genre" type="submit" value='Melodrama'>
            <input class="inputssss" name="genre" type="submit" value='Horror'>
            <input class="inputssss" name="genre" type="submit" value='Thriller'>
          </form>
        </div>
      </div>
  </div>

      <div class="row">
        <?php
          $result=$conn->query($sql);
          while ($row = $result->fetch_assoc()) {
        ?>
          <div class="col-md-3 mb-2 shadow-lg" book-price = "<?= $row['Price'];?>">
            <div class="card-deck">
              <div class="card border-secondary">
                <img src="<?= $row['Poster']; ?>" class="card-img-top">
                <div class="card-img-overlay">
                  <h6 style="margin-top: 175px;" class="text-light bg-info text-center rounded p-1">
                    <form action="perexodnik.php" method="post">
                    <input style="display:none;" type="text" name="isbn" value="<?= $row['ISBN'] ?>">
                    <input style="background: none; border: none;" type="submit" value="<?= $row['Title']; ?>">
                    </form>
                  </h6>
                </div>
                <div class="card-body">
                  <h4 class="card-title text-danger">Price: <?= $row['Price'];?>$</h4>
                  <p>
                    Rating : <?= floor($row['showrating']*100)/100;?>⭐
                  </p>
                 
                </div>
              </div>
            </div>
             <button class="add-to-cartrrr btn btn-success btn-block" data-id="<?= $row['ISBN']?>">Add to Cart</button>
          </div>

        <?php
     
            }
        ?>
      </div>
    </div>
<script>


   $('.add-to-cartrrr').on('click', addToCart);

   
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

