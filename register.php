<?php
require("dbconnect.php");


if(!empty($_GET)){
    $result = mysqli_query($connect, "SELECT * FROM users WHERE email=\"".$_GET['email']."\"");

	if(!$result || mysqli_num_rows($result) == 0){
		mysqli_query($connect, "INSERT INTO users (firstname, lastname, email, hash) VALUES (
            \"".$_GET["firstname"]."\",
            \"".$_GET["lastname"]."\",
            \"".$_GET["email"]."\",
            \"".md5($_GET["password"])."\" 
            )"
        );
        
	}
	require("signin.php");
}

?>

