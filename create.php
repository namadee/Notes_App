<?php

include('db_connection.php');
$title = $_POST['title'];
$content = $_POST['content'];
$sql = "INSERT INTO notes (title,content) VALUES ('$title','$content') ";
$conn->query($sql);
$conn->close();
header('location: index.php');


?>