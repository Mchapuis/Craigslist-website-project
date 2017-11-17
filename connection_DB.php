
<?php
//////////////////// DATABASE VARIABLES

/////////////////// if using dumbledore
// PUTTY query 
/*
$ip = 'login.encs.concordia.ca';
$port = '22';
$requete = "putty $ip $port";
exec($reqete);

$servername = "wvc353_2.encs.concordia.ca";
$username = 'wvc353_2';
$password = "qazwfp11";
$database_name ='final_project'; 
*/
/* this is not working...
shell_exec("ssh -fNg -L 3307:$dbServerHost:3306 user@remote_host");
$conection = new mysqli($dbServerHost, $username, $password, $dbname, 3307);
*/

//////////////////// end of dumbledore

//////////////////// if using local database
$servername = "localhost";
$username = 'root';
$password = "";
$database_name ='final_project'; 
////////////////// end of local


// CONNECTION
// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br/>";
?>