<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IKONKA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylemain.css">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
      <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>

  <body style="background-size: 100%; background-image: url('https://f.vividscreen.info/soft/30dce646d119834b9ea780f7c74f79a8/Leaves-and-white-background-1920x1200.jpg') ">
    <header>
      <div class="logoos">
        <img class="logo" src="https://img.icons8.com/bubbles/2x/books.png" alt="logo">
      </div>


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
<!-- end of single  -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://aistenok55.ru/image/catalog/A_Skidka_10.png">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/novinki.png" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://d2sr9p9v571tfz.cloudfront.net/wp-content/uploads/2019/10/Formazione-a-distanza.jpg">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-- end of single -->

<div class = "products">
    <div class = "container">
        <h1 style="color: black;"  class = "lg-title">BESTSELLERS</h1>
        <div class = "product-items">
            <!-- single product -->
            <div class = "product">
                <div class = "product-content">
                    <div class = "product-img">
                        <img src = "images/topkniga1.jpg" alt = "product image">
                    </div>
                    <div class = "product-btns">
                        <button type = "button" class = "btn-cart"> add to cart
                            <span><i class = "fas fa-plus"></i></span>
                        </button>
                        <button type = "button" class = "btn-buy"> buy now
                            <span><i class = "fas fa-shopping-cart"></i></span>
                        </button>
                    </div>
                </div>

                <div class = "product-info">
                    <div class = "product-info-top">
                        <h2 class = "sm-title">Book</h2>
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                    </div>
                    <a href = "#" class = "product-name">g.orwell "1984"</a>
                    <p class = "product-price">₸ 1170.00</p>
                </div>

                <div class = "off-info">
                    <h2 class = "sm-title">10% off for reg</h2>
                </div>
            </div>
            <!-- end of single product -->
            <!-- single product -->
            <div class = "product">
                <div class = "product-content">
                    <div class = "product-img">
                        <img src = "images/topkniga2.jpg" alt = "product image">
                    </div>
                    <div class = "product-btns">
                        <button type = "button" class = "btn-cart"> add to cart
                            <span><i class = "fas fa-plus"></i></span>
                        </button>
                        <button type = "button" class = "btn-buy"> buy now
                            <span><i class = "fas fa-shopping-cart"></i></span>
                        </button>
                    </div>
                </div>

                <div class = "product-info">
                    <div class = "product-info-top">
                        <h2 class = "sm-title">book</h2>
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                    </div>
                    <a href = "#" class = "product-name">A.Huxley "O Divnyi Novyi Mir"</a>
                    <p class = "product-price">₸ 1260.00</p>
                </div>
                <div class = "off-info">
                    <h2 class = "sm-title">10% off for reg</h2>
                </div>
            </div>
            <!-- end of single product -->
            <!-- single product -->
            <div class = "product">
                <div class = "product-content">
                    <div class = "product-img">
                        <img src = "images/topkniga3.jpg" alt = "product image">
                    </div>
                    <div class = "product-btns">
                        <button type = "button" class = "btn-cart"> add to cart
                            <span><i class = "fas fa-plus"></i></span>
                        </button>
                        <button type = "button" class = "btn-buy"> buy now
                            <span><i class = "fas fa-shopping-cart"></i></span>
                        </button>
                    </div>
                </div>

                <div class = "product-info">
                    <div class = "product-info-top">
                        <h2 class = "sm-title">book</h2>
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                    </div>
                    <a href = "#" class = "product-name">c.aitmatov "I Dol'she veka dlitsya Den'"</a>
                    <p class = "product-price">₸ 1080.00</p>
                </div>
                <div class = "off-info">
                    <h2 class = "sm-title">10% off for reg</h2>
                </div>
            </div>
            <!-- end of single product -->
            <!-- single product -->
            <div class = "product">
                <div class = "product-content">
                    <div class = "product-img">
                        <img src = "images/topkniga4.jpg" alt = "product image">
                    </div>
                    <div class = "product-btns">
                        <button type = "button" class = "btn-cart"> add to cart
                            <span><i class = "fas fa-plus"></i></span>
                        </button>
                        <button type = "button" class = "btn-buy"> buy now
                            <span><i class = "fas fa-shopping-cart"></i></span>
                        </button>
                    </div>
                </div>

                <div class = "product-info">
                    <div class = "product-info-top">
                        <h2 class = "sm-title">book</h2>
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                    </div>
                    <a href = "#" class = "product-name">m.bulgakov "morfii"</a>
                    <p class = "product-price">₸ 800.00</p>
                </div>
                <div class = "off-info">
                    <h2 class = "sm-title">10% off for reg</h2>
                </div>

            </div>
            <!-- end of single product -->
            <!-- single product -->
          </div>
      </div>
  </div>
          <div class = "products">
        <div class = "container">
          <h1 style="color:black;" class = "lg-title">RECOMMENDATIONS</h1>
          <div class = "product-items">
            <div class = "product">
                <div class = "product-content">
                    <div class = "product-img">
                        <img src = "images/rec1.jpg" alt = "product image">
                    </div>
                    <div class = "product-btns">
                        <button type = "button" class = "btn-cart"> add to cart
                            <span><i class = "fas fa-plus"></i></span>
                        </button>
                        <button type = "button" class = "btn-buy"> buy now
                            <span><i class = "fas fa-shopping-cart"></i></span>
                        </button>
                    </div>
                </div>

                <div class = "product-info">
                    <div class = "product-info-top">
                        <h2 class = "sm-title">book</h2>
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                    </div>
                    <a href = "#" class = "product-name">d.adams "avtostopom po galaktike"</a>
                    <p class = "product-price">₸ 1170.00</p>
                </div>
                <div class = "off-info">
                    <h2 class = "sm-title">10% off for reg</h2>
                </div>
            </div>
            <!-- end of single product -->
            <!-- single product -->
            <div class = "product">
                <div class = "product-content">
                    <div class = "product-img">
                        <img src = "images/rec2.jpg" alt = "product image">
                    </div>
                    <div class = "product-btns">
                        <button type = "button" class = "btn-cart"> add to cart
                            <span><i class = "fas fa-plus"></i></span>
                        </button>
                        <button type = "button" class = "btn-buy"> buy now
                            <span><i class = "fas fa-shopping-cart"></i></span>
                        </button>
                    </div>
                </div>

                <div class = "product-info">
                    <div class = "product-info-top">
                        <h2 class = "sm-title">book</h2>
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                    </div>
                    <a href = "#" class = "product-name">j.dashner "Begushii v labirinte"</a>
                    <p class = "product-price">₸ 2070.00</p>
                </div>
                <div class = "off-info">
                    <h2 class = "sm-title">10% off for reg</h2>
                </div>
            </div>
            <!-- end of single product -->
            <!-- single product -->
            <div class = "product">
                <div class = "product-content">
                    <div class = "product-img">
                        <img src = "images/rec3.jpg" alt = "product image">
                    </div>
                    <div class = "product-btns">
                        <button type = "button" class = "btn-cart"> add to cart
                            <span><i class = "fas fa-plus"></i></span>
                        </button>
                        <button type = "button" class = "btn-buy"> buy now
                            <span><i class = "fas fa-shopping-cart"></i></span>
                        </button>
                    </div>
                </div>

                <div class = "product-info">
                    <div class = "product-info-top">
                        <h2 class = "sm-title">book</h2>
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                    </div>
                    <a href = "#" class = "product-name">R.bradberry "451' po Farengeitu"</a>
                    <p class = "product-price">₸ 1620.00</p>
                </div>
                <div class = "off-info">
                    <h2 class = "sm-title">10% off for reg</h2>
                </div>
            </div>
            <!-- end of single product -->
            <!-- single product -->
            <div class = "product">
                <div class = "product-content">
                    <div class = "product-img">
                        <img src = "images/rec4.jpg" alt = "product image">
                    </div>
                    <div class = "product-btns">
                        <button type = "button" class = "btn-cart"> add to cart
                            <span><i class = "fas fa-plus"></i></span>
                        </button>
                        <button type = "button" class = "btn-buy"> buy now
                            <span><i class = "fas fa-shopping-cart"></i></span>
                        </button>
                    </div>
                </div>

                <div class = "product-info">
                    <div class = "product-info-top">
                        <h2 class = "sm-title">book</h2>
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                    </div>
                    <a href = "#" class = "product-name">r.zhelyazny "Vladeniya Haosa"</a>
                    <p class = "product-price">₸ 990.00</p>
                </div>

                <div class = "off-info">
                    <h2 class = "sm-title">10% off for reg</h2>
                </div>
            </div>
            <!-- end of single product -->
        </div>
    </div>
</div>






<!-- end of single -->

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
