<?php
require '../db.php';
// require './navbar.php';


// register ====

if (isset($_POST['btnRegister'])) {

// var_dump($_POST);
// $data=$_POST;

    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];



    //*****************  name pattern */

    $namePattern = '/^[a-zA-Z]{3,}$/';
    if (!preg_match($namePattern, $userName)) {
        header("location:register.php?error_message= name must be characters at least 3 characters");
        exit;
    }
    //*****************  pasword pattern */

    $passwordPattern = '/^[0-9]{5,15}$/';
    if (!preg_match($passwordPattern, $userPassword)) {
        header("location:register.php?error_message= password must be numbers at least 5 numbers ");
        exit;
    }



    //*****************  email pattern */


    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        header("location:register.php?error_message= enter a valid email ");
        exit;
    }

    $hashPassword = password_hash($userPassword, PASSWORD_DEFAULT);


$data=[
    "name"=>$userName ,
    "email"=>$userEmail ,
    "password"=>$hashPassword

];

try {
        $db->create('users',$data);
        header("location:login.php");

} catch (Error $e) {
echo $e->getMessage();   
}



}




