<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
</head>
	
<body>
<?php include "/Homepage/navbar.php"?>
<form id="loginform" action="PostQuestionsCheck.php" method="post">
  Topic:<br>
  <input type="text" name="inputtopic" value="">
  <br>
  Title:<br>
  <input type="text" name="inputtitle" value="">
  <br>
  Description:<br>
  <input type="text" name="inputdescription" value="">
  <br>
  File:<br>
  <input type="text" name="inputfile" value="">
  <br>
  <input type="submit" value="Submit">
</form>



</body>
</html>


