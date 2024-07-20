<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "mark_exam";

// Use procedural style for database connection
$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Error in connecting" . mysqli_error($con));
}

if (isset($_GET['id'])) {
    $studentId = $_GET['id'];

    // Retrieve the student details based on the id
    $result = $con->query("SELECT * FROM mark1 WHERE id = $studentId");

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
            <title>Edit Student Marks Details</title>
            <!-- Your existing styles here -->
            <style>
                 body {
    font-family: Arial, sans-serif;
   background-image: url(llll.jpg);
   background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(llll.jpg);
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
   top: 245%;
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
                <h2>Edit Student Marks Details</h2>
                <form method="post" action="semmarkupdate.php">
    
                    <input type="hidden" name="student_id" value="<?php echo $studentData['id']; ?>">

                    <label for="roll_no">Roll No:</label>
                    <input type="text" name="roll_no" value="<?php echo htmlspecialchars($studentData['roll_no']); ?>">

                    <label for="name">Name:</label>
                    <input type="text" name="name" value="<?php echo htmlspecialchars($studentData['name']); ?>">

                    <label for="Tamil">Tamil:</label>
                    <input type="text" name="Tamil" value="<?php echo htmlspecialchars($studentData['Tamil']); ?>">

                    <label for="English">English:</label>
                   <input type="text" name="English" value="<?php echo htmlspecialchars($studentData['English']); ?>">

                    <label for="CTPS">CTPS:</label>
                    <input type="text" name="CTPS" value="<?php echo htmlspecialchars($studentData['CTPS']); ?>">

                    <label for="Maths">Maths:</label>
                   <input type="text" name="Maths" value="<?php echo htmlspecialchars($studentData['Maths']); ?>">

                   <label for="ITES">ITES:</label>
                   <input type="text" name="ITES" value="<?php echo htmlspecialchars($studentData['ITES']); ?>">

                   <label for="Economics">Economics:</label>
                  <input type="text" name="Economics" value="<?php echo htmlspecialchars($studentData['Economics']); ?>">

                  <label for="CTPS_LAB">CTPS-LAB:</label>
                  <input type="text" name="CTPS_LAB" value="<?php echo htmlspecialchars($studentData['CTPS_LAB']); ?>">

                  <label for="ITES_LAB">ITES-LAB:</label>
                  <input type="text" name="ITES_LAB" value="<?php echo htmlspecialchars($studentData['ITES_LAB']); ?>">

                  <label for="EE_1">EE-1:</label>
                  <input type="text" name="EE_1" value="<?php echo htmlspecialchars($studentData['EE_1']); ?>">

                  <label for="Crop">Crop:</label>
                  <input type="text" name="Crop"  value="<?php echo htmlspecialchars($studentData['Crop']); ?>">

                  <label for="EA_LAB">ENGINE ASSEMBLY-LAB:</label>
                  <input type="text" name="EA_LAB"  value="<?php echo htmlspecialchars($studentData['EA_LAB']); ?>">

                    <button type="submit" name="update">Update</button>
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
