<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>IT sem-4 pages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-family: Arial, sans-serif;
               background-image: url(jjjj.jpg);
               background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(jjjj.jpg);
              background-repeat: no-repeat;
                background-attachment: fixed; 
                 background-size: 100% 100%;
        }

        .container {
            max-width: 12000px; /* Adjusted width for better table display */
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
        <h2>Semester-4 Grade Details</h2>
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
        $database="sem_exam";
        $con=mysqli_connect($servername,$username,$password,$database);
        if(!$con)
        {
          die("Error in connecting".mysqli_error($con));
         }

        

        // Retrieve data from the database
        $result = $con->query("SELECT * FROM sem4");
        // Display the data in a table
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Roll No</th><th>Name</th><th>OS</th><th>ES</th><th>DA</th><th>AJP</th><th>ADB</th><th>ADB_LAB</th><th>AJP_LAB</th><th>OS_LAB</th><th>ES_LAB</th><th>DA_LAB</th><th>EE_IV</th><th>QUANTS</th><th>VERBAL</th><th>CGPA</th><th>Edit</th><th>Delete</th></tr>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['roll_no'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['OS'] . "</td>";
                echo "<td>" . $row['ES'] . "</td>";
                echo "<td>" . $row['DA'] . "</td>";
                echo "<td>" . $row['AJP'] . "</td>";
                echo "<td>" . $row['ADVANCED_DATABASES'] . "</td>";
                echo "<td>" . $row['ADVANCED_DATABASES_LAB'] . "</td>";
                echo "<td>" . $row['AJP_LAB'] . "</td>";
                echo "<td>" . $row['OPERATING_SYSTEMS_LAB'] . "</td>";
                echo "<td>" . $row['EMBEDDED_SYSTEMS_LAB'] . "</td>";
                echo "<td>" . $row['DA_LAB'] . "</td>";
                echo "<td>" . $row['EE_IV'] . "</td>";
                echo "<td>" . $row['QUANTS'] . "</td>";
                echo "<td>" . $row['VERBAL'] . "</td>";
                echo "<td>" . $row['cgpa'] . "</td>";
                echo "<td><a href='sem4edit.php?id=" . $row['id'] . "'>Edit</a></td>";
                echo "<td><a href='sem4delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this student?\")'>Delete</a></td>";
                 echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No student details available.</p>";
        }

        $con->close();
        ?>
         <form method="post" action="grade4.php">
            <button class="button" name="submit" value="login">Add student</button>
        </form>
    </div>
    <form method="post" action="/login/student/semester-marks/semexam.php">
            <button class="button" name="submit" value="login">Back</button>
    </form>
    <div class="container1">
    <form method="post" action="mark/semmark.php">
        <button class="button" name="submit" value="login">Enter Mark Details</button>
    </form> 

</body>
</html>
   

