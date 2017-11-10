 <?php
 
 // connect to database
 require 'connection_DB.php';
 
// create a table called users with components username, address, password

// GET VARIABLES FROM USERS
// get username
if(isset($_POST["username"])){
	$username = $_POST["username"];
	echo "The user name is: $username <br/>";
}else{
	echo "something is wrong with the user name <br/>";
}

// get address
if(isset($_POST["address"])){
	$address = $_POST["address"];
	echo "The user name is: $address <br/>";
}else{
	echo "can't get address<br/>";
}
// get password
if(isset($_POST["password"])){
	$password = $_POST["password"];
	echo "the password is $password <br/>";
}else{
	echo "can't get password<br/>";
}

// transform input to prevent mysql injections
settype($username, "string");
settype($address, "string");
settype($password, "string");

// scan database to see if the username already exists. If yes, fail to register
$scan_DB = "SELECT username FROM users WHERE username = '$username'";

// getting result from query
$result = $conn->query($scan_DB);

// send error if user already exist
if(is_null($result)){
	$sql= "INSERT INTO users (username, address, password) VALUES ( '$username' , '$address', '$password')";

	if($conn->query($sql) == TRUE){
		echo "New record in database <br/>";
	}else{
		echo "Error: ".$sql."<br>".$conn->error;
	}
}else{ // if a user with the same username already exist, send an error message
	echo "A username with the same name already exists in the database, please try again!";
}

$conn->close();
?> 