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

<form action ="edit.php">

<input type="submit" value="edit">

</form>

<form action ="delete.php">

<input type="submit" value="delete">

</form>

</body>
</html>