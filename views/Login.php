<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="../ajax/validation.js"></script>

</head>

  <body>

  <form action="../private/controller/logincontroller.php" id="form">

<label for="username">Enter your Username</label>
<input type="text" name="uname" id="uname">

<br>

<label for="password">Enter your Password</label>
<input type="password" name="upassword" id="upassword">

<br>

<input type="submit" name="submit" value="get" id="submitbtn">

  </form>

  </body>

</html>