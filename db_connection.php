<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$server = 'localhost';
$userName =  'root';
$password = '';
$databaseName = 'notes';

$conn = new mysqli($server, $userName, $password, $databaseName);

 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}
?>