<?php
session_start();
include('../config/config.php');

$uname=$_SESSION["username"];
$newuname = htmlspecialchars(trim($_REQUEST['newuname']));
$button=$_REQUEST['submit'];


if($button=="delete"){
    $query = "DELETE FROM users WHERE username='$uname';";
    $exc=mysqli_query($conn,$query);
    if($exc){
        echo "User deleted...";
    }
    else{echo "User cannot be deleted";}
}

elseif($button=="edit"){
    $query="UPDATE users SET username='$newuname' WHERE username='$uname';";
    $exc=mysqli_query($conn,$query);
    if($exc){
        echo "Username Changed";
    }
    else{echo "Username cant be changed";}
}

?>