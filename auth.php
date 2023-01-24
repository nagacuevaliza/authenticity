<?php
require("dbconnect.php");

$result = mysqli_query($connect, "SELECT * FROM users WHERE
    email='".$_GET["email"]."' AND
    hash='".md5($_GET["password"])."'
");

//echo $_GET["email"];
//echo md5($_GET["password"]);

if(!$result || mysqli_num_rows($result) == 0){
	echo "Такой пользователь не существует.";
	exit;
}

session_start();
$_SESSION = mysqli_fetch_assoc($result);
$firstname = $_SESSION["firstname"];
$lastname = $_SESSION["lastname"];
$email = $_SESSION["email"];

$session_user = $_SESSION;
require ("userpage.php");

// header("Location: allpages.php");

?>