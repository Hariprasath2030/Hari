
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <title>CGPA calculation sem-4 grade</title>
    <style>
           body {
    font-family: Arial, sans-serif;
   background-image: url(iiii.jpg);
   background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(iiii.jpg);
   background-repeat: no-repeat;
   background-attachment: fixed; 
   background-size: 100% 100%;
}
a {
  color: #fff; /* Set the text color */
  text-decoration: none; /* Remove underline */
  font-size: 36px;
  margin-top: 0px; /* Adjust as needed */
  display: block; /* Make it a block element for better spacing */
}

a:hover {
  color: #ff004c; /* Change text color on hover */
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


.container button{
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
        .container button:active{
            background-color: black;
            color: white;
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
            #result {
                font-size: 24px;
                font-weight: bold;
                margin-top: 20px;
            }
            .output-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
            background-color: #f8f8f8;
        }

    </style>
</head>
<body>
  <div class="container">
        <h2 class="mt-5">Calculate CGPA SEM -4</h2>
        <form id="gradeForm" class="mt-4">

            <label for="OPERATING_SYSTEMS">OPERATING-SYSTEMS:</label>
            <input type="text" class="form-control" id="OPERATING_SYSTEMS" name="OPERATING_SYSTEMS" required>

            <label for="EMBEDDED_SYSTEMS">EMBEDDED-SYSTEMS:</label>
            <input type="text" class="form-control" id="EMBEDDED_SYSTEMS" name="EMBEDDED_SYSTEMS" required>

            <label for="DA">DA:</label>
            <input type="text" class="form-control" id="DA" name="DA" required>

            <label for="AJP">AJP:</label>
            <input type="text" class="form-control" id="AJP" name="AJP" required>

            <label for="ADVANCED_DATABASES ">ADVANCED-DATABASES:</label>
            <input type="text" class="form-control" id="ADVANCED_DATABASES " name="ADVANCED_DATABASES " required>

            <label for="ADVANCED_DATABASES_LAB">ADVANCED-DATABASES-LAB:</label>
            <input type="text" class="form-control" id="ADVANCED_DATABASES_LAB" name="ADVANCED_DATABASES_LAB" required>

            <label for="AJP_LAB">AJP-LAB:</label>
            <input type="text" class="form-control" id="AJP_LAB" name="AJP_LAB" required>

            <label for="OPERATING_SYSTEMS_LAB">OPERATING-SYSTEMS-LAB:</label>
            <input type="text" class="form-control" id="OPERATING_SYSTEMS_LAB" name="OPERATING_SYSTEMS_LAB" required>

            <label for="EMBEDDED_SYSTEMS_LAB">EMBEDDED_SYSTEMS_LAB:</label>
            <input type="text" class="form-control" id="EMBEDDED_SYSTEMS_LAB" name="EMBEDDED_SYSTEMS_LAB" required>

            <label for="DA_LAB">DA-LAB:</label>
            <input type="text" class="form-control" id="DA_LAB" name="DA_LAB" required>

            <label for="EE_IV">EE-IV:</label>
            <input type="text" class="form-control" id="EE_IV" name="EE_IV" required>

            <label for="QUANTS">QUANTS:</label>
            <input type="text" class="form-control" id="QUANTS" name="QUANTS" required>

            <label for="VERBAL">VERBAL:</label>
            <input type="text" class="form-control" id="VERBAL" name="VERBAL" required>

            <button class="btn btn-primary" onclick="calculateGPA()">Calculate GPA</button>
          <div class="output-box">
          <div id="result" class="mt-3"></div>
          </div>
    </div>
    </form>
    <div class="container1">
    <form method="post" action="grade4.php">
        <button class="button" name="submit" value="login">Back</button>
    </form>
    </div>
    <script>
        document.getElementById("gradeForm").addEventListener("submit", function (event) {
            event.preventDefault();
            calculateGPA();
        });
        function calculateGPA() {
            var Credit = 0;
            var Grade = document.getElementById("OPERATING_SYSTEMS").value;
            var Grade1 = document.getElementById("EMBEDDED_SYSTEMS").value;
            var Grade2 = document.getElementById("DA").value;
            var Grade3 = document.getElementById("AJP").value;
            var Grade4 = document.getElementById("ADVANCED_DATABASES").value;
            var Grade5 = document.getElementById("ADVANCED_DATABASES_LAB").value;
            var Grade6 = document.getElementById("AJP_LAB").value;
            var Grade7 = document.getElementById("OPERATING_SYSTEMS_LAB").value;
            var Grade8 = document.getElementById("EMBEDDED_SYSTEMS_LAB").value;
            var Grade9 = document.getElementById("DA_LAB ").value;
            var Grade10 = document.getElementById("EE_IV").value;
            var Grade11 = document.getElementById("QUANTS").value;
            var Grade12 = document.getElementById("VERBAL").value;

            if (Grade === "O")
                Credit = Credit + (10 * 3);
            else if (Grade === "A+")
                Credit = Credit + (9 * 3);
            else if (Grade === "A")
                Credit = Credit + (8 * 3);
            else if (Grade === "B+")
                Credit = Credit + (7 * 3);
            else if (Grade === "B")
                Credit = Credit + (6 * 3);
            else if (Grade === "C")
                Credit = Credit + (5 * 3);
            
                if (Grade1 === "O")
                Credit = Credit + (10 * 3);
            else if (Grade1 === "A+")
                Credit = Credit + (9 * 3);
            else if (Grade1 === "A")
                Credit = Credit + (8 * 3);
            else if (Grade1 === "B+")
                Credit = Credit + (7 * 3);
            else if (Grade1 === "B")
                Credit = Credit + (6 * 3);
            else if (Grade1 === "C")
                Credit = Credit + (5 * 3); 
            
                if (Grade2 === "O")
                Credit = Credit + (10 * 3);
            else if (Grade2 === "A+")
                Credit = Credit + (9 * 3);
            else if (Grade2 === "A")
                Credit = Credit + (8 * 3);
            else if (Grade2 === "B+")
                Credit = Credit + (7 * 3);
            else if (Grade2 === "B")
                Credit = Credit + (6 * 3);
            else if (Grade2 === "C")
                Credit = Credit + (5 * 3); 
            
            
                if (Grade3 === "O")
                Credit = Credit + (10 * 4);
            else if (Grade3 === "A+")
                Credit = Credit + (9 * 4);
            else if (Grade3 === "A")
                Credit = Credit + (8 * 4);
            else if (Grade3 === "B+")
                Credit = Credit + (7 * 4);
            else if (Grade3 === "B")
                Credit = Credit + (6 * 4);
            else if (Grade3 === "C")
                Credit = Credit + (5 * 4); 
            

                if (Grade4 === "O")
                Credit = Credit + (10 * 4);
            else if (Grade4 === "A+")
                Credit = Credit + (9 * 4);
            else if (Grade4 === "A")
                Credit = Credit + (8 * 4);
            else if (Grade4 === "B+")
                Credit = Credit + (7 * 4);
            else if (Grade4 === "B")
                Credit = Credit + (6 * 4);
            else if (Grade4 === "C")
                Credit = Credit + (5 * 4); 
            
                if (Grade5 === "O")
                Credit = Credit + (10 * 4);
            else if (Grade5 === "A+")
                Credit = Credit + (9 * 4);
            else if (Grade5 === "A")
                Credit = Credit + (8 * 4);
            else if (Grade5 === "B+")
                Credit = Credit + (7 * 4);
            else if (Grade5 === "B")
                Credit = Credit + (6 * 4);
            else if (Grade5 === "C")
                Credit = Credit + (5 * 4); 
            
                if (Grade6 === "O")
                Credit = Credit + (10 * 4);
            else if (Grade6 === "A+")
                Credit = Credit + (9 * 4);
            else if (Grade6 === "A")
                Credit = Credit + (8 * 4);
            else if (Grade6 === "B+")
                Credit = Credit + (7 * 4);
            else if (Grade6 === "B")
                Credit = Credit + (6 * 4);
            else if (Grade6 === "C")
                Credit = Credit + (5 * 4); 
        

            
            
                if (Grade7 === "O")
                Credit = Credit + (10 * 1);
            else if (Grade7 === "A+")
                Credit = Credit + (9 * 1);
            else if (Grade7 === "A")
                Credit = Credit + (8 * 1);
            else if (Grade7 === "B+")
                Credit = Credit + (7 * 1);
            else if (Grade7 === "B")
                Credit = Credit + (6 * 1);
            else if (Grade7 === "C")
                Credit = Credit + (5 * 1);

            
                if (Grade8 === "O")
                Credit = Credit + (10 * 1);
            else if (Grade8 === "A+")
                Credit = Credit + (9 * 1);
            else if (Grade8 === "A")
                Credit = Credit + (8 * 1);
            else if (Grade8 === "B+")
                Credit = Credit + (7 * 1);
            else if (Grade8 === "B")
                Credit = Credit + (6 * 1);
            else if (Grade8 === "C")
                Credit = Credit + (5 * 1);
            

                if (Grade9 === "O")
                Credit = Credit + (10 * 1);
            else if (Grade9 === "A+")
                Credit = Credit + (9 * 1);
            else if (Grade9 === "A")
                Credit = Credit + (8 * 1);
            else if (Grade9 === "B+")
                Credit = Credit + (7 * 1);
            else if (Grade9 === "B")
                Credit = Credit + (6 * 1);
            else if (Grade9 === "C")
                Credit = Credit + (5 * 1);

                if (Grade10 === "O")
                Credit = Credit + (10 * 1);
            else if (Grade10 === "A+")
                Credit = Credit + (9 * 1);
            else if (Grade10 === "A")
                Credit = Credit + (8 * 1);
            else if (Grade10 === "B+")
                Credit = Credit + (7 * 1);
            else if (Grade10 === "B")
                Credit = Credit + (6 * 1);
            else if (Grade10 === "C")
                Credit = Credit + (5 * 1);

                if (Grade11 === "O")
                Credit = Credit + (10 * 1);
            else if (Grade11 === "A+")
                Credit = Credit + (9 * 1);
            else if (Grade11 === "A")
                Credit = Credit + (8 * 1);
            else if (Grade11 === "B+")
                Credit = Credit + (7 * 1);
            else if (Grade11 === "B")
                Credit = Credit + (6 * 1);
            else if (Grade11 === "C")
                Credit = Credit + (5 * 1);

                if (Grade12 === "O")
                Credit = Credit + (10 * 1);
            else if (Grade12 === "A+")
                Credit = Credit + (9 * 1);
            else if (Grade12 === "A")
                Credit = Credit + (8 * 1);
            else if (Grade12 === "B+")
                Credit = Credit + (7 * 1);
            else if (Grade12 === "B")
                Credit = Credit + (6 * 1);
            else if (Grade12 === "C")
                Credit = Credit + (5 * 1);


            var FC = Credit / 31;
            document.getElementById("result").innerHTML = "Your GPA is: " + FC.toFixed(2);
        }
    </script>
</body>
</html>
