<?php
require_once('dompdf/autoload.inc.php'); // Adjust the path if necessary
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$servername = "localhost";
$username = "root";
$password = "";
$database = "semester_1";
$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Error in connecting" . mysqli_error($con));
}

$html = '';
$result = $con->query("SELECT * FROM iat1");
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
    $html .= "<h2>IAT-1 MARKS</h2>"; 
    $html .= "</div>";
    $html .= "<table>";
    $html .= "<tr><th>Roll No</th><th>Name</th><th>Tamil</th><th>English</th><th>CTPS</th><th>Maths</th><th>ITES</th><th>Economics</th></tr>";

    while ($row = $result->fetch_assoc()) {
        $html .= "<tr>";
        $html .= "<td>" . $row['roll_no'] . "</td>";
        $html .= "<td>" . $row['name'] . "</td>";
        $html .= "<td>" . number_format($row['Tamil']) . "</td>";
        $html .= "<td>" . number_format($row['English']) . "</td>";
        $html .= "<td>" . number_format($row['CTPS']) . "</td>";
        $html .= "<td>" . number_format($row['Maths']) . "</td>";
        $html .= "<td>" . number_format($row['ITES']) . "</td>";
        $html .= "<td>" . number_format($row['Economics']) . "</td>";
        $html .= "</tr>";
    }

    $html .= "</table>";
}

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();
?>
