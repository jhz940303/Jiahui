<?php session_start();?>

<?php
	$servername = "localhost";
	$username = "JIAHUI";
	$password = "Zjh19940303";
	$db = "TutorHub";
	$conn = mysqli_connect($servername, $username, $password, $db);
	
	if(!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	} else {
	echo "Connected Successfully.";
	}
?>

<?php 
	  $title = $_POST["inputtitle"];
	  $topic = $_POST["inputtopic"];
	  $description = $_POST["inputdescription"];
	  $file = $_POST["inputfile"];
	  
      $sql = "CALL PostQuestions('$topic', '1', '$title', '$description', '$file')";
	  $result = mysqli_query($conn, $sql);  
?>	  

