<?php
  include 'db_connection.php';

  $id = $_POST['id'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  $sql = "update notes set title='$title', content='$content' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: index.php");
  
?>