<?php
  include 'db_connection.php';
  $id = $_GET['id'];
  $sql = "delete from notes where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>
