<?php
$host = "localhost";
$database = "mrvoit_hostel";
$password = "Ipz16294b";




$db = new PDO(
    "mysql:host=$host;",
    $database,
    $password
);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("use `$database`");
