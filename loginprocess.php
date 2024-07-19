<?php
session_start();
include 'database.php';
if(isset($_POST['submit'])) {
    $name=$_POST['loginusername'];
    $password=$_POST['loginpassword'];
    $sql="select * from student where name='$name' and password='$password' ";
    $que=mysqli_query($con,$sql);
    if(mysqli_num_rows($que)>0)
    {
        echo "<script>alert('You are logged in')</script>";
        $_SESSION["name"] = $name;
        echo "<script>window.open('first1.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('wrong username and password')</script>";
        echo "<script>window.open('index.html','_self')</script>";
    }
}
?>