<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $due_date=$_POST['due_date'];
    $completed=$_POST['completed'];

    $sql="insert into `tasks` (title,description,due_date,completed)
    values('$title','$description','$due_date','$completed')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head>
    <body>
        <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>title</label>
                <input type="text" class="form-control" placeholder="Enter your title" name="title" autocomplete="off">
            </div>
            <div class="form-group">
                <label>description</label>
                <input type="text" class="form-control" placeholder="Enter your description" name="description" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Due date</label>
                <input type="text" class="form-control" placeholder="Enter your due date" name="due date" autocomplete="off">
            </div>
            <div class="form-group">
                <label>completed</label>
                <select name="language" id="language">
                    <option value="0">FALSE</option>
                    <option value="1">TRUE</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </div>
    </body>
</html>