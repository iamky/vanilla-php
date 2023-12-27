<?php

session_start();


include ('../config/config.php');


$name = htmlspecialchars(trim($_REQUEST['uname']));

$password = htmlspecialchars(trim($_REQUEST['upassword']));

$button=$_REQUEST['submit'];

if($button=="get"){

    $query = "SELECT FROM users WHERE username='$name' And password='$password';";

    $exc=mysqli_query($conn,$query);

    $norows = mysqli_num_rows($exc);

    if($norows>=1){

        // while($userinfo=mysqli_fetch_assoc($exc)){

        //     echo "Username = ".$userinfo['username']; //."<br>".$userinfo['password']

        // }

        $_SESSION['username'] = $name;
        header("../../views/user.php");

    }

    else{ echo "No User Found...";}

}

?>