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
                <li><span style="color: orange">Login</span></li>
                <li><a href="Basket.php">Basket</a></li>
            </ol>
        </div>	

	</header>
  
	<!-- Main content -->
		<div class="center">
			<h1>Login to Account</h1> 
			<form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST"> 
				<div class="txt">
					
					<input type="text" required name="username" id="username" value="" />
					<label>Username</label>
				</div>
				<div class="txt">					
					<input type="password" required name="password" id="password" value="" />
					<label>Password</label>
				</div>
				
				<div class="button">
					<input type="submit" name="login" value="Login" />
				</div>
				
				<div class="link">
					Don't have an account? <a href="Register.php">Register</a>
				</div>
			</form>
		</div>
	</section>
	
	<!-- Footer -->
	<script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>

  </body>
</html>