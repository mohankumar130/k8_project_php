<?php
//server with default setting (user 'root' with no password)
$host = '10.11.0.17';  // server 
$user = 'root';   
$pass = "12345678";   
$database = 'demodb';   //Database Name  

// establishing connection
  $conn = mysqli_connect($host,$user,$pass,$database);   

 // for displaying an error msg in case the connection is not established
  if (!$conn) {                                             
    die("Connection failed: " . mysqli_connect_error());     
  }
?>


