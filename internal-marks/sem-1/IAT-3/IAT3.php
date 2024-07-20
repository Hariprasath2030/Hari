<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "semester_1";

// Use procedural style for database connection
$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Error in connecting" . mysqli_error($con));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if an "Edit" button was clicked
    if (isset($_POST['edit'])) {
        $selectedStudentId = mysqli_real_escape_string($con, $_POST['selected_student_id']);

        // Retrieve the details of the selected student
        $result = $con->query("SELECT * FROM iat3 WHERE id='$selectedStudentId'");
        $selectedStudentData = $result->fetch_assoc();
    }

    // Process form submission for updating student details
    if (isset($_POST['save'])) {
        foreach ($_POST['students'] as $studentId => $details) {
            $tamil = mysqli_real_escape_string($con, $details['Tamil']);
            $english = mysqli_real_escape_string($con, $details['English']);
            $ctps = mysqli_real_escape_string($con, $details['CTPS']);
            $maths = mysqli_real_escape_string($con, $details['Maths']);
            $ites = mysqli_real_escape_string($con, $details['ITES']);
            $economics = mysqli_real_escape_string($con, $details['Economics']);

            // Update the student's marks
            $updateQuery = "UPDATE iat3 SET Tamil='$tamil', English='$english', CTPS='$ctps', Maths='$maths', ITES='$ites', Economics='$economics' WHERE id='$studentId'";
            if (mysqli_query($con, $updateQuery)) {
                $_SESSION['success_message'] = "Student details updated successfully.";
            } else {
                $_SESSION['error_message'] = "Error updating student details: " . mysqli_error($con);
            }
        }

        // Redirect to the same page to prevent form resubmission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    // Process form submission for adding a new student
    if (isset($_POST['add'])) {
        $newStudentName = mysqli_real_escape_string($con, $_POST['new_student_name']);
        $newStudentRollNo = mysqli_real_escape_string($con, $_POST['new_student_roll_no']);

        // Insert new student into the database
        $insertQuery = "INSERT INTO iat3 (name, roll_no) VALUES ('$newStudentName', '$newStudentRollNo')";
        if (mysqli_query($con, $insertQuery)) {
            $_SESSION['success_message'] = "New student added successfully.";
        } else {
            $_SESSION['error_message'] = "Error adding new student: " . mysqli_error($con);
        }

        // Redirect to the same page to prevent form resubmission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}

// Close the database connection
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>IT sem-1 IAT3</title>
<style>
        nav {
        background: #1b1b1b;
        padding: 10px 0;
    }

    .logo {
        color: white;
        font-size: 24px;
        font-weight: bold;
        margin-left: 20px;
    }

    ul.nav-links {
        float: right;
        margin-right: 20px;
        list-style: none;
    }

    ul.nav-links li {
        display: inline-block;
        margin-left: 20px;
    }

    ul.nav-links li a {
        color: white;
        text-decoration: none;
        font-size: 18px;
    }

    ul.nav-links li a:hover {
        color: cyan;
    }

    /* Dropdown menu */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #1b1b1b;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #333;
    }

    ul.nav-links li.dropdown:hover .dropdown-content {
        display: block;
    }
    /* Up table */
    .container2 {
    margin: 20px; /* Adjust margin */
    padding: 20px;
    max-width: 600px;
    background-color: white ;
    border-radius: 15px;
    opacity: 90%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

}
    .container2 button {
        background-color: Black;
        border: 1px solid Black;
        color: white;
        padding: 8px 22px;
        border-radius: 9px;
        text-decoration: none;
        font-size: 14px;
        cursor: pointer;
        left: 90.5%;
    }

    .container2 button:hover {
    color: cyan;
  border-radius: 5px;
  box-shadow:  0 0 5px #33ffff,
  0 0 10px #66ffff;
    }  
/* Back button*/
    .container1 button {
        background-color: Black;
        border: 1px solid Black;
        color: white;
        padding: 8px 22px;
        border-radius: 9px;
        text-decoration: none;
        font-size: 14px;
        cursor: pointer;
        left: 90.5%;
    }

    .container1 button:hover {
        background-color: white;
        color: Black;
    }
    .button {
        background-color: #ff004c ;
        border: none;
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
    /* Adjusted Main table display */
          body {
            font-family: Arial, sans-serif;
               background-image: url(bbbb.jpg);
               background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(bbbb.jpg);
              background-repeat: no-repeat;
                background-attachment: fixed; 
                 background-size: 100% 100%;
        }

        .container {
            max-width: 10000px; /* Adjusted width for better table display */
            margin: 40px auto;
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
            border: 1px solid cyan;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color:  Black;
            color: white;
        }
        button[name='save'] {
        background-color: Black;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 9px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
        left: 90.5%;
    }

    button[name='save']:hover {
      color: cyan;
  border-radius: 5px;
  box-shadow:  0 0 5px #33ffff,
  0 0 10px #66ffff;
    }
    /* Add this CSS for the button styling */
table a button {
    background-color: Black;
    border: none;
    color: white;
    padding: 8px 15px;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    cursor: pointer;
}

table a button:hover {
  color: cyan;
  border-radius: 5px;
  box-shadow:  0 0 5px #33ffff,
  0 0 10px #66ffff;
}
.input-field {
    background-color: #b2bdd1;
    width: 150px; /* Adjust the width as needed */
    height: 30px; /* Adjust the height as needed */
    padding: 5px; /* Add padding for better appearance */
    border-radius: 5px; /* Add border-radius for rounded corners */
    border: 1px solid #ccc; /* Add border for visual separation */
}

.input-field:hover {
    border-color: #ff004c; /* Change border color on hover */
    background-color: #b7d9d1; /* Change background color on hover */
}
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
    font-family: Arial, sans-serif;
               background-image: url(bbbb.jpg);
               background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(bbbb.jpg);
              background-repeat: no-repeat;
                background-attachment: fixed; 
                 background-size: 100% 100%;
}
nav{
  background: #1b1b1b;
}
nav:after{
  content: '';
  clear: both;
  display: table;
}
nav .logo{
  float: left;
  color: white;
  font-size: 27px;
  font-weight: 600;
  line-height: 70px;
  padding-left: 60px;
}
nav ul{
  float: right;
  margin-right: 40px;
  list-style: none;
  position: relative;
}
nav ul li{
  float: left;
  display: inline-block;
  background: #1b1b1b;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  line-height: 70px;
  text-decoration: none;
  font-size: 18px;
  padding: 8px 15px;
}
nav ul li a:hover{
  color: cyan;
  border-radius: 5px;
  box-shadow:  0 0 5px #33ffff,
  0 0 10px #66ffff;
}
nav ul ul li a:hover{
  box-shadow: none;
}
nav ul ul{
  position: absolute;
  top: 90px;
  border-top: 3px solid cyan;
  opacity: 0;
  visibility: hidden;
  transition: top .3s;
}
nav ul ul ul{
  border-top: none;
}
nav ul li:hover > ul{
  top: 70px;
  opacity: 1;
  visibility: visible;
}
nav ul ul li{
  position: relative;
  margin: 0px;
  width: 150px;
  float: none;
  display: list-item;
  border-bottom: 1px solid rgba(0,0,0,0.3);
}
nav ul ul li a{
  line-height: 50px;
}
nav ul ul ul li{
  position: relative;
  top: -60px;
  left: 150px;
}
.show-1,.icon{
  display: none;
}
.fa-plus{
  font-size: 15px;
  margin-left: 40px;
}
@media all and (max-width: 968px) {
  nav ul{
    margin-right: 0px;
    float: left;
  }
  nav .logo{
    padding-left: 30px;
    width: 100%;
  }
  .show-1 + a, ul{
    display: none;
  }
  nav ul li,nav ul ul li{
    display: block;
    width: 100%;
  }
  nav ul li a:hover{
    box-shadow: none;
  }
  .show-1{
    display: block;
    color: white;
    font-size: 18px;
    padding: 0 20px;
    line-height: 70px;
    cursor: pointer;
  }
  .show-1:hover{
    color: cyan;
  }
  .icon{
    display: block;
    color: white;
    position: absolute;
    top: 0;
    right: 40px;
    line-height: 70px;
    cursor: pointer;
    font-size: 25px;
  }
  nav ul ul{
    top: 70px;
    border-top: 0px;
    float: none;
    position: static;
    display: none;
    opacity: 1;
    visibility: visible;
  }
  nav ul ul a{
    padding-left: 40px;
  }
  nav ul ul ul a{
    padding-left: 80px;
  }
  nav ul ul ul li{
    position: static;
  }
  [id^=btn]:checked + ul{
    display: block;
  }
  nav ul ul li{
    border-bottom: 0px;
  }
  span.cancel:before{
    content: '\f00d';
  }
}
.content{
  z-index: -1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  text-align: center;
}
header{
  font-size: 35px;
  font-weight: 600;
  padding: 10px 0;
}
p{
  font-size: 30px;
  font-weight: 500;
}

    </style>
    <!-- ... (Your existing head content) ... -->
</head>
<body>
<nav>
      <div class="logo">INTERNAL MARKS</div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <ul>
        <li>
          <label for="btn-1" class="show-1">SEM 1 +</label>
          <a href="#">SEM 1</a>
          <ul>
            <li><a href="/project/internal-marks/sem-1/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/project/internal-marks/sem-1/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/project/internal-marks/sem-1/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-2" class="show-1">SEM 2 +</label>
          <a href="#">SEM 2</a>
          <ul>
          <li><a href="/project/internal-marks/sem-2/IAT-1/IAT1.php">IAT-1</a></li>
            <li><a href="/project/internal-marks/sem-2/IAT-2/IAT2.php">IAT-2</a></li>
            <li><a href="/project/internal-marks/sem-2/IAT-3/IAT3.php">IAT-3</a></li>
         </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 3 +</label>
          <a href="#">SEM 3</a>
          <ul>
            <li><a href="/project/internal-marks/sem-3/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/project/internal-marks/sem-3/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/project/internal-marks/sem-3/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 4 +</label>
          <a href="#">SEM 4</a>
          <ul>
            <li><a href="/project/internal-marks/sem-4/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/project/internal-marks/sem-4/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/project/internal-marks/sem-4/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 5 +</label>
          <a href="#">SEM 5</a>
          <ul>
            <li><a href="/project/internal-marks/sem-5/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/project/internal-marks/sem-5/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/project/internal-marks/sem-5/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 6  +</label>
          <a href="#">SEM 6</a>
          <ul>
            <li><a href="/project/internal-marks/sem-6/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/project/internal-marks/sem-6/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/project/internal-marks/sem-6/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 7 +</label>
          <a href="#">SEM 7</a>
          <ul>
            <li><a href="/project/internal-marks/sem-7/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/project/internal-marks/sem-7/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/project/internal-marks/sem-7/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 8 +</label>
          <a href="#">SEM 8</a>
          <ul>
            <li><a href="/project/internal-marks/sem-8/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/project/internal-marks/sem-8/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/project/internal-marks/sem-8/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">Back</label>
          <a href="/project/internal-marks/filesearch.php">Back</a>
        </li>
      </ul>
    </nav>

     <!-- Add new student section -->
     <!-- Add new student section -->
     <div class="container2">
  
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="new_student_roll_no">Roll No:</label>
      <input type="text" name="new_student_roll_no" required style="width: 100px; height: 30px; padding: 5px; border-radius: 5px; border: 1px solid #ccc;">

      <label for="new_student_name">Name:</label>
      <input type="text" name="new_student_name" required style="width: 150px; height: 30px; padding: 5px; border-radius: 5px; border: 1px solid #ccc;">
      <button type="submit" name="add">Add Student</button>
  </form>
</div>


    <div class="container">
        <!-- Display the existing student details table with editable fields -->
        <h2>IAT-3 MARKS</h2>
        <?php
        // Display success or error messages
        if (isset($_SESSION['success_message'])) {
            echo "<p>" . $_SESSION['success_message'] . "</p>";
            unset($_SESSION['success_message']);
        }

        if (isset($_SESSION['error_message'])) {
            echo "<p style='color: red;'>" . $_SESSION['error_message'] . "</p>";
            unset($_SESSION['error_message']);
        }
        // Display the existing student details table
        // Connect to MySQL database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "semester_1";
        $con = mysqli_connect($servername, $username, $password, $database);

        if (!$con) {
            die("Error in connecting" . mysqli_error($con));
        }

        // Retrieve data from the database
        $result = $con->query("SELECT * FROM iat3");

        // Display the data in a table
        if ($result->num_rows > 0) {
            echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
            echo "<table>";
            echo "<tr><th>Roll No</th><th>Name</th><th>Tamil</th><th>English</th><th>CTPS</th><th>Maths</th><th>ITES</th><th>Economics</th><th>Delete</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['roll_no'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td><input type='number' name='students[{$row['id']}][Tamil]' value='" . $row['Tamil'] . "' class='input-field'></td>";
                echo "<td><input type='number' name='students[{$row['id']}][English]' value='" . $row['English'] . "' class='input-field'></td>";
                echo "<td><input type='number' name='students[{$row['id']}][CTPS]' value='" . $row['CTPS'] . "' class='input-field'></td>";
                echo "<td><input type='number' name='students[{$row['id']}][Maths]' value='" . $row['Maths'] . "' class='input-field'></td>";
                echo "<td><input type='number' name='students[{$row['id']}][ITES]' value='" . $row['ITES'] . "' class='input-field'></td>";
                echo "<td><input type='number' name='students[{$row['id']}][Economics]' value='" . $row['Economics'] . "' class='input-field'></td>";
                echo "<td><a href='delete3.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this student?\")'><button type='button'>Delete</button></a></td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "<button type='submit' name='save'>Save All</button>";
            echo "</form>";
        } else {
            echo "<p>No student details available.</p>";
        }

        // Close database connection
        $con->close();
        ?>
</div>

</body>
</html>
