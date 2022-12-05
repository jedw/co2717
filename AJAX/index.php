<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="checkscript.js"></script>
<script>
  $( document ).ready(function() {
      $("#submit").prop('disabled',true);
  });
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
<h1>Register</h1>
<form id="form" name="form" action="insert.php" onsubmit="return checkempty();" method="post">
  <h3>Fill Your Information!</h3>
  <label>Firstname :</label>
  <input class="form-control" id="fname" name="fname" type="text">
  <br/>
  <label>Surname :</label>
  <input class="form-control" id="sname" name="sname" type="text">
  <br/>
  <label>Username :</label>
  <input class="form-control" id="uname" name ="uname" type="text" onblur="checkUser()" ><span id="message"></span>
  <br/>
  <label>Password :</label>
  <input class="form-control" id="pword" name="pword" type="password">
  <br/>
  <label>Email :</label>
  <input  class="form-control" id="email" name="email" type="text">
  <br>
  <input class="btn btn-success" id="submit" name="submit" type="submit" value="Submit">
</form>
</div>
</body>
