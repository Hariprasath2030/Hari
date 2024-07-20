<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <title>Student Details-IT sem-1 marks page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
   background-image: url(llll.jpg);
   background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(llll.jpg);
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Student Marks Details</h2>
        <form action="semmarkprocess.php" method="post">
            <label for="roll_no">Roll No:</label>
            <input type="text" name="roll_no" required>

            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="Tamil">Tamil:</label>
            <input type="text" name="Tamil" required>

            <label for="English">English:</label>
            <input type="text" name="English" required>

            <label for="CTPS">CTPS:</label>
            <input type="text" name="CTPS" required>

            <label for="Maths">Maths:</label>
            <input type="text" name="Maths" required>

            <label for="ITES">ITES:</label>
            <input type="text" name="ITES" required>

            <label for="Economics">Economics:</label>
            <input type="text" name="Economics" required>

            <label for="CTPS_LAB">CTPS-LAB:</label>
            <input type="text" name="CTPS_LAB" required>

            <label for="ITES_LAB">ITES-LAB:</label>
            <input type="text" name="ITES_LAB" required>

            <label for="EE_1">EE-1:</label>
            <input type="text" name="EE_1" required>

            <label for="Crop">Crop:</label>
            <input type="text" name="Crop" required>

            <label for="EA_LAB">ENGINE ASSEMBLY-LAB:</label>
            <input type="text" name="EA_LAB" required>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
