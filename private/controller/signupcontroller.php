<?php

include ('../config/config.php');

$name = htmlspecialchars(trim($_REQUEST['uname']));

$password = htmlspecialchars(trim($_REQUEST['upassword']));

$button=$_REQUEST['submit'];

if($button=='save'){

    if(isset($name) && isset($password)){

        $query = "INSERT INTO users VALUES ('$name','$password')";

        $exc = mysqli_query($conn,$query);

        if($exc){

            echo "User data saved...";
            header("../../views/Login.php");

        }

        else { echo "User data cannot be saved"; }

    }

}

?>