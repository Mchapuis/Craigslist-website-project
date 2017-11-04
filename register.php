 <?php
$servername = "localhost";
$username = 'root';
$password = "";
$database_name ='final_project';

// create a table called users with components username, address, province and city

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br/>";

// getting the username
if(isset($_POST["username"])){
	$username = $_POST["username"];
	echo "The user name is: $username <br/>";
}else{
	echo "something is wrong with the user name <br/>";
}

// insert into users
$sql= "INSERT INTO users (username, address, province, city) VALUES (' ".$username." ', '341 rue alberto', 'Quebec', 'city')";

if($conn->query($sql) == TRUE){
	echo "New record in database <br/>";
}else{
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?> 