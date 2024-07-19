<?php
require_once('dompdf/autoload.inc.php'); // Adjust the path if necessary
use Dompdf\Dompdf;

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

// Function to convert numeric scores to letter grades
function getLetterGrade($score) {
    switch (strtoupper($score)) {
        case 'O':
            return 'O';
        case 'A+':
            return 'A+';
        case 'A':
            return 'A';
        case 'B+':
            return 'B+';
        case 'B':
            return 'B';
        case 'C':
            return 'C';
        default:
            return 'F';
    }
}

// Function to fetch student data from the database
function fetchStudentData($con) {
    $sql = "SELECT * FROM sem1 ORDER BY name ASC";
    return $con->query($sql);
}

// Function to calculate CGPA
function calculateCGPA($grades, $gradePoints, $creditHours) {
    $totalCredit = 0;
    $totalGradePoints = 0;
    foreach ($grades as $subject => $grade) {
        if (isset($gradePoints[$grade]) && isset($creditHours[$subject])) {
            $totalGradePoints += $gradePoints[$grade] * $creditHours[$subject];
            $totalCredit += $creditHours[$subject];
        }
    }
    return $totalCredit ? round(($totalGradePoints / $totalCredit), 2) : 0;
}

// Function to generate HTML for the PDF
function generateHTML($result, $gradePoints, $creditHours) {
    $html = '<style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    border: 1px solid black;
                    padding: 8px;
                    text-align: center;
                }
                th {
                    background-color: #f2f2f2;
                }
                h2 {
                    text-align: center; 
                    margin-bottom: 50px;
                }
             </style>';
    $html .= '<h2>SEMESTER -1 MARKS</h2>'; 
    $html .= '<table>';
    $html .= '<tr><th>Roll No</th><th>Name</th><th>Tamil</th><th>English</th><th>CTPS</th><th>Maths</th><th>ITES</th><th>Economics</th><th>CTPS LAB</th><th>ITES LAB</th><th>EE LAB</th><th>Crop LAB</th><th>EA LAB</th><th>CGPA</th></tr>';

    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['roll_no'] . '</td>';
        $html .= '<td>' . $row['name'] . '</td>';
        $html .= '<td>' . getLetterGrade($row['Tamil']) . '</td>';
        $html .= '<td>' . getLetterGrade($row['English']) . '</td>';
        $html .= '<td>' . getLetterGrade($row['CTPS']) . '</td>';
        $html .= '<td>' . getLetterGrade($row['Maths']) . '</td>';
        $html .= '<td>' . getLetterGrade($row['ITES']) . '</td>';
        $html .= '<td>' . getLetterGrade($row['Economics']) . '</td>';
        $html .= '<td>' . getLetterGrade($row['CTPS_LAB']) . '</td>';
        $html .= '<td>' . getLetterGrade($row['ITES_LAB']) . '</td>';
        $html .= '<td>' . getLetterGrade($row['EE_1']) . '</td>';
        $html .= '<td>' . getLetterGrade($row['Crop']) . '</td>';
        $html .= '<td>' . getLetterGrade($row['EA_LAB']) . '</td>';

        // Calculate CGPA
        $grades = [
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
            'EA_LAB' => $row['EA_LAB']
        ];
        $cgpa = calculateCGPA($grades, $gradePoints, $creditHours);
        $html .= "<td>" . number_format($cgpa, 2) . "</td>";

        $html .= '</tr>';
    }

    $html .= '</table>';
    return $html;
}

// Main execution
$con = connectToDatabase($servername, $username, $password, $database);
$result = fetchStudentData($con);

if ($result->num_rows > 0) {
    $gradePoints = [
        "O" => 10,
        "A+" => 9,
        "A" => 8,
        "B+" => 7,
        "B" => 6,
        "C" => 5,
        "F" => 0
    ];

    // Define the credit hours for each subject
    $creditHours = [
        "Tamil" => 2,
        "English" => 3,
        "CTPS" => 3,
        "Maths" => 4,
        "ITES" => 3,
        "Economics" => 2,
        "CTPS_LAB" => 1,
        "ITES_LAB" => 1,
        "EE_1" => 2,
        "Crop" => 2,
        "EA_LAB" => 1
    ];

    $html = generateHTML($result, $gradePoints, $creditHours);

} else {
    $html = "<h2>No records found</h2>";
}

$con->close();

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("semester1_marks.pdf", ["Attachment" => false]);
?>
