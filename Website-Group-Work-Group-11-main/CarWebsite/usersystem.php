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
                <li><span style="color: orange">Login</span></li>
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
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql_query = "INSERT INTO users (username,password)
	VALUES ('$username','$password')";
	
	if(mysqli_query($conn, $sql_query))
	{
		echo "<center><h1>Registration Successful</h1></center>";
		$link_address1 = 'Login.php';
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