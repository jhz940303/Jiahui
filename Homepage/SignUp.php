<!DOCTYPE html>
<html>
<head>
</head>
	
<body>
<?php include "navbar.php"?>
<form id="loginform" action="SignUpCheck.php" method="post">
  FirstName:<br>
  <input type="text" name="inputfirstname" value="">
  <br>
  MiddleName:<br>
  <input type="text" name="inputmiddlename" value="">
  <br>
  LastName:<br>
  <input type="text" name="inputlastname" value="">
  <br>
  PhoneNum:<br>
  <input type="text" name="inputphonenum" value="">
  <br>
  Email Address:<br>
  <input type="text" name="inputemail" value="">
  <br>
  Username:<br>
  <input type="text" name="inputusername" value="Type Username">
  <br>
  Password:<br>
  <input type="password" name="inputpassword" value="Type Password">
  <br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>