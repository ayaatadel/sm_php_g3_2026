<?php

require './connection.php';
if (!isset($_SESSION['login_id'])) {
    header("location:login.php?error_message=login first");
    exit;
} else {
    $userId = $_SESSION['login_id'];
    $sql = "select * from users where id=:id";
    $sqlQuery = $connection->prepare($sql);
    $sqlQuery->execute(
        [
            ":id" => $userId,
            // ":password"=>$hashPassword
        ]
    );
    $data = $sqlQuery->fetch(PDO::FETCH_ASSOC);  //  name , email , password(hash poassword)


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>

<body>
    <?php
    require './navbar.php';

    ?>

    <h1>profile page</h1>
    <?php echo "<p>" . $data['name'] . "</p>"; ?>
</body>

</html>