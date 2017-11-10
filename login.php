<?php

 // connect to database
 require 'connection_DB.php';
 
 // get the username
 if(isset($_POST["username"])){
	$username = $_POST["username"];
	echo "The user name is: $username <br/>";
}else{
	echo "something is wrong with the user name <br/>";
}

// get the password
if(isset($_POST["password"])){
	$password = $_POST["password"];
	echo "The user name is: $password <br/>";
}else{
	echo "something is wrong with the password <br/>";
}

// Check in the database if the username exists
// sert up the variables against sql injections
settype($username, "string");
settype($password, "string");

// Check in the database if the password is matching
$sql_pass = "SELECT password FROM users WHERE username = '$username'";

// getting the result from the query
$results = $conn->query($sql_pass);

if(is_null($results)){
	echo "You had a problem with the user or password, please try again";
}else{
	// loop throught the result object
	while($row = $results->fetch_assoc()){
		if($row['password'] == $password  ){
			echo "You entered a valid password and username";
		}else{
			echo "Failed login";
		}
	}
	
}

?>