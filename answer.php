<?php
require("dbconnect.php");

if(!empty($_GET)){
    $result = mysqli_query($connect, "SELECT * FROM info WHERE LicenceNumber=\"".$_GET['license']."\"");

	if(!$result || mysqli_num_rows($result) == 0){
		$not_license = $_GET['license'];
		require("not_found_answer.php");
	}
	else {
		$agency = mysqli_fetch_assoc($result);
		$title = $agency["Name"];
		$licence = $agency["LicenceNumber"];
		$address = $agency["Address"];
		$services = $agency["Services"];
		$validity = $agency["Validity"];
		$inn = $agency["INN"];
		$ogrn = $agency["OGRN"];

		require("display_answer.php");
	}
	
}

?>

