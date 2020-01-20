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

<?php $login = "0";
	  $username = $_POST["inputusername"];
	  $password = $_POST["inputpassword"];
	  $firstname = $_POST["inputfirstname"];
	  $middlename = $_POST["inputmiddlename"];
	  $lastname = $_POST["inputlastname"];
	  $phonenum = $_POST["inputphonenum"];
	  $email = $_POST["inputemail"];
	  
	  $sql = "CALL SignUpInsert ('$firstname', '$middlename','$lastname','$username','$password','$email','$phonenum')";
	  $result = mysqli_query($conn, $sql);
	  while ($row = mysqli_fetch_array($result, MYSQLI_BOTH))
      {
        $result1 = $row[0];
      }

	  if($result1 == '1') {
		echo "Successfully insert";
	  } else {
		echo "failed to insert, UserName Exists.";
	  }
	  
?>	  