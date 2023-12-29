<?php

session_start();

echo "HELLO WORLD";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<input type="submit" value="signup">
<input type="submit" value="login">

<?php

$button=$_REQUEST['submit'];

switch($button){

    case "signup": header('Location:./views/Signup.php');
    break;
    case "login":header('Location:./views/Login.php');
    break;

}

?>
</body>
</html>