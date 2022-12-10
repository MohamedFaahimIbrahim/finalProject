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
      <th scope="col">Number</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Due date</th>
      <th scope="col">Completed tasks</th>
    </tr>
  </thead>
  <tbody>
    <?php


    $sql="Select * from `tasks`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $title=$row['title'];
            $description=$row['description'];
            $due_date=$row['due_date'];
            $completed=$row['completed'];
            echo 
            '
            <tr>
                <th scope="row">' .$id. '</th>
                <td>'.$title.'</td>
                <td>'.$description.'</td>
                <td>'.$due_date.'</td>
                <td>'.$completed.'</td>
                <td>
                <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
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
