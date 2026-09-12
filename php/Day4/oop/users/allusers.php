<?php 
require '../db.php';

$allUsers=$db->index("users");
// var_dump($allUsers);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  require '../navbar.php' ?>
<table class="table table-striped table-bordered w-75 m-auto mt-5">
    <thead>
   <th>name</th>
   <th>email</th>
   <th>Action</th>
    </thead>
    <tbody>


        <?php
        
        foreach ($allUsers as $user) {
            
            # code...
            echo "<tr>";
            echo "<td>";
            echo $user['name'];
            echo "</td>";
            echo "<td>";
            echo $user['email'];
            echo "</td>";
            echo "<td>";
            echo "<button class='btn btn-warning'> Show </button>";
            echo "<button class='btn btn-danger'> delete</button>";
            echo "<button class='btn btn-info'> update </button>";
            echo "</td>";
            echo "</tr>";
        }
        
        ?>
    </tr>

    </tbody>
</table>
    
</body>
</html>

