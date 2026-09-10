<?php

require "./navbar.php";

echo "<h1 class='text-center text-danger'>  Server Page </h1>";



/// method in form : get 
//userName=ayaat&userEmail=ay%40gmail.com&userPassword=ayaat&btnRegister=

// var_dump($_GET); // method : get , data from url 
// var_dump($_POST); // method : post

//array(4) { ["userName"]=> string(4) "nada" ["userEmail"]=> string(14) "nada@gmail.com" ["userPassword"]=> string(5) "hghgj" ["btnRegister"]=> string(0) "" }

// echo $_POST["userName"] ,"<br>";
// echo $_POST["userEmail"],"<br>";
// echo $_POST["userPassword"],"<br>";

// var_dump($_SESSION);

session_start();  // strart session 
 $_SESSION["succSS_message"]="register Successfylly";
// usersData
if (!isset($_SESSION["usersData"])) {
    $_SESSION["usersData"] = [];
}
if (isset($_POST["btnRegister"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $password = $_POST["userPassword"];

    $user = [
        "name" => $name,
        "email" => $email,
        "password" => $password
    ];
    // var_dump($user);
    array_push($_SESSION["usersData"],$user);
    // var_dump($_SESSION["usersData"]);
    header("location:login.php?message=register successfully");
   
    exit;
}


if (isset($_POST["btnlogin"])) {
    $email = $_POST["userName"];
    $password = $_POST["userPassword"];

    /// check if email , password already exit 
    /**
     * if exit ==> profile 
     * === profile : table all users 
     */


  

}


