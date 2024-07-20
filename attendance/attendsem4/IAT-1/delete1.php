<?php
session_start();

// Connect to the database (similar to your existing code)
$servername = "localhost";
$username = "root";
$password = "";
$database = "attend_4";
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Error in connecting" . mysqli_error($con));
}

// Check if the 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    $studentId = $_GET['id'];

    // Delete the student record from the database
    $deleteQuery = "DELETE FROM att_1 WHERE id = $studentId";

    if(mysqli_query($con, $deleteQuery)) {
        $_SESSION['success_message'] = "Student deleted successfully.";
    } else {
        $_SESSION['error_message'] = "Error deleting student: " . mysqli_error($con);
    }

    // Redirect back to the details page
    header("Location: attend1.php");
    exit();
} else {
    echo "Student roll no not provided.";
}
?>
