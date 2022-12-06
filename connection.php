<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "house";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die(mysqli_connect_error())
	;
}
