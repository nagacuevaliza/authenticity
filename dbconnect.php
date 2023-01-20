<?php
$connect = mysqli_connect("localhost", "root", "", "licenses");
mysqli_set_charset($connect, "utf8");
// $connect = mysqli_connect('std-2004.ist.mospolytech.ru', 'std_2004_licenses', '12345678', 'std_2004_licenses');
// mysqli_set_charset($connect, "utf8");

if (!$connect) {
    die("Не удалось подключиться к базе данных!".mysqli_connect_error());
}
?>