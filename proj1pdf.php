<?php
require_once('dompdf/autoload.inc.php'); // Adjust the path if necessary
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$servername = "localhost";
$username = "root";
$password = "";
$database = "projects";
$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Error in connecting: " . mysqli_error($con));
}

$html = '';
$result = $con->query("SELECT * FROM project1");
if ($result->num_rows > 0) {
    $html .= "<style>
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
              </style>";
    $html .= "<h2>Project Details sem-1</h2>"; 
    $html .= "<table>";
    $html .= "<tr>
                <th>Roll no</th>
                <th>Name</th>
                <th>Team No</th>
                <th>Project Title</th>
                <th>Project Status</th>
                <th>Publication Type</th>
                <th>Paper/Patent Name</th>
              </tr>";

    while ($row = $result->fetch_assoc()) {
        $html .= "<tr>";
        $html .= "<td>" . htmlspecialchars($row['roll_no']) . "</td>";
        $html .= "<td>" . htmlspecialchars($row['name']) . "</td>";
        $html .= "<td>" . htmlspecialchars($row['team_no']) . "</td>";
        $html .= "<td>" . htmlspecialchars($row['project_title']) . "</td>";
        $html .= "<td>" . htmlspecialchars($row['project_status']) . "</td>";
        $html .= "<td>" . htmlspecialchars($row['publication_type']) . "</td>";
        $html .= "<td>" . htmlspecialchars($row['publisher_name']) . "</td>";
        $html .= "</tr>";
    }

    $html .= "</table>";
}

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();
?>
