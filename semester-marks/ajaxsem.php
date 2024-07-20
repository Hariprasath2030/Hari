<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sem_exam";

// Function to connect to the database
function connectToDatabase($servername, $username, $password, $database) {
    $con = new mysqli($servername, $username, $password, $database);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    return $con;
}

// Function to search for students in the database
function searchStudents($con, $searchTerm, $searchType) {
    $searchTerm = $con->real_escape_string($searchTerm);
    $sql = "SELECT roll_no, name, Tamil, English, CTPS, Maths, ITES, Economics, CTPS_LAB, ITES_LAB, EE_1, Crop, EA_LAB 
            FROM sem1 
            WHERE $searchType LIKE '%$searchTerm%' 
            ORDER BY name ASC";
    $result = $con->query($sql);

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
            'Economics' => $row['Economics'],
            'CTPS_LAB' => $row['CTPS_LAB'],
            'ITES_LAB' => $row['ITES_LAB'],
            'EE_1' => $row['EE_1'],
            'Crop' => $row['Crop'],
            'EA_LAB' => $row['EA_LAB'],
        );
        $students[] = $student;
    }
    return $students;
}

// Main execution
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['searchTerm'], $_POST['searchType'])) {
    $searchTerm = $_POST['searchTerm'];
    $searchType = $_POST['searchType'];
    $con = connectToDatabase($servername, $username, $password, $database);
    $students = searchStudents($con, $searchTerm, $searchType);
    echo json_encode($students);
    $con->close();
}
?>
