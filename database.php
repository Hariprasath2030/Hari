<?php
$servername="localhost";
$username="root";
$password="";
$database="students";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("Error in connecting".mysqli_error($con));
}
?>