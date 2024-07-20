<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $Tamil = $_POST['Tamil'];
    $English = $_POST['English'];
    $CTPS = $_POST['CTPS'];
    $Maths = $_POST['Maths'];
    $ITES = $_POST['ITES'];
    $Economics = $_POST['Economics'];
    $CTPS_LAB = $_POST['CTPS_LAB'];
    $ITES_LAB = $_POST['ITES_LAB'];
    $EE_1 = $_POST['EE_1'];
    $Crop = $_POST['Crop'];
    $EA_LAB = $_POST['EA_LAB'];

    // Connect to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mark_exam";
    $con = mysqli_connect($servername, $username, $password, $database);

    if (!$con) {
        die("Error in connecting: " . mysqli_connect_error());
    }

    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO mark1 (roll_no, name, Tamil, English, CTPS, Maths, ITES, Economics, CTPS_LAB, ITES_LAB, EE_1, Crop, EA_LAB) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "sssssssssssss", $roll_no, $name, $Tamil, $English, $CTPS, $Maths, $ITES, $Economics, $CTPS_LAB, $ITES_LAB, $EE_1, $Crop, $EA_LAB);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['success_message'] = "Student details successfully added!";
            header("Location: semmark.php");
            exit();
        } else {
            $_SESSION['error_message'] = "Error executing statement: " . mysqli_stmt_error($stmt);
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
