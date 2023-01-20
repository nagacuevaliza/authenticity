<?php
require("dbconnect.php");

// $result = mysqli_query($connect, "SELECT * FROM info WHERE LicenceNumber=\"".mysqli_escape_string($connect, $_POST["license"])."\")";

// $result = mysqli_query($connect, "SELECT * FROM info WHERE LicenceNumber=".$_POST['license_number']);
// $agency = mysqli_query($connect, "SELECT * FROM users WHERE id=".$page["user_id"]);

if(!empty($_GET)){
    $result = mysqli_query($connect, "SELECT * FROM info WHERE LicenceNumber=\"".$_GET['license']."\"");
	// $result = mysqli_query($connect, "SELECT * FROM info WHERE LicenceNumber=\"ФС-99-01-009224\"");
    // echo mysqli_num_rows($result);


	if(!$result || mysqli_num_rows($result) == 0){
		// echo "В базе данных нет организациии с таким номером лицензии.";
		// exit;
		$not_license = $_GET['license'];
		require("not_found_answer.php");
	}
	else {
		// $check = isset($_GET['license']) ? $_GET['license'] : 255;
		// echo $check;

		// $agency = mysqli_query($connect, "SELECT * FROM info WHERE LicenceNumber=\"".$_POST['license']."\"");


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

