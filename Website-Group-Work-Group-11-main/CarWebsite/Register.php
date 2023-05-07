<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Car Website Design</title>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/Register.css">
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
                <li><span style="color: orange">Login</span></li>
                <li><a href="Basket.php">Basket</a></li>
            </ol>
        </div>

	</header>
  
	<!-- Main content -->
		<div class="center">
			<h1>Register an Account</h1>
			<form action="usersystem.php" method="post">
				<div class="txt">
					<input type="text" name="username" required>
					<label>Username</label>
				</div>
				<div class="txt">
					<input type="password" name="password" required>
					<label>Password</label>
				</div>
				
				<div class="button">
					<input type="submit" name="save" value="Register">
				</div>
				
				<div class="link">
					Already have an account? <a href="Login.php">Log In</a>
				</div>
			</form>
		</div>
	
	<!-- Footer -->

  </body>
</html>