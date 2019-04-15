<?php

  $servername = "localhost";
  $username = "gosia";
  $password = "gosia";
  $dbname = "sharusers";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed");
  }
?>
