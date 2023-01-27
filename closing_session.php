<?php
require("./session.php");
session_destroy();
$session_user = false;
require("./index.php");
// header("Location: allpages.php");
?>