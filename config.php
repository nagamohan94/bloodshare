<?php

$servername="localhost";
$username="root";
$psd="";
$db="blood donate";
$connection=mysqli_connect($servername,$username,$psd,$db);
if(!$connection){
	die("connection failed :");
}
//echo "connected successfully";



?>