<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "sem_exam";

// Use procedural style for database connection
$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Error in connecting" . mysqli_error($con));
}

if (isset($_GET['id'])) {
    $studentId = $_GET['id'];

    // Retrieve the student details based on the id
    $result = $con->query("SELECT * FROM sem3 WHERE id = $studentId");

    if($result->num_rows > 0) {
        $studentData = $result->fetch_assoc();
        // Display the student details in a form for editing
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="sty.css">
            <title>Edit Student Grade Details</title>
            <!-- Your existing styles here -->
            <style>
                 body {
    font-family: Arial, sans-serif;
   background-image: url(nnnn.jpg);
   background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(nnnn.jpg);
   background-repeat: no-repeat;
   background-attachment: fixed; 
   background-size: 100% 100%;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #bdc0bf;
    opacity: 90%;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: grid;
    grid-gap: -1px;
}

label {
  letter-spacing: 0.1em;
  flex-direction: column;
  display: flex;
  color: #ff0062;
  text-align: left;
  font-size: 25px;
  font-weight:bolder;
    
}

input {
  padding: 8px;
  border: 2px solid #ff004c;
  background: #1A1A1D;
  border-radius: 5px;
  outline: none;
  color: #fff;
  font-size: 1em;
  margin: 5px 0px 50px 0px;
  width: 100%;
 box-sizing: border-box;
}

button {
    background-color: #ff004c;
   border: none;
   color: white;
   padding: 10px 60px;
   border-radius: 20px;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   position: absolute;
   top: 314%;
   left: 50%;
   transform: translate(-50%,-50%);
   text-align: center;
}
.container1 button{
    background-color: #ff004c;
   border: none;
   color: white;
   padding: 9px 50px;
   border-radius: 20px;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   position: absolute;
   top: 15%;
   left: 63%;
   transform: translate(-50%,-50%);
   text-align: center;
        }
        .container button:active{
            background-color: black;
            color: white;
        }
</style>
        </head>
        <body>
            <!-- Your existing header content -->
            <div class="container">
                <h2>Edit Student Grade Details</h2>
                <form method="post" action="sem3update.php">
    
                    <input type="hidden" name="student_id" value="<?php echo $studentData['id']; ?>">

                    <label for="roll_no">Roll No:</label>
                    <input type="text" name="roll_no" value="<?php echo htmlspecialchars($studentData['roll_no']); ?>">

                    <label for="name">Name:</label>
                    <input type="text" name="name" value="<?php echo htmlspecialchars($studentData['name']); ?>">

                    <label for="Mathemeatics">Mathemeatics:</label>
                    <input type="text" name="Mathemeatics" value="<?php echo htmlspecialchars($studentData['Mathemeatics']); ?>">

                    <label for="DB">DB:</label>
                   <input type="text" name="DB" value="<?php echo htmlspecialchars($studentData['DB']); ?>">

                    <label for="ADS">ADS:</label>
                    <input type="text" name="ADS" value="<?php echo htmlspecialchars($studentData['ADS']); ?>">

                    <label for="MPMC">MPMC:</label>
                   <input type="text" name="MPMC" value="<?php echo htmlspecialchars($studentData['MPMC']); ?>">

                   <label for="OOPS">OOPS:</label>
                   <input type="text" name="OOPS" value="<?php echo htmlspecialchars($studentData['OOPS']); ?>">

                   <label for="WS">WS:</label>
                  <input type="text" name="WS" value="<?php echo htmlspecialchars($studentData['WS']); ?>">

                  <label for="DB_LAB">DB-LAB:</label>
                  <input type="text" name="DB_LAB" value="<?php echo htmlspecialchars($studentData['DB_LAB']); ?>">

                  <label for="ADS_LAB">ADS-LAB:</label>
                  <input type="text" name="ADS_LAB" value="<?php echo htmlspecialchars($studentData['ADS_LAB']); ?>">

                  <label for="MPMC_LAB">MPMC-LAB:</label>
                  <input type="text" name="MPMC_LAB" value="<?php echo htmlspecialchars($studentData['MPMC_LAB']); ?>">

                  <label for="OOPS_LAB">OOPS-LAB</label>
                  <input type="text" name="OOPS_LAB" value="<?php echo htmlspecialchars($studentData['OOPS_LAB']); ?>">

                  <label for="WS_LAB">WS-LAB:</label>
                  <input type="text" name="WS_LAB"  value="<?php echo htmlspecialchars($studentData['WS_LAB']); ?>">

                  <label for="EE_III">EE-III:</label>
                  <input type="text" name="EE_III"  value="<?php echo htmlspecialchars($studentData['EE_III']); ?>">

                  <label for="Quants">QUANTS:</label>
                  <input type="text" name="Quants"  value="<?php echo htmlspecialchars($studentData['Quants']); ?>">

                  <label for="Verbal">Verbal:</label>
                  <input type="text" name="Verbal"  value="<?php echo htmlspecialchars($studentData['Verbal']); ?>">
                  
                  <label for="cgpa">CGPA:</label>
                  <input type="text" name="cgpa"  value="<?php echo htmlspecialchars($studentData['cgpa']); ?>">

                    <button type="submit" name="update">Update</button>
                </form>
            </div>
            <div class="container1">
    <form method="post" action="cgpa3.php">
        <button class="button" name="submit" value="login">Calculate CGPA</button>
    </form>
    </div>
        </body>
        </html>
        
        <?php
    } else {
        echo "Student not found.";
    }
} else {
    echo "Student id not provided.";
}

// Close the database connection
?>
