<?php

  include('sharusersconnect.php');
  session_start();

  $username = $_POST['Username'];
  $password = $_POST['Password'];

  $sql = "SELECT * FROM sharlogisticsusers WHERE Username = '$Username'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    if ($password == $row['Password']){
      $_SESSION['Function'] = $row['Function'];
      $Function = $_SESSION['Function'];
      header("Location: http://www.google.com");
      $_SESSION['Username'] = $row['Username'];
      echo $Function;
    }
  }

?>
