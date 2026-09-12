<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>

<body>
  <?php

  require './navbar.php';
  // $x=5;
  // echo $x;

  if (isset($_GET["error_message"])) {


    echo "<p class='alert alert-danger text-center w-75 m-auto mt-3'>" . $_GET["error_message"] . "</p>";
  }


  ?>


  <form action="./server.php" method="post" class="border border-5 w-75 m-auto mt-5 p-5">

    <div class="mb-3 row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" name="userName" placeholder="Enter Your name" class="form-control" id="name" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email"  required name="userEmail" placeholder="Enter Your email" class="form-control" id="email">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password"  required  name="userPassword" placeholder="Enter Your password" class="form-control" id="inputPassword">
      </div>
    </div>

    <button type="submit" name='btnRegister' class="btn btn-info">Register</button>
  </form>
</body>

</html>