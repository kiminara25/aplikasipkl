<?php
require 'function.php';


if(isset($_SESSION['login'])){
    //YAUDAHIYA BANG
} else {
    // belm login 
    header('location:login.php');
}


?>

