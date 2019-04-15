<?php
session_start();


// username and password sent from form

$Username= (isset($_POST['Username']))?$_POST['Username']:"missing";
$Password = (isset($_POST['Password']))?$_POST['Password']:"missing";

$_SESSION['Username']=$Username;

$_SESSION['Password']=$Password;

header("Location:loginpost.php");
?>
