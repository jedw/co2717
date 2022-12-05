<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
        > 
</head>
<body>
<h1>Login</h1>
    <form method="POST" name="frmLogin" action="<?php echo site_url('login/login_post');?>">
        <label for="username">Username:</label>
        <br>
        <input class="form-control" type="text" name="username" id="username">
        <label for="password">Password:</label>
        <br>
        <input class="form-control" type="password" name="password" id="password">
        <input class="btn btn-primary" type="submit" value="regsiter" name="submit">
    </form>
</body>
</html>