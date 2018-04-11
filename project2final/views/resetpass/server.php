
<?php
session_save_path("/tmp");
session_start();

// initializing variables
$username = "";
$oldpassword = '';
$newpassword = '';
$newpassword2 = '';
$email    = "";
$errors = array(); 


// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'registration');


?>
