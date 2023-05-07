<?php
session_start();
// define class Product
class Product {
private $productId;
private $productName;
private $price;
public function __construct( $productId, $productName, $price ) {
$this-> productId = $productId;
$this-> productName = $productName;
$this-> price = $price;
}
public function getId() {
return $this-> productId;
}
public function getName() {
return $this-> productName;
}
public function getPrice() {
return $this-> price;
}
}
$products = array(
2 => new Product( 2, "Toyota Yaris", 21320 )
);
if ( !isset( $_SESSION["cart"] ) ) $_SESSION["cart"] = array();
if ( isset( $_GET["action"] ) and $_GET["action"] == "addItem" ) {
addItem();
} elseif ( isset( $_GET["action"] ) and $_GET["action"] == "removeItem" ) {
removeItem();
} else {
displayCart();
}
function addItem() {
global $products;
if ( isset( $_GET["productId"] ) and $_GET["productId"] >= 1 and $_GET["productId"] <= 3 ) {
$productId = (int) $_GET["productId"];
if ( !isset( $_SESSION["cart"][$productId] ) ) {
$_SESSION["cart"][$productId] = $products[$productId];
}
}
header( "Location: Basket.php" );
}
function removeItem() {
global $products;
if ( isset( $_GET["productId"] ) and $_GET["productId"] >= 1 and $_GET["productId"] <= 3 ) {
$productId = (int) $_GET["productId"];
if ( isset( $_SESSION["cart"][$productId] ) ) {
unset( $_SESSION["cart"][$productId] );
}
}
header( "Location: Basket.php" );
}
function displayCart() {
global $products;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Website Design</title>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/Car5.css">
</head>
<body>

	<div id="container">
        <div id="navbar">
            <ul></ul>
            <div id="logo">
				<img src="Images/Car.png" alt="">
			</div>
			<div id="headerSection">
				<h1>NEP JR'S</h1>
			</div>
            <ol>
				<li><a href="Home.php">Home</a></li>
                <li><a href="Shopping.php">Shopping</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="Basket.php">Basket</a></li>
            </ol>
        </div>
		
		<div class="hero">
			<div class="row">
				<div class ="text-sec">
					<h1 class="heading"> Toyota <span> Yaris </span> </h1>
				</div>
			</div>
		</div>
		
		<div class="back">
			<div class="back2">
				<div class ="back3">
					<h3 class="back"><a href="Shopping.php">< Previous<a/></h3>
				</div>
			</div>
		</div>
		
		
		<div id="Car">
		<br>
            <img src="Images/Car5.png" alt="">
        </div>
		
		<div id="Details">
		<br>
			<img src="Images/Details2.png" alt="">	
		</div>		
		
	</div>
</body>
</html>

<div class="bg2">
<h3>Look at the Reviews Below:</h3>
</div>

<div class ="bg">

<div class="hero">
<div class="row">						
<div class ="box1-sec">


<div class="inner">
      <div class="row">
        <div class="col">
          <div class="review">
            <div class="title">Callum</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
            </div>
            <p>
              Good Car, quite fast!
            </p>
          </div>
        </div>
		</div>
		
</div>

<div class ="box2-sec">
<div class="inner">
      <div class="row">
        <div class="col">
          <div class="review">
            <div class="title">Jack</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p>
              Love my car, Hate this one though.
            </p>
          </div>
        </div>
		</div>
		
</div>
</div>
<div class ="box3-sec">
<div class="inner">
      <div class="row">
        <div class="col">
          <div class="review">
            <div class="title">Peter</div>
            <div class="stars">
              <i class="fas fa-star"></i>
            </div>
            <p>
              Great family car, No family to drive with though.
            </p>
          </div>
        </div>
		</div>
		
</div>
</div>

</div>

</div>
</div>


<div class="row">
<div class="col last">

			<div class="center">
			<h2>Add a Review</h2>
			<form action="review_system2.php" method="post">
				<div class="txt">
					<label>Name:</label>
					<input type="text" name="name" required>
				</div>
				<div class="txt">
				<label>Rating:</label>
					<select id="rating" name="rating">
						<option value="">Select a rating</option>
						<option value="5">5 stars</option>
						<option value="4">4 stars</option>
						<option value="3">3 stars</option>
						<option value="2">2 stars</option>
						<option value="1">1 star</option>
					</select>
				</div>
				
				<div class="txt">
					<label>Review:</label>
					<textarea id="review" name="review" rows="5" required></textarea>
				</div>
				
				<div class="button">
					<button type="submit" name="save" value="Submit">Submit</button>
				</div>
			</form>
		</div>
		
</div>
</div>




<div style = "position:relative; left:1050px; top:-800px; font-size: 50px; width: 300px;">
<dl>
<?php foreach ( $products as $product ) { ?>
<dd> <a href="Basket.php?action=addItem&amp;productId= <?php echo $product-> getId() ?> " > Add to Cart </a> </dd>
<?php } ?>
</dl>
</div>

</div>
</div>
<?php
}
?>