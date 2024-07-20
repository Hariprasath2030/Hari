<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $Mathemeatics = $_POST['Mathemeatics']; // Corrected column name
    $DB = $_POST['DB'];
    $ADS = $_POST['ADS'];
    $MPMC = $_POST['MPMC'];
    $OOPS = $_POST['OOPS'];
    $WS = $_POST['WS'];
    $DB_LAB = $_POST['DB_LAB'];
    $ADS_LAB = $_POST['ADS_LAB'];
    $MPMC_LAB = $_POST['MPMC_LAB'];
    $OOPS_LAB = $_POST['OOPS_LAB'];
    $WS_LAB = $_POST['WS_LAB'];
    $EE_III = $_POST['EE_III'];
    $Quants = $_POST['Quants'];
    $Verbal = $_POST['Verbal'];
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
    $sql = "INSERT INTO sem3 (roll_no, name, Mathemeatics, DB, ADS, MPMC, OOPS, WS, DB_LAB, ADS_LAB, MPMC_LAB, OOPS_LAB, WS_LAB, EE_III, Quants, Verbal, cgpa) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $roll_no, $name, $Mathemeatics, $DB, $ADS, $MPMC, $OOPS, $WS, $DB_LAB, $ADS_LAB, $MPMC_LAB, $OOPS_LAB, $WS_LAB, $EE_III, $Quants, $Verbal, $cgpa);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['success_message'] = "Student details successfully added!";
            header("Location: sem3.php");
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
