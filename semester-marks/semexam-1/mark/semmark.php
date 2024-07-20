<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>IT sem-1 marks pages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-family: Arial, sans-serif;
               background-image: url(llll.jpg);
               background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(llll.jpg);
              background-repeat: no-repeat;
                background-attachment: fixed; 
                 background-size: 100% 100%;
        }

        .container {
            max-width: 7000px; /* Adjusted width for better table display */
            margin: 60px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            opacity: 90%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th ,td{
            border: 1px solid #ff004c;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ff004c;;
            color: white;
        }
     .container button{
  background-color:  #ff004c;
  border: none;
  color: white;
  padding: 11px 40px;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  position: absolute;
  top: 88px;
  left: 85.5%;
}
.container button:active{
  background-color: black;
  color: white;
}
.button{
  background-color: black;
  border:none;
  color: white;
  padding: 5px 30px;
  border-radius: 9px;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  position: absolute;
  top: 18px;
  left: 90.5%;
}
.button:active{
  background-color: white;
  color: black;
}
.container1 button{
    background-color: #111111;
   border: none;
   color: white;
   padding: 11px 40px;
   border-radius: 5px;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   position: absolute;
   top: 30px;
   left: 8%;
   transform: translate(-50%,-50%);
   text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Semester-1 Marks Details</h2>
        <?php
        // ... Your existing PHP code ...
        if (isset($_SESSION['success_message'])) {
            echo "<p>" . $_SESSION['success_message'] . "</p>";
            unset($_SESSION['success_message']);
        }

        if (isset($_SESSION['error_message'])) {
            echo "<p style='color: red;'>" . $_SESSION['error_message'] . "</p>";
            unset($_SESSION['error_message']);
        }

        // Connect to MySQL database
        $servername="localhost";
        $username="root";
        $password="";
        $database="mark_exam";
        $con=mysqli_connect($servername,$username,$password,$database);
        if(!$con)
        {
          die("Error in connecting".mysqli_error($con));
         }

        

        // Retrieve data from the database
        $result = $con->query("SELECT * FROM mark1");
        // Display the data in a table
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Roll No</th><th>Name</th><th>TAMIL</th><th>ENGLISH</th><th>CTPS</th><th>MATHS</th><th>ITES</th><th>ECONOMICS</th><th>CTPS-LAB</th><th>ITES-LAB</th><th>EE-LAB</th><th>CROP-LAB</th><th>EA-LAB</th><th>Edit</th><th>Delete</th></tr>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['roll_no'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['Tamil'] . "</td>";
                echo "<td>" . $row['English'] . "</td>";
                echo "<td>" . $row['CTPS'] . "</td>";
                echo "<td>" . $row['Maths'] . "</td>";
                echo "<td>" . $row['ITES'] . "</td>";
                echo "<td>" . $row['Economics'] . "</td>";
                echo "<td>" . $row['CTPS_LAB'] . "</td>";
                echo "<td>" . $row['ITES_LAB'] . "</td>";
                echo "<td>" . $row['EE_1'] . "</td>";
                echo "<td>" . $row['Crop'] . "</td>";
                echo "<td>" . $row['EA_LAB'] . "</td>";
                echo "<td><a href='semmarkedit.php?id=" . $row['id'] . "'>Edit</a></td>";
                echo "<td><a href='semmarkdelete.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this student?\")'>Delete</a></td>";
                 echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No student details available.</p>";
        }

        $con->close();
        ?>
         <form method="post" action="mark1.php">
            <button class="button" name="submit" value="login">Add student</button>
        </form>
    </div>
    <form method="post" action="/login/student/semester-marks/semexam-1/sem1.php">
            <button class="button" name="submit" value="login">Back</button>
    </form>

</body>
</html>
   

