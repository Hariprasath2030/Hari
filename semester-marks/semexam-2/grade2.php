<!DOCTYPE html>
<html>
    <head>
        <title>GPA Calculator</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                background: linear-gradient(135deg, #3494E6, #EC6EAD);
                text-align: center;
                padding: 20px;
                margin: 0;
            }
    
            .container {
                background-color: #fff;
                border-radius: 8px;
                padding: 20px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                max-width: 500px;
                margin: 0 auto;
            }
    
            h1 {
                color: #333;
            }
    
            label {
                font-weight: bold;
                display: block;
                margin-top: 10px;
            }
    
            input[type="text"] {
                width: 100%;
                padding: 8px;
                margin: 5px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
    
            button[type="submit"] {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
            }
    
            button[type="submit"]:hover {
                background-color: #0056b3;
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
            <h1 class="mt-5">GPA Calculator</h1>
            <form id="gradeForm" class="mt-4">
                <div class="form-group">
                    <label for="CDSLab">C and ds lab:</label>
                    <input type="text" class="form-control" id="CDSLab" name="CDSLab" required>
                </div>
    
                <div class="form-group">
                    <label for="WpLab">Wp Lab:</label>
                    <input type="text" class="form-control" id="WpLab" name="WpLab" required>
                </div>
    
                <div class="form-group">
                    <label for="DpsdLab">Dpsd Lab:</label>
                    <input type="text" class="form-control" id="DpsdLab" name="DpsdLab" required>
                </div>
    
                <div class="form-group">
                    <label for="EELab">EE Lab:</label>
                    <input type="text" class="form-control" id="EELab" name="EELab" required>
                </div>
    
                <div class="form-group">
                    <label for="CDS">C&DS:</label>
                    <input type="text" class="form-control" id="CDS" name="CDS" required>
                </div>
    
                <div class="form-group">
                    <label for="Wp">Wp:</label>
                    <input type="text" class="form-control" id="Wp" name="Wp" required>
                </div>
    
                <div class="form-group">
                    <label for="CO">CO:</label>
                    <input type="text" class="form-control" id="CO" name="CO" required>
                </div>
    
                <div class="form-group">
                    <label for="DPSD">DPSD:</label>
                    <input type="text" class="form-control" id="DPSD" name="DPSD" required>
                </div>
    
                <div class="form-group">
                    <label for="Maths">Maths:</label>
                    <input type="text" class="form-control" id="Maths" name="Maths" required>
                </div>
    
                <div class="form-group">
                    <label for="English">English:</label>
                    <input type="text" class="form-control" id="English" name="English" required>
                </div>
    
                <div class="form-group">
                    <label for="Tamil">Tamil:</label>
                    <input type="text" class="form-control" id="Tamil" name="Tamil" required>
                </div>
    
                <div class="form-group">
                    <label for="Psychology">Psychology:</label>
                    <input type="text" class="form-control" id="Psychology" name="Psychology" required>
                </div>
    
                <button type="submit" class="btn btn-primary">Calculate GPA</button>
            </form>
            <div class="output-box">

                <div id="result" class="mt-3"></div>
            </div>
        </div>
    
    <script>
        document.getElementById("gradeForm").addEventListener("submit", function (event) {
            event.preventDefault();
            calculateGPA();
        });

        function calculateGPA() {
            var Credit = 0;
            var Grade = document.getElementById("CDSLab").value;
            var Grade1 = document.getElementById("WpLab").value;
            var Grade2 = document.getElementById("DpsdLab").value;
            var Grade3 = document.getElementById("EELab").value;
            var Grade4 = document.getElementById("CDS").value;
            var Grade5 = document.getElementById("Wp").value;
            var Grade6 = document.getElementById("CO").value;
            var Grade7 = document.getElementById("DPSD").value;
            var Grade8 = document.getElementById("Maths").value;
            var Grade9 = document.getElementById("English").value;
            var Grade10 = document.getElementById("Psychology").value;
            var Grade11 = document.getElementById("Tamil").value;

            if (Grade === "O")
                Credit = 10;
            else if (Grade === "A+")
                Credit = 9;
            else if (Grade === "A")
                Credit = 8;
            else if (Grade === "B+")
                Credit = 7;
            else if (Grade === "B")
                Credit = 6;
            else if (Grade === "C")
                Credit = 5;

            if (Grade1 === "O")
                Credit = Credit + 10;
            else if (Grade1 === "A+")
                Credit = Credit + 9;
            else if (Grade1 === "A")
                Credit = Credit + 8;
            else if (Grade1 === "B+")
                Credit = Credit + 7;
            else if (Grade1 === "B")
                Credit = Credit + 6;
            else if (Grade1 === "C")
                Credit = Credit + 5;

            if (Grade2 === "O")
                Credit = Credit + 10;
            else if (Grade2 === "A+")
                Credit = Credit + 9;
            else if (Grade2 === "A")
                Credit = Credit + 8;
            else if (Grade2 === "B+")
                Credit = Credit + 7;
            else if (Grade2 === "B")
                Credit = Credit + 6;
            else if (Grade2 === "C")
                Credit = Credit + 5;

            if (Grade3 === "O")
                Credit = Credit + (10 * 1);
            else if (Grade3 === "A+")
                Credit = Credit + (9 * 1);
            else if (Grade3 === "A")
                Credit = Credit + (8 * 1);
            else if (Grade3 === "B+")
                Credit = Credit + (7 * 1);
            else if (Grade3 === "B")
                Credit = Credit + (6 * 1);
            else if (Grade3 === "C")
                Credit = Credit + (5 * 1);


            if (Grade4 === "O")
                Credit = Credit + (10 * 3);
            else if (Grade4 === "A+")
                Credit = Credit + (9 * 3);
            else if (Grade4 === "A")
                Credit = Credit + (8 * 3);
            else if (Grade4 === "B+")
                Credit = Credit + (7 * 3);
            else if (Grade4 === "B")
                Credit = Credit + (6 * 3);
            else if (Grade4 === "C")
                Credit = Credit + (5 * 3);



            if (Grade5 === "O")
                Credit = Credit + (10 * 3);
            else if (Grade5 === "A+")
                Credit = Credit + (9 * 3);
            else if (Grade5 === "A")
                Credit = Credit + (8 * 3);
            else if (Grade5 === "B+")
                Credit = Credit + (7 * 3);
            else if (Grade5 === "B")
                Credit = Credit + (6 * 3);
            else if (Grade5 === "C")
                Credit = Credit + (5 * 3); 



                if (Grade6 === "O")
                Credit = Credit + (10 * 3);
            else if (Grade6 === "A+")
                Credit = Credit + (9 * 3);
            else if (Grade6 === "A")
                Credit = Credit + (8 * 3);
            else if (Grade6 === "B+")
                Credit = Credit + (7 * 3);
            else if (Grade6 === "B")
                Credit = Credit + (6 * 3);
            else if (Grade6 === "C")
                Credit = Credit + (5 * 3);



                if (Grade7 === "O")
                Credit = Credit + (10 * 3);
            else if (Grade7 === "A+")
                Credit = Credit + (9 * 3);
            else if (Grade7 === "A")
                Credit = Credit + (8 * 3);
            else if (Grade7 === "B+")
                Credit = Credit + (7 * 3);
            else if (Grade7 === "B")
                Credit = Credit + (6 * 3);
            else if (Grade7 === "C")
                Credit = Credit + (5 * 3);   

            

             if (Grade8 === "O")
                Credit = Credit + (10 * 3);
            else if (Grade8 === "A+")
                Credit = Credit + (9 * 3);
            else if (Grade8 === "A")
                Credit = Credit + (8 * 3);
            else if (Grade8 === "B+")
                Credit = Credit + (7 * 3);
            else if (Grade8 === "B")
                Credit = Credit + (6 * 3);
            else if (Grade8 === "C")
                Credit = Credit + (5 * 3);

             

             if (Grade9 === "O")
                Credit = Credit + (10 * 3);
            else if (Grade9 === "A+")
                Credit = Credit + (9 * 3);
            else if (Grade9 === "A")
                Credit = Credit + (8 * 3);
            else if (Grade9 === "B+")
                Credit = Credit + (7 * 3);
            else if (Grade9 === "B")
                Credit = Credit + (6 * 3);
            else if (Grade9 === "C")
                Credit = Credit + (5 * 3); 
            
                

                if (Grade10 === "O")
                Credit = Credit + (10 * 2);
            else if (Grade10 === "A+")
                Credit = Credit + (9 * 2);
            else if (Grade10 === "A")
                Credit = Credit + (8 * 2);
            else if (Grade10 === "B+")
                Credit = Credit + (7 * 2);
            else if (Grade10 === "B")
                Credit = Credit + (6 * 2);
            else if (Grade10 === "C")
                Credit = Credit + (5 * 2);
                


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

            var FC = Credit / 25;
            document.getElementById("result").innerHTML = "Your GPA is: " + FC.toFixed(2);
        }
    </script>
</body>
</html>
