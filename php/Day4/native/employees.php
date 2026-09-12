<?php 

require './connection.php';
if(!isset($_SESSION['login_id']))
    {
      header("location:login.php?error_message=login first");
        exit;
    }
    else {
     
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all employees</title>
</head>
<body>
    <h1>employees</h1>
</body>
</html>