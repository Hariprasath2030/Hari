<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projects";

// Establishing connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search term from the POST request
$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';

// Prepare an array to store results
$students = [];

// Define an array of tables to search
$tables = ['project1', 'project2', 'project3', 'project4', 'project5', 'project6', 'project7', 'project8'];

// Prepare the SQL statement template
$sqlTemplate = "SELECT roll_no, name, team_no, project_title, project_status, publication_type, publisher_name 
                FROM %s 
                WHERE name LIKE ? OR roll_no LIKE ? OR team_no LIKE ? OR project_title LIKE ? OR project_status LIKE ? OR publication_type LIKE ? OR publisher_name LIKE ?";

// Loop through each table and execute a query
foreach ($tables as $table) {
    // Prepare the SQL statement for the current table
    $sql = sprintf($sqlTemplate, $table);
    
    // Bind parameters for the current table's query
    $stmt = $conn->prepare($sql);
    $searchTermWildcard = "%$searchTerm%";
    $stmt->bind_param("sssssss", 
                      $searchTermWildcard, $searchTermWildcard, $searchTermWildcard, 
                      $searchTermWildcard, $searchTermWildcard, $searchTermWildcard, 
                      $searchTermWildcard);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch and store results for the current table
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }

    // Close the statement for the current table
    $stmt->close();
}

// Return the results as JSON
header('Content-Type: application/json');
echo json_encode($students);

// Close the connection
$conn->close();
?>
