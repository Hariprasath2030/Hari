<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <title>Student Details-IT sem-4</title>
    <style>
        body {
    font-family: Arial, sans-serif;
   background-image: url(jjjj.jpg);
   background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(jjjj.jpg);
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
   top: 296%;
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

    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Student Grade Details</h2>
        <form action="sem4process.php" method="post">
            <label for="roll_no">Roll No:</label>
            <input type="text" name="roll_no" required>

            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="OS">OPERATING-SYSTEMS:</label>
            <input type="text" name="OS" required>

            <label for="ES">EMBEDDED-SYSTEMS:</label>
            <input type="text" name="ES" required>

            <label for="DA">DA:</label>
            <input type="text" name="DA" required>

            <label for="AJP">AJP:</label>
            <input type="text" name="AJP" required>

            <label for="ADVANCED_DATABASES">ADVANCED-DATABASES:</label>
            <input type="text" name="ADVANCED_DATABASES" required>

            <label for="ADVANCED_DATABASES_LAB">ADVANCED-DATABASES-LAB:</label>
            <input type="text" name="ADVANCED_DATABASES_LAB" required>

            <label for="AJP_LAB">AJP-LAB:</label>
            <input type="text" name="AJP_LAB" required>

            <label for="OPERATING_SYSTEMS_LAB">OPERATING-SYSTEMS-LAB:</label>
            <input type="text" name="OPERATING_SYSTEMS_LAB" required>

            <label for="EMBEDDED_SYSTEMS_LAB">EMBEDDED-SYSTEMS-LAB:</label>
            <input type="text" name="EMBEDDED_SYSTEMS_LAB" required>

            <label for="DA_LAB">DA-LAB:</label>
            <input type="text" name="DA_LAB" required>

            <label for="EE_IV"> EE-IV:</label>
            <input type="text" name="EE_IV" required>

            <label for="QUANTS"> QUANTS:</label>
            <input type="text" name="QUANTS" required>

            <label for="VERBAL">VERBAL:</label>
            <input type="text" name="VERBAL" required>
            
        
            <label for="cgpa">Enter the CGPA:</label>
            <input type="text" name="cgpa" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="container1">
    <form method="post" action="cgpa4.php">
        <button class="button" name="submit" value="login">Calculate CGPA</button>
    </form>
    </div>
</body>


</html>
