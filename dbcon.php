<?php 
$hostname="localhost";
$username="admin";
$password="pass";
$database="rishton_academy_primary_school";

$dbcon=mysqli_connect($hostname,$username,$password,$database);
if(!$dbcon){
	echo mysqli_error($dbcon);
}
