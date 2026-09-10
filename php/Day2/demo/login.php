<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<?php     require './navbar.php';

if(isset($_GET["message"]))
  {


echo "<p class='alert alert-success w-75 m-auto mt-3'>" .$_GET['message']."</p>";

  }

// echo "<p class='alert alert-success w-75 m-auto mt-3'>" . $_SESSION["succSS_message"]."</p>";


?>


<form action="server.php" method="post" class="border border-3 w-75 m-auto mt-5 p-5">

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="userEmail"  placeholder="Enter Your email" class="form-control" id="staticEmail" >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="userPassword" placeholder="Enter Your password" class="form-control" id="inputPassword">
    </div>
  </div>

  <button type="submit" name='btnLogin' class="btn btn-info">login</button>
</form>
</body>
</html>