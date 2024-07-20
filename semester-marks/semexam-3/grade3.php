<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <title>Student Details-IT sem-3</title>
    <style>
        body {
    font-family: Arial, sans-serif;
   background-image: url(hhhh.jpg);
   background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(hhhh.jpg);
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
   top: 314%;
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
        <form action="sem3process.php" method="post">
            <label for="roll_no">Roll No:</label>
            <input type="text" name="roll_no" required>

            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="Mathemeatics">Mathemeatics:</label>
            <input type="text" name="Mathemeatics" required>

            <label for="DB">DB:</label>
            <input type="text" name="DB" required>

            <label for="ADS">ADS:</label>
            <input type="text" name="ADS" required>

            <label for="MPMC">MPMC:</label>
            <input type="text" name="MPMC" required>

            <label for= "OOPS">OOPS:</label>
            <input type="text" name="OOPS" required>

            <label for="WS">ws:</label>
            <input type="text" name="WS" required>

            <label for="DB_LAB">DB-LAB:</label>
            <input type="text" name="DB_LAB" required>

            <label for="ADS_LAB">ADS-LAB:</label>
            <input type="text" name="ADS_LAB" required>

            <label for="MPMC_LAB">MPMC-LAB:</label>
            <input type="text" name="MPMC_LAB" required>

            <label for="OOPS_LAB">OOPS-LAB:</label>
            <input type="text" name="OOPS_LAB" required>

            <label for="WS_LAB">WS-LAB:</label>
            <input type="text" name="WS_LAB" required>

            <label for="EE_III">EE-III:</label>
            <input type="text" name="EE_III" required>

            <label for="Quants">QUANTS:</label>
            <input type="text" name="Quants" required>

            <label for="Verbal">VERBAL:</label>
            <input type="text" name="Verbal" required>
            
        
            <label for="cgpa">Enter the CGPA:</label>
            <input type="text" name="cgpa" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="container1">
    <form method="post" action="cgpa3.php">
        <button class="button" name="submit" value="login">Calculate CGPA</button>
    </form>
    </div>
</body>


</html>
