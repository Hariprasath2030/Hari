<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "projects";

// Use procedural style for database connection
$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Error in connecting" . mysqli_error($con));
}
$statusOptions = ['Completed', 'On Progress'];
$publicationOptions = ['Patent', 'Paper'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if an "Edit" button was clicked
    if (isset($_POST['edit'])) {
        $selectedStudentId = mysqli_real_escape_string($con, $_POST['selected_student_id']);

        // Retrieve the details of the selected student
        $result = $con->query("SELECT * FROM project3 WHERE id='$selectedStudentId'");
        $selectedStudentData = $result->fetch_assoc();
    }

    // Process form submission for updating student details
    if (isset($_POST['save'])) {
        foreach ($_POST['students'] as $studentId => $details) {
            $team_no = mysqli_real_escape_string($con, $details['team_no']);
            $project_title = mysqli_real_escape_string($con, $details['project_title']);
            $project_status = mysqli_real_escape_string($con, $details['project_status']);
            $publication_type = mysqli_real_escape_string($con, $details['publication_type']);
            $publisher_name = mysqli_real_escape_string($con, $details['publisher_name']);

            // Update the student's marks
            $updateQuery = "UPDATE project3 SET team_no='$team_no', project_title='$project_title', project_status='$project_status', publication_type='$publication_type', publisher_name='$publisher_name' WHERE id='$studentId'";
            if (mysqli_query($con, $updateQuery)) {
                $_SESSION['success_message'] = "Project details updated successfully.";
            } else {
                $_SESSION['error_message'] = "Error updating project details: " . mysqli_error($con);
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
        $insertQuery = "INSERT INTO project3 (name, roll_no) VALUES ('$newStudentName', '$newStudentRollNo')";
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
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Project details for sem-3</title>
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
    body {
            font-family: Arial, sans-serif;
            font-family: Arial, sans-serif;
               background-image: url(uuuu.jpeg);
               background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(uuuu.jpeg);
              background-repeat: no-repeat;
                background-attachment: fixed; 
                 background-size: 100% 100%;
        }

        .container {
            max-width: 9000px; /* Adjusted width for better table display */
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
    width: 100px; /* Adjust the width as needed */
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
               background-image: url(uuuu.jpeg);
               background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(uuuu.jpeg);
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
      <div class="logo">PROJECT DETAILS</div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <ul>
        <li>
          <label for="btn-1" class="show-1">SEM 1 +</label>
          <a href="/project/projects/semproj-1/proj-1.php">SEM 1</a>
        </li>
        <li>
          <label for="btn-2" class="show-1">SEM 2 +</label>
          <a href="/project/projects/semproj-2/proj-2.php">SEM 2</a>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 3 +</label>
          <a href="/project/projects/semproj-3/proj-3.php">SEM 3</a>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 4 +</label>
          <a href="/project/projects/semproj-4/proj-4.php">SEM 4</a>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 5 +</label>
          <a href="/project/projects/semproj-5/proj-5.php">SEM 5</a>
         </li>
        <li>
          <label for="btn-1" class="show-1">SEM 6  +</label>
          <a href="/project/projects/semproj-6/proj-6.php">SEM 6</a>
         </li>
        <li>
          <label for="btn-1" class="show-1">SEM 7 +</label>
          <a href="/project/projects/semproj-7/proj-7.php">SEM 7</a>
       </li>
        <li>
          <label for="btn-1" class="show-1">SEM 8 +</label>
          <a href="/project/projects/semproj-8/proj-8.php">SEM 8</a>
           </li>
        <li>
          <label for="btn-1" class="show-1">Back</label>
          <a href="/project/projects/sem-projects.php">Back</a>
        </li>
      </ul>
    </nav>
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
        <h2>Project Details sem-3</h2>
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
        $database = "projects";
        $con = mysqli_connect($servername, $username, $password, $database);

        if (!$con) {
            die("Error in connecting" . mysqli_error($con));
        }

        // Retrieve data from the "project" table
        $result = $con->query("SELECT * FROM project3");
        // Display the data in a table
        if ($result->num_rows > 0) {
            echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>";
            echo "<table>";
            echo "<tr><th>Roll no</th><th>Name</th><th>Team No</th><th>Project Title</th><th>Project Status</th><th>Publication Type</th><th>Paper/Patent Name</th><th>File upload</th><th>Delete</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['roll_no'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td><input type='text' name='students[{$row['id']}][team_no]' value='" . $row['team_no'] . "' class='input-field'></td>";
                echo "<td><input type='text' name='students[{$row['id']}][project_title]' value='" . $row['project_title'] . "' class='input-field'></td>";
                echo "<td><select name='students[{$row['id']}][project_status]' class='input-field'>";
                foreach ($statusOptions as $option) {
                    $selected = ($row['project_status'] == $option) ? 'selected' : '';
                    echo "<option value='$option' $selected>$option</option>";
                }
                echo "</select></td>";
                
                echo "<td><select name='students[{$row['id']}][publication_type]' class='input-field'>";
                foreach ($publicationOptions as $option) {
                    $selected = ($row['publication_type'] == $option) ? 'selected' : '';
                    echo "<option value='$option' $selected>$option</option>";
                }
                echo "</select></td>";
               echo "<td><input type='text' name='students[{$row['id']}][publisher_name]' value='" . $row['publisher_name'] . "' class='input-field'></td>";
                echo "<td><a href='/phpupload/upload3.html?id=" . $row['id'] . "'><button type='button'>Upload</button></a></td>";
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

    <!-- Back button -->
   
</body>
</html>
