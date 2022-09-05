<?php

$dbhost = "127.0.0.1";
$dbuser = "phptest";
$dbpass = "987654321";
$dbname = "phptest";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
