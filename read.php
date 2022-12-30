<?php
  include 'db_connection.php';
  error_reporting(E_ALL ^ E_WARNING);
  $sql = "select * from notes";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
   
    if ($row['id'] == $_GET['id']) {
      echo '<form class="form-inline m-2" action="update.php" method="POST">';
      echo '<table>';
      echo '<th><input type="text" name="title" value="' . $row['title'] . '"></th>';
      echo '<tr><td><input type="text" name="content" value="' . $row['content'] . '"></td></tr>';
      echo '<tr><td><button type="submit">Save</button></td></tr>';
      echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
      echo '</table>';
      echo '</form>';
    }
    else {
      echo '<table>';
      echo "<th>" . $row['title'] ."</th>";
      echo '<th><a href="index.php?id=' . $row['id'] . '" role="button"><span class="material-symbols-outlined">edit</span></a></th>';
      echo '<th><a href="delete.php?id=' . $row['id'] . '" role="button"><span class="material-symbols-outlined">delete</span></a></th>';
      echo "<tr><td>" . $row['content'] . "</td></tr>";
      echo '</table>';
    }
  }
  $conn->close();
?>