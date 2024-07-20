<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "semester_1";

// Function to connect to the database
function connectToDatabase($servername, $username, $password, $database) {
    $con = new mysqli($servername, $username, $password, $database);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    return $con;
}

// Function to search for students in the database by name or roll number
function searchStudents($con, $searchTerm) {
    // Sanitize input to prevent SQL injection
    $searchTerm = $con->real_escape_string($searchTerm);
    $sql = "SELECT roll_no, name, Tamil, English, CTPS, Maths, ITES, Economics FROM iat1 WHERE name LIKE '%$searchTerm%' OR roll_no LIKE '%$searchTerm%' ORDER BY name ASC";
    $result = $con->query($sql);

    if ($result === false) {
        die("Error executing query: " . $con->error);
    }

    $students = array();
    while ($row = $result->fetch_assoc()) {
        $student = array(
            'roll_no' => $row['roll_no'],
            'name' => $row['name'],
            'Tamil' => $row['Tamil'],
            'English' => $row['English'],
            'CTPS' => $row['CTPS'],
            'Maths' => $row['Maths'],
            'ITES' => $row['ITES'],
            'Economics' => $row['Economics']
        );
        $students[] = $student;
    }
    return $students;
}

// Main execution
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    $searchTerm = $_POST['search'];
    $con = connectToDatabase($servername, $username, $password, $database);
    $students = searchStudents($con, $searchTerm);
    echo json_encode($students);
    $con->close();
}
?>
