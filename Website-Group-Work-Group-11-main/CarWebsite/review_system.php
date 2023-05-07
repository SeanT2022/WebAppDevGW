<html>
<link rel="stylesheet" href="css/Password.css">
<body>
  
  	<!-- Header -->
	<body>
	<header>
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

	</header>
	
	<div class="center">

	
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="car_dealership";

$conn=mysqli_connect($server_name, $username, $password, $database_name);
//check Conbnection
if(!$conn){
	die("Connection Failed" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$rating = $_POST['rating'];
	$review = $_POST['review'];
	
	$sql_query = "INSERT INTO rev (name,rating,review)
	VALUES ('$name','$rating','$review')";
	
	if(mysqli_query($conn, $sql_query))
	{
		echo "<center><h1>Your Review has been submitted</h1></center>";
		$link_address1 = 'Shopping.php';
		echo "<center><a href='".$link_address1."'>Return</a></center>";
	}
	else
	{
		echo "Error: " . $sql . "" . mysql_error($conn);
	}
	mysqli_close($conn);
}
?>

</div>
</body>
</html>