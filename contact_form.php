<?php

$a = $_POST["title"];
$b = $_POST["email"];
$c = $_POST["comment"];

$servername = "localhost";
$user_name = "root";
$pass_word = "";
$dbname = "wec";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "INSERT INTO `contact`(`title`, `email`, `comment`) VALUES ('$a','$b','$c')";

if (mysqli_query($conn,$sql)) {
	echo "<script> alert('Account created Succesfully');
	window.location.assign('index.html')</script>";
	# code...
}
else{
		echo " Account not created";
}
mysqli_close($conn);
?>