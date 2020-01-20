<?php session_start();?>

<?php
	$servername = "localhost";
	$username = "JIAHUI";
	$password = "Zjh19940303";
	$db = "TutorHub";
	$conn = mysqli_connect($servernamem, $username, $password, $db);
	
	if(!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	} else {
	echo "Connected Successfully.";
	}




$sql = "create PROCEDURE SignUpInsert\n"

    . "	(IN FirstName varchar(50)\n"

    . "   ,IN MiddleName varchar(50)\n"

    . "   ,IN LastName varchar(50)\n"

    . "   ,IN UserName varchar(50)\n"

    . "   ,IN HashPassword varchar(50)\n"

    . "   ,IN Email varchar(50)\n"

    . "   ,IN PhoneNum varchar(50)\n"

    . "   ,OUT Result INT(10))\n"

    . "BEGIN\n"

    . "\n"

    . "	if EXISTS(SELECT UserName\n"

    . "             	from UserInfo\n"

    . "             	where UserName = UserName)\n"

    . "    \n"

    . "    THEN\n"

    . "		select Result = 0ELSE\n"

    . "    \n"

    . "		INSERT INTO person (FirstName, MiddleName, LastName, PhoneNum, Email) VALUES (PersonID, FirstName,MiddleName, LastName, PhoneNum, Email)INSERT INTO UserInfo(UserName, HashPassword) VALUES (UserName, HashPassword)select Result = 1END IFEND";
	
?>

<?php $login = "0";
	  $username = $_POST["inputusername"];
	  $password = $_POST["inputpassword"];
	 
	  if ($username == "GUAPI" && $password == "123") {
		$login = '1';
		$_SESSION["username"] = $username;
	  } else {
		$login = '0';
	  }
	 echo $login;
	 $_SESSION["loginstatus"] = $login;
	 header("Location: Test.php"); 
?>	  