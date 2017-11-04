<?php

// getting the username
if(isset($_POST["username"])){
	$username = $_POST["username"];
	echo "The user name is: $username";
}else{
	echo "something is wrong with the user name";
}

?>