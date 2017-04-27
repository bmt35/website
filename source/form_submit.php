<?php
	$fname=$_REQUEST["fname"];
	$lname=$_REQUEST["lname"];
	$phone=$_REQUEST["phone"];
	$email=$_REQUEST["email"];
	$msg=$_REQUEST["msg"];

	$uname = "root";
    $pword = "";
    //make the database connection
    $db = mysqli_connect('localhost','root','','contact') or die('Error connecting to MySQL server.');
    $query = "INSERT INTO contactform (first_name, last_name, phone, email, message) VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', '$message')";
    mysqli_query($db, $query) or die('Error querying database.');
	
?>