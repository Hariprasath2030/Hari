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
    $OS = $_POST['OS'];
    $ES = $_POST['ES'];
    $DA = $_POST['DA'];
    $AJP = $_POST['AJP'];
    $ADVANCED_DATABASES = $_POST['ADVANCED_DATABASES'];
    $ADVANCED_DATABASES_LAB = $_POST['ADVANCED_DATABASES_LAB'];
    $AJP_LAB = $_POST['AJP_LAB'];
    $OPERATING_SYSTEMS_LAB = $_POST['OPERATING_SYSTEMS_LAB'];
    $EMBEDDED_SYSTEMS_LAB = $_POST['EMBEDDED_SYSTEMS_LAB'];
    $DA_LAB = $_POST['DA_LAB'];
    $EE_IV= $_POST['EE_IV'];
    $QUANTS= $_POST['QUANTS'];
    $VERBAL= $_POST['VERBAL'];
    $cgpa = $_POST['cgpa'];
    
    // Use prepared statements to prevent SQL injection
    $updateQuery = "UPDATE sem4 SET 
                    roll_no = ?, 
                    name = ?, 
                    OS= ?, 
                    ES = ?, 
                    DA = ?, 
                    AJP = ?, 
                    ADVANCED_DATABASES= ?, 
                    ADVANCED_DATABASES_LAB = ?, 
                    AJP_LAB = ?, 
                    OPERATING_SYSTEMS_LAB = ?, 
                    EMBEDDED_SYSTEMS_LAB = ?, 
                    DA_LAB = ?,
                    EE_IV = ?,
                    QUANTS = ?,
                    VERBAL = ?,
                    cgpa = ?
                    WHERE id = ?";

    $stmt = mysqli_prepare($con, $updateQuery);
    
    // Check if the statement was prepared successfully
    if ($stmt) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssssssssssssssssi", $roll_no, $name, $OS, $ES, $DA, $AJP, $ADVANCED_DATABASES, $ADVANCED_DATABASES_LAB, $AJP_LAB, $OPERATING_SYSTEMS_LAB, $EMBEDDED_SYSTEMS_LAB, $DA_LAB, $EE_IV, $QUANTS, $VERBAL, $cgpa, $studentId);

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
    header("Location: sem4.php");
    exit();
} else {
    echo "Invalid request.";
}
?>
