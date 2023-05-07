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
1 => new Product( 1, "Hyundai I10", 18400 ),
2 => new Product( 2, "Toyota Yaris", 21320 ),
3 => new Product( 3, "Jaguar F-Pace", 12450 )
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
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Car Website Design</title>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/Login.css">
</head>
  
  <body>
  
  	<!-- Header -->
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
				<li><span style="color: orange">Basket</span></li>
                
            </ol>
        </div>	

	</header>
  
	<!-- Main content -->
<body>
<div class="center">
<h1> Your shopping cart </h1>
<dl>
<?php
$totalPrice = 0;
foreach ( $_SESSION["cart"] as $product ) {
$totalPrice += $product-> getPrice();
?>

<dt> <?php echo $product-> getName() ?> </dt>
<dd> £ <?php echo number_format( $product-> getPrice(), 2 ) ?>
<a href="Basket.php?action=removeItem&amp;productId= <?php echo $product-> getId() ?> "> Remove </a> </dd>
<?php } ?>
<dt> <br>Cart Total: </dt>
<dd> <strong> £ <?php echo number_format( $totalPrice, 2 ) ?> </strong> </dd>
</dl>


</div>
<?php
}
?>
</body>
</html>