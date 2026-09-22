<?php 
//login page for mobipay
$username = '';
$password = '';
$username = $_POST['username'];
$password = $_POST['password'];
//check if the username and password are correct
if($username =='' || $password ==''){
    echo" please fill in all fields";
}


//redirect to the index page
header('Location: index.php');











require 'index.view.php';
?>