<?php
include 'connect.php';
$ID=$_GET['updateid'];
$sql="Select * from `users` where ID=$ID";
$results=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($results);
$title=$row['title'];

if(isset($_POST['submit'])){
    $title=$_POST['title'];

    $sql="update `users` set ID=$ID,title='$title',
    where ID=$ID";
    $results=mysqli_query($con,$sql); 
    if($results){
        // echo "Updated successfully";
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
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Enter your title" name="title" autocomplete="off"
                value=<?php echo $title;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Edit</button>
        </form>
        </div>
    </body>
</html>