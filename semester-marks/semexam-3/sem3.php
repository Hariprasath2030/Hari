<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>IT sem-3 pages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-family: Arial, sans-serif;
               background-image: url(bbbb.jpg);
               background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(bbbb.jpg);
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
        <h2>Semester-3 Grade Details</h2>
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
        $result = $con->query("SELECT * FROM sem3");
        // Display the data in a table
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Roll No</th><th>Name</th><th>MATHEMETICS</th><th>DB</th><th>ADS</th><th>MPMC</th><th>OOPS</th><th>WS</th><th>DB-LAB</th><th>ADS-LAB</th><th>MPMC-LAB</th><th>OOPS-LAB</th><th>WS-LAB</th><th>EE-III</th><th>QUANTS</th><th>VERBAL</th><th>CGPA</th><th>Edit</th><th>Delete</th></tr>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['roll_no'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['Mathemeatics'] . "</td>";
                echo "<td>" . $row['DB'] . "</td>";
                echo "<td>" . $row['ADS'] . "</td>";
                echo "<td>" . $row['MPMC'] . "</td>";
                echo "<td>" . $row['OOPS'] . "</td>";
                echo "<td>" . $row['WS'] . "</td>";
                echo "<td>" . $row['DB_LAB'] . "</td>";
                echo "<td>" . $row['ADS_LAB'] . "</td>";
                echo "<td>" . $row['MPMC_LAB'] . "</td>";
                echo "<td>" . $row['OOPS_LAB'] . "</td>";
                echo "<td>" . $row['WS_LAB'] . "</td>";
                echo "<td>" . $row['EE_III'] . "</td>";
                echo "<td>" . $row['Quants'] . "</td>";
                echo "<td>" . $row['Verbal'] . "</td>";
                echo "<td>" . $row['cgpa'] . "</td>";
                echo "<td><a href='sem3edit.php?id=" . $row['id'] . "'>Edit</a></td>";
                echo "<td><a href='sem3delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this student?\")'>Delete</a></td>";
                 echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No student details available.</p>";
        }

        $con->close();
        ?>
         <form method="post" action="grade3.php">
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
   

