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
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login <span>Successful</span> </center></h1>";
			
			$link_address1 = 'Home.php';
			echo "<center><div class='button'><a href='".$link_address1."'>Home</a></div></center>";
			
        }  
        else{  
            echo "<h2>Invalid username or password.</h2>";  
			$link_address1 = 'Login.php';
			echo "<center><a href='".$link_address1."'>Return</a><center>";
        }     
?>  

</div>
</body>
</html>