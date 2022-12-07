<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $ID=$_GET['deleteid'];

    $sql="delete from `users` where ID=$ID";
    $results=mysqli_query($con,$sql);
    if($results){
        // echo "Deleted successfull";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>