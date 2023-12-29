<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "incas";

$conecction = new mysqli($server, $user, $pass, $db);

$conecction -> set_charset("utf8");

?>