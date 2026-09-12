<?php
// cradentials 
$dbhost = "localhost"; // default =localhost:3306 =========> different  ==> localhost:3307
$dbType = "mysql";
$dbName = "iti_sm_php_g3";
$userName = "root";
$password = "";


//pdo($dsn,useName,$password)===> dsn : dbtype,host,name of database

$connection = new PDO("$dbType:host=$dbhost;dbname=$dbName", $userName, $password);
// var_dump($connection);

session_start();

// =========== select
// $sql="SELECT * from users ";  // string
// // var_dump($sql);
// // string --> sql 
// $sqlQuery=$connection->prepare($sql);
// // var_dump($sqlQuery);

// $sqlQuery->execute();
// $users=$sqlQuery->fetchAll(PDO::FETCH_ASSOC); // assoctiative array
// var_dump($users);



// =================== insert =============

// $sql="insert into users(name,email,password)values('malak','malak@gmail.com','123456')"; // string

// $sqlQuery=$connection->prepare($sql);

// $sqlQuery->execute();