
<?php
// DATABASE VARIABLES
$servername = "localhost";
$username = 'root';
$password = "";
$database_name ='final_project';


// CONNECTION
// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br/>";
?>