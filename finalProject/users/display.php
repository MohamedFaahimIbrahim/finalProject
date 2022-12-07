<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Crud operation</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">Add user</a>
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SL no</th>
      <th scope="col">Title</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php


    $sql="Select * from `users`";
    $results=mysqli_query($con,$sql);
    if($results){
        while($row=mysqli_fetch_assoc($results)){
            $ID=$row['ID'];
            $title=$row['title'];
            echo 
            '
            <tr>
                <th scope="row">' .$ID. '</th>
                <td>'.$title.'</td>
                <td>
                <button class="btn btn-primary"><a href="update.php?updateid='.$ID.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$ID.'" class="text-light">Delete</a></button>
                </td>
            </tr>
            ';
        }
    }
    ?>
  </tbody>
</table>
    </div>
</body>
</html>