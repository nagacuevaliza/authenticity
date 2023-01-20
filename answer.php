<?php
require("dbconnect.php");

// $result = mysqli_query($connect, "SELECT * FROM info WHERE LicenceNumber=\"".mysqli_escape_string($connect, $_POST["license"])."\")";

// $result = mysqli_query($connect, "SELECT * FROM info WHERE LicenceNumber=".$_POST['license_number']);
// $agency = mysqli_query($connect, "SELECT * FROM users WHERE id=".$page["user_id"]);

if(!empty($GET)){
	echo " not empty";
    $result = mysqli_query($connect, "SELECT * FROM info WHERE LicenceNumber=\"".$GET['license']."\"");
	echo $GET['license'];
    echo mysqli_num_rows($result);


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

	$check = isset($GET['license']) ? $GET['license'] : 255;
	echo $check;

	// $agency = mysqli_query($connect, "SELECT * FROM info WHERE LicenceNumber=\"".$_POST['license']."\"");


}

require("display_answer.php");

?>

