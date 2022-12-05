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
<style>
    form input{
      margin:2pt;
    }
  </style>
</head>
<body>
	<div class="container">
<h1>Register</h1>
<form id="form" name="form" action="insert.php" onsubmit="return checkEmpty();" method="post">
  <h3>Fill Your Information!</h3>
  <label for="fname">Firstname :</label>
  <input class="form-control" id="fname" name="fname" type="text">
  <br/>
  <label for="sname">Surname :</label>
  <input class="form-control" id="sname" name="sname" type="text">
  <br/>
  <label for="uname">Username :</label>
  <input class="form-control" id="uname" name ="uname" type="text" onblur="checkUser()" ><span id="message"></span>
  <br/>
  <label for="pword">Password :</label>
  <input class="form-control" id="pword" name="pword" type="password">
  <br/>
  <label for="email">Email :</label>
  <input  class="form-control" id="email" name="email" type="text">
  <br>
  <input class="btn btn-success" id="submit" name="submit" type="submit" value="Submit">
</form>
</div>
</body>
