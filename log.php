<?php
include('./components/functions.php');
session_start();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$_SESSION['user'] = ($email == 'admin@gmail.com' and $password == 'admin' ) ? true : false ;
if ($_SESSION['user']) {
    showSend('Log in success','index.php');
} else{
    showSend('Log in failed', 'login.php');
}
