<?php
session_start();

// initializing variables
$username = "";
$oldpassword = '';
$newpassword = '';
$email    = "";
$errors = array(); 
$vref = '';

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');


?>
