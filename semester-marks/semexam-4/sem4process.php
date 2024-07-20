<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Connect to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sem_exam";
    $con = mysqli_connect($servername, $username, $password, $database);

    if (!$con) {
        die("Error in connecting: " . mysqli_connect_error());
    }

    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO sem4 (roll_no, name, OS, ES, DA, AJP, ADVANCED_DATABASES, ADVANCED_DATABASES_LAB, AJP_LAB, OPERATING_SYSTEMS_LAB, EMBEDDED_SYSTEMS_LAB, DA_LAB, EE_IV, QUANTS, VERBAL, cgpa) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $roll_no, $name, $OS, $ES, $DA, $AJP, $ADVANCED_DATABASES, $ADVANCED_DATABASES_LAB, $AJP_LAB, $OPERATING_SYSTEMS_LAB, $EMBEDDED_SYSTEMS_LAB, $DA_LAB, $EE_IV, $QUANTS, $VERBAL, $cgpa);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['success_message'] = "Student details successfully added!";
            header("Location: sem4.php");
            exit();
        } else {
            $_SESSION['error_message'] = "Error executing statement: " . mysqli_stmt_error($stmt) . " - SQL: " . $sql;
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['error_message'] = "Error preparing statement: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>