<?php require 'config.php';
$sql = "SELECT * FROM `book`";
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Books Sorting</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<style type="text/css">
		img{
			height: 350px;
		}



* {
	box-sizing: border-box;
	}

.open-button {
  background-color: green;
  opacity: 0.8;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 200px;
}



.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
   border: 1px solid black;
  z-index: 50;
}

.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 5px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 5px 5px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom: 5px;
}

.form-container .cancel {
  background-color: red;
}

.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}




.open-button2 {
  background-color: red;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  
  right: 472px;
  width: 200px;
}

.form-popup2 {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 1px solid black;
  z-index: 50;
}

.form-container2 {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

.form-container2 input[type=text], .form-container2 input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 5px 0;
  border: none;
  background: #f1f1f1;
}

.form-container2 input[type=text]:focus, .form-container2 input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container2 .btn2 {
  background-color: #4CAF50;
  color: white;
  padding: 5px 5px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom: 5px;
  opacity: 0.8;
}

.form-container2 .cancel2 {
  background-color: red;
}

.form-container2 .btn2:hover, .open-button2:hover {
  opacity: 1;
}


.open-button3 {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 250px;
  width: 200px;
}

.form-popup3 {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 1px solid black;
  z-index: 50;
}

.form-container3 {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

.form-container3 input[type=text], .form-container3 input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 5px 0;
  border: none;
  background: #f1f1f1;
}

.form-container3 input[type=text]:focus, .form-container3 input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container3 .btn3 {
  background-color: #4CAF50;
  color: white;
  padding: 5px 5px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom: 5px;
  opacity: 0.8;
}

.form-container3 .cancel3 {
  background-color: red;
}

.form-container3 .btn3:hover, .open-button3:hover {
  opacity: 1;
}
</style>
	</style>
</head>
<body>
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
	<div class="container">
		

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
                    <input style="display:none;" type="text" name="pageid" value="<?= $row['AuthorID'] ?>">
                    <input style="display:none;" type="text" name="bookid" value="<?= $row['AuthorID'] ?>">

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
          </div>

        <?php
     
            }
        ?>
        	<div>
							<button class="open-button2" onclick="openForm()">Delete a Book</button>
							<div class="form-popup" id="myForm">
							  <form action="addbook.php" class="form-container" method="post">
							    <input placeholder="ISBN..." type="text" name="isbn" required>

							    <input placeholder="Publisher..." type="text" name="publisher" required>

							    <input placeholder="Title..." type="text" name="title" required>

							    <input placeholder="Price..." type="text" name="price" required>

							    <input placeholder="Description..." type="text" name="description" required>

							    <input placeholder="Poster..." type="text" name="poster" required>

							    <input placeholder="Language..." type="text" name="language" required>

							    <input placeholder="Rating..." type="text" name="rating" required>

							    <input placeholder="Genre 1..." type="text" name="genre1" required>

							    <input placeholder="Genre 2..." type="text" name="genre2" required>

							    <input placeholder="Genre 3..." type="text" name="genre3" required>

							    <button type="submit" class="btn">Add</button>
							    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
							  </form>
							</div>
						</div>

						<div>
							<button class="open-button2" onclick="openForm2()">Delete a Book</button>

							<div class="form-popup2" id="myForm2">
							  <form action="deletebook.php" class="form-container2" method="post">
							    <input placeholder="Delete" type="text" name="authorid" required>

							    <button type="submit" class="btn2">Delete</button>
							    <button type="button" class="btn2 cancel2" onclick="closeForm2()">Close</button>
							  </form>
							</div>
						</div>


							<div>
							<button class="open-button3" onclick="openForm3()">Edit a Book</button>

							<div class="form-popup2" id="myForm3">
							  <form action="editbook.php" class="form-container3" method="post">

							    <input placeholder="ID..." type="text" name="authorid" required>

							    <input placeholder="ISBN..." type="text" name="isbn" required>

							     <input placeholder="Publisher..." type="text" name="publisher" required>

							    <input placeholder="Title..." type="text" name="title" required>

							    <input placeholder="Price..." type="text" name="price" required>

							    <input placeholder="Description..." type="text" name="description" required>

							    <input placeholder="Poster..." type="text" name="poster" required>

							    <input placeholder="Language..." type="text" name="language" required>

							    <input placeholder="Rating..." type="text" name="rating" required>

							    <input placeholder="Genre 1..." type="text" name="genre1" required>

							    <input placeholder="Genre 2..." type="text" name="genre2" required>

							    <input placeholder="Genre 3..." type="text" name="genre3" required>

							    <button type="submit" class="btn3">Edit</button>
							    <button type="button" class="btn3 cancel3" onclick="closeForm3()">Close</button>
							  </form>
							</div>

							

							
						</div>
					</div>
				</div>

		</div>
	</div>
	<script>
							function openForm() {
							  document.getElementById("myForm").style.display = "block";
							}

							function closeForm() {
							  document.getElementById("myForm").style.display = "none";
							}

							function openForm2() {
							  document.getElementById("myForm2").style.display = "block";
							}

							function closeForm2() {
							  document.getElementById("myForm2").style.display = "none";
							}

							function openForm3() {
							  document.getElementById("myForm3").style.display = "block";
							}

							function closeForm3() {
							  document.getElementById("myForm3").style.display = "none";
							}
							</script>
</body>
</html>