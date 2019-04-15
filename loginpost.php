<?php session_start();?>
<?php
include('sharusersconnect.php');
$Username = $_SESSION['Username'];
$Password = $_SESSION['Password'];

$mysqli = "SELECT * FROM sharlogisticsusers WHERE Username = '$Username'";;
$mysqli_result = mysqli_query($conn, $mysqli);

  if (mysqli_num_rows($mysqli_result) == 1){
    $row = mysqli_fetch_assoc($mysqli_result);
    if ($Password == $row['Password']){
      if ($row['Function'] == "administrator"){
      $_SESSION['Name'] = $row['Name'];
      header("Location: http://localhost/project5/administratorpage.php");
      }
      else {
        header("Location: http://localhost/project5/normaluserpage.php");
      }
    }
    else {
        header("Location: http://localhost/project5/wrongcredredirect.php");
    }
  }
?>
