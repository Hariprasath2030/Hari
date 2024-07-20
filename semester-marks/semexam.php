<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Semester Grades pages </title>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      
      .home-section{
  text-align: center;
  padding: 13% 2%;
  justify-content: space-between;
  align-items: center;
  background-image:radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(eeee.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
      }

    .text-box h1 {
      font-size: 100px;
      color: cyan;
    }
 
    .text-box span {
      color: cyan;
      font-size: 90px;
      animation: alternate-reverse;
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
               background-image: url(eeee.jpg);
               background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(eeee.jpg);
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

#results {
            margin-top: 20px;
        }
        #results ul {
            list-style-type: none;
            padding: 0;
        }
        #results li {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        .student-name {
            font-weight: bold;
        }
        .roll-no {
            margin-bottom: 5px;
            font-style: italic;
            color: #666;
        }
        .subjects {
            margin-top: 5px;
        }
        h1 {

            text-align: center;
            color:cyan;
        }
        #searchForm {
          color:white;
            margin-bottom: 20px;
            text-align: center;
        }
        #searchForm input[type="text"] {
            padding: 8px;
            width: 300px;
            font-size: 16px;
        }
        #searchForm button {
            padding: 8px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        #results {
            margin-top: 20px;
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
 
        .student-name {
            font-weight: bold;
        }
        .roll-no {
            font-style: italic;
            color: #666;
        }
        .subjects {
            text-align: left;
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
form {
    margin: 20px; /* Adjust margin */
    padding: 20px;
    max-width: 600px;
    background-color:  #313030;
    border-radius: 8px;
    opacity: 90%;
    border: 2px solid cyan;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Input styles */
form input[type="text"],
form select {
  width: 70%; /* Adjust width as needed */
  padding: 10px;
  margin-bottom: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box; /* Ensure padding is included in width */
}

/* Select styles */
form select {
  width: 90%; /* Adjust width as needed */
  margin-left: 0px;
}

/* Button styles */
form button {
  padding: 10px 20px;
  font-size: 16px;
  background-color:black; /* Blue button background color */
  color: #fff; /* Button text color */
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

form button:hover {
  background-color: cyan;
  color:black; /* Darker blue on hover */
}
    </style>
  </head>
  <body style="overflow: hidden;">
  <nav>
      <div class="logo">SEMESTER GRADES</div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <ul>
        <li>
          <label for="btn-1" class="show-1">SEM 1 +</label>
          <a href="/project/semester-marks/semexam-1/sem1.php">SEM 1</a>
        </li>
        <li>
          <label for="btn-2" class="show-1">SEM 2 +</label>
          <a href="#">SEM 2</a>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 3 +</label>
          <a href="#">SEM 3</a>
         </li>
        <li>
          <label for="btn-1" class="show-1">SEM 4 +</label>
          <a href="#">SEM 4</a>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 5 +</label>
          <a href="#">SEM 5</a>
          </li>
        <li>
          <label for="btn-1" class="show-1">SEM 6  +</label>
          <a href="#">SEM 6</a>
         </li>
        <li>
          <label for="btn-1" class="show-1">SEM 7 +</label>
          <a href="#">SEM 7</a>
          </li>
        <li>
          <label for="btn-1" class="show-1">SEM 8 +</label>
          <a href="#">SEM 8</a>
           </li>
        <li>
          <label for="btn-1" class="show-1">Back</label>
          <a href="/project/first1.php">Back</a>
        </li>
      </ul>
    </nav>
    <br>
    <br>
    <h1>Search Students</h1>
    <br>
    <br>
    <form id="searchForm" method="POST">
    <label for="searchType">Search Type:</label>
    <select id="searchType" name="searchType"  required style="width: 150px; height: 30px; padding: 5px; border-radius: 4px; border: 2px solid cyan;">>
      <option value="roll_no">Roll No</option>
      <option value="name">Name</option>
    </select>
    <label for="search">Enter search term:</label>
    <input type="text" id="search" name="search"  required style="width: 150px; height: 30px; padding: 5px; border-radius: 4px; border: 2px solid cyan;">
    <button type="submit">Search</button>
    </form>
    <div class="container">
        <div id="results">
            <h2>Search Results:</h2>
            <table id="studentsTable">
                <thead>
                    <tr>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>Tamil</th>
                        <th>English</th>
                        <th>CTPS</th>
                        <th>Maths</th>
                        <th>ITES</th>
                        <th>Economics</th>
                        <th>CTPS_LAB</th>
                        <th>ITES_LAB</th>
                        <th>EE_1</th>
                        <th>Crop</th>
                        <th>EA_LAB</th>
                    </tr>
                </thead>
                <tbody id="studentsList"></tbody>
            </table>
        </div>
    </div>
    <script>
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
            searchStudents();
        });

        function searchStudents() {
            const searchInput = document.getElementById('search').value.trim();
            const searchType = document.getElementById('searchType').value;
            if (searchInput === '') {
                alert('Please enter a search term.');
                return;
            }

            const xhr = new XMLHttpRequest();
            const url = 'ajaxsem.php';
            const params = 'searchTerm=' + encodeURIComponent(searchInput) + '&searchType=' + encodeURIComponent(searchType);
            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (xhr.status === 200) {
                    const students = JSON.parse(xhr.responseText);
                    displayStudents(students);
                } else {
                    alert('Request failed. Please try again.');
                }
            };

            xhr.onerror = function() {
                alert('Request failed. Please try again.');
            };

            xhr.send(params);
        }

        function displayStudents(students) {
            const studentsList = document.getElementById('studentsList');
            studentsList.innerHTML = ''; // Clear previous results

            if (students.length === 0) {
                const noResultsRow = document.createElement('tr');
                noResultsRow.innerHTML = '<td colspan="13">No results found.</td>';
                studentsList.appendChild(noResultsRow);
            } else {
                students.forEach(function(student) {
                    const studentRow = document.createElement('tr');
                    studentRow.innerHTML = `
                        <td>${student.roll_no}</td>
                        <td>${student.name}</td>
                        <td>${student.Tamil}</td>
                        <td>${student.English}</td>
                        <td>${student.CTPS}</td>
                        <td>${student.Maths}</td>
                        <td>${student.ITES}</td>
                        <td>${student.Economics}</td>
                        <td>${student.CTPS_LAB}</td>
                        <td>${student.ITES_LAB}</td>
                        <td>${student.EE_1}</td>
                        <td>${student.Crop}</td>
                        <td>${student.EA_LAB}</td>
                    `;
                    studentsList.appendChild(studentRow);
                });
            }
        }
    </script>
</body>
</html>