<?php
$env = parse_ini_file('./.env');
$dbPassword = getenv('PASSWORD');
$hostName = "localhost";
$dbUser = "root";

$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>