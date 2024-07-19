<?php
session_start();
include 'database.php';
if(isset($_POST['submit'])) {
    $name=$_POST['regsitername'];
    $email=$_POST['registeremail'];
    $number=$_POST['registernumber'];
    $password=$_POST['registerpassword'];
    $email_check_query = "SELECT * FROM student WHERE email='$email' LIMIT 1"; // Check if email already exists in database
    $result = mysqli_query($con, $email_check_query);
    $user = mysqli_fetch_assoc($result);
    $email_exists = false;
    if ($user) { // If email exists, set flag to true
        $email_exists = true;
        echo "<script>alert('This email address is already registered')</script>";
        echo "<script>window.open('registation.php','_self')</script>"; 
        // Redirect to the same registration page if registration fails
    }
    if (!$email_exists) {
        $sql="INSERT INTO student(name,email,number,password) VALUES('$name','$email','$number','$password')";
    
        if(mysqli_query($con,$sql)) {
            echo "<script>alert('Registration Successfull')</script>";
            $_SESSION["email"] = $email;
            header('location:signupsuccess.php'); // Redirect to signed up success page
        } else {
            echo "Error:".mysqli_error($con);
        }
    }
    mysqli_close($con);
}
?>