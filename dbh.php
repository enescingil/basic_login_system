<?php

$conn = mysqli_connect("localhost", "root", "", "testlogin");

if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}

?>