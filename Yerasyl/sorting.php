<?php require 'config.php';?>

<?php
$sql = "SELECT * FROM `book`";
 
if($_POST['select']) {
    
$select=$_POST['select'];
	switch ($select) {

		case "a_z":
	  	$sql = "SELECT * FROM `book` ORDER BY Title";
	    break;

		case "z_a":
	    $sql = "SELECT * FROM `book` ORDER BY Title DESC";
	    break;

		case "priceMin":
	 	$sql = "SELECT * FROM `book` ORDER BY price";
	    break;
	    
	    case "priceMax":
	  	$sql = "SELECT * FROM `book` ORDER BY price DESC ";
	    break;

	    case "ratingMax":
	  	$sql = "SELECT * FROM `book` ORDER BY rating DESC ";
	    break;
	} 
}
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
		</style>
	</head>
	<body>
		<div class="container">
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
										<?= $row['Title']; ?>	
									</h6>
								</div>
								<div class="card-body">
									<h4 class="card-title text-danger">Price: <?= $row['Price'];?>$</h4>
									<p>
										Rating : <?= $row['Rating'];?>⭐
									</p>
									<a href="#" class="btn btn-success btn-block">Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
				<?php
	    			}
				?>
			</div>
		</div>
	</body>
</html>