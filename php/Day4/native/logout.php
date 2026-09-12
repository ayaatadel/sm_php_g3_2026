<?php 
require './connection.php';

session_destroy();
 {
      header("location:login.php?success_message=logout successfully");
        exit;
    }


?>