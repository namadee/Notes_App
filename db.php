<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  // collect value of input field
  $title = $_REQUEST['title'];
  $content = $_REQUEST['content'];

  $sql = "INSERT INTO notes  VALUES ('$title',
  '$content')";

  // if (empty($title)) {
  //     echo "data is empty";
  // } else {
  //     echo $title;
  // }
}

// Closing the connection.
$conn->close();
?>




</html>