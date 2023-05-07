<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="car_dealership";

$conn=mysqli_connect($server_name, $username, $password, $database_name); 
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 