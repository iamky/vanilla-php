<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION["username"] ?></title>
</head>
<body>

<p>welcome <?php echo $_SESSION["username"] ?></p>

<form action ="logout.php">

<input type="submit" value="logout">

</form>

<form action ="../private/controller/usercontroller.php" id="editform">
<label for="newusername">Enter your New Username</label>
<input type="text" name="newuname" id="newuname">
<input type="submit" value="edit">

</form>

<form action ="../private/controller/usercontroller.php" id="deleteform">

<input type="submit" value="delete">

</form>

</body>
</html>