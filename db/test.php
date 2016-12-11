<?php
  $db = new PDO('sqlite:munkee.db');

  $stmt = $db->prepare('SELECT * FROM restaurante');
  $stmt->execute();
  $result = $stmt->fetchAll();

  foreach( $result as $row) {
    echo '<h1>' . $row['name'] . '</h1>';
    echo '<p>' . $row['id'] . '</p>';
  }

?>