<?php
session_start();

// Connect to the database (similar to your existing code)
$servername = "localhost";
$username = "root";
$password = "";
$database = "sem_exam";
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Error in connecting" . mysqli_error($con));
}

if (isset($_POST['update'])) {
    // Retrieve data from the form
    $studentId = $_POST['student_id'];
    $roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $Mathemeatics = $_POST['Mathemeatics'];
    $DB = $_POST['DB'];
    $ADS = $_POST['ADS'];
    $MPMC = $_POST['MPMC'];
    $OOPS = $_POST['OOPS'];
    $WS= $_POST['WS'];
    $DB_LAB = $_POST['DB_LAB'];
    $ADS_LAB= $_POST['ADS_LAB'];
    $MPMC_LAB= $_POST['MPMC_LAB'];
    $OOPS_LAB= $_POST['OOPS_LAB'];
    $WS_LAB = $_POST['WS_LAB'];
    $EE_III = $_POST['EE_III'];
    $Quants = $_POST['Quants'];
    $Verbal = $_POST['Verbal'];
    $cgpa = $_POST['cgpa'];
    
    // Use prepared statements to prevent SQL injection
    $updateQuery = "UPDATE sem3 SET 
                    roll_no = ?, 
                    name = ?, 
                    Mathemeatics= ?, 
                    DB = ?, 
                    ADS = ?, 
                    MPMC = ?, 
                    OOPS = ?, 
                    WS = ?, 
                    DB_LAB = ?, 
                    ADS_LAB = ?, 
                    MPMC_LAB = ?, 
                    OOPS_LAB = ?,
                    WS_LAB= ?,
                    EE_III=?,
                    Quants=?,
                    Verbal=?,
                    cgpa = ?
                    WHERE id = ?";

    $stmt = mysqli_prepare($con, $updateQuery);
    
    // Check if the statement was prepared successfully
    if ($stmt) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "sssssssssssssssssi", $roll_no, $name, $Mathemeatics, $DB, $ADS, $MPMC, $OOPS, $WS, $DB_LAB, $ADS_LAB, $MPMC_LAB, $OOPS_LAB, $WS_LAB,$EE_III,$Quants,$Verbal,$cgpa, $studentId);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['success_message'] = "Student Grades updated successfully.";
        } else {
            $_SESSION['error_message'] = "Error updating student details: " . mysqli_error($con);
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['error_message'] = "Error preparing statement: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);

    // Redirect back to the details page
    header("Location: sem3.php");
    exit();
} else {
    echo "Invalid request.";
}
?>
