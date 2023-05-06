<?php
$dbhost="localhost";
$dbname="portfolio";
$dbuser="root";
$dbpass="";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn) die();
?>