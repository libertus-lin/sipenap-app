<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "app_sipenap";

return new PDO("mysql:host=$host;dbname=$db", $user, $pass, array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
