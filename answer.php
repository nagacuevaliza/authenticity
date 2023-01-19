<?php
require("dbconnect.php");

// if(!isset($_GET['id'])){
// 	echo "Укажите id страницы.";
// 	exit;
// }

// $result = $conn->query("SELECT * FROM info WHERE LicenceNumber=".$_GET['license_number']);

$result = mysqli_query($connect, "SELECT * FROM info WHERE LicenceNumber=".$_POST['license_number']);

if(!$result || mysqli_num_rows($result) == 0){
	echo "В базе данных нет организациии с таким номером лицензии.";
	exit;
}

$agency = mysqli_fetch_assoc($result);
$title = $agency["Name"];
$address = $agency["Address"];
$services = $agency["Services"];
$validity = $agency["Validity"];
$inn = $agency["INN"];
$ogrn = $agency["OGRN"];

require("display_answer.php");

?>

