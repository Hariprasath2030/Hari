<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>CURRICULAM pages </title>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

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
               background-image: url(kkkk.jpg);
               background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(kkkk.jpg);
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
  text-decoration: none;
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

header{
  font-size: 35px;
  font-weight: 600;
  padding: 10px 0;
}
p{
  font-size: 30px;
  font-weight: 500;
}

.content h2 {
            font-size: 24px;
            margin-bottom: 20px; /* Adding margin bottom for spacing */
            color: cyan;
            background: -webkit-linear-gradient(cyan, cyan);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
        }
        .theory-buttons, .lab-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .theory-buttons button, .lab-buttons button {
            font-size: 20px; /* Increased font size for buttons */
            padding: 20px 30px; /* Increased padding for buttons */
            margin-bottom: 10px; /* Adding margin bottom for spacing */
            color: #000000;
            background-color: #ffffff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            width: 100%; /* Make buttons fill their container */
            max-width: 300px; /* Increased maximum width for buttons */
            height: auto; /* Set height to auto to match the highest button size */
        }

        .theory-buttons button:hover, .lab-buttons button:hover {
            background-color: black;
        }
        .section-heading {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 10px;
        }
    </style>
  </head>
  <body style="overflow: hidden;">
  <nav>
      <div class="logo">CURRICULAM </div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <ul>
        <li>
          <label for="btn-1" class="show-1">SEM 1 +</label>
          <a href="/project/Curriculum/sem-1/sem1.php">SEM 1</a>
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
          <a href="/project/Curriculum/cir1.php">Back</a>
        </li>
      </ul>
    </nav>
    
    <!-- Main content area -->
    <div class="container-fluid mt-5"> <!-- Changed container to container-fluid for full width -->
        <div class="row">
            <div class="col-md-6"> <!-- Changed col to col-md-6 for half width on medium screens and above -->
                <div id="theory3" class="content">
                    <h2 class="section-heading">Sem 3-Theory</h2>
                    <div class="theory-buttons">
                        <div class="row">
                            <div class="col">
                                <a href="oops.html"><button class="btn btn-primary mb-3">OBJECT ORIENTED PROGRAMMING</button></a>
                                <a href="maths.html"><button class="btn btn-primary mb-3">DISCRETE MATHEMATICS</button></a>
                                <a href="mpmc.html"><button class="btn btn-primary mb-3">MICROPROCESSORS AND MICRO CONTROLLERS</button></a>
                                <a href="cep1.html"><button class="btn btn-primary mb-3">CAREER ENHANCEMENT PROGRAMME - 1</button></a>
                            </div>
                            <div class="col">
                                <a href="db.html"><button class="btn btn-primary mb-3">DATABASE TECHNOLOGY</button></a>
                                <a href="ads.html"><button class="btn btn-primary mb-3">ADVANCED DATA STRUCTURES AND ALGORITHMS</button></a>
                                <a href="ws.html"><button class="btn btn-primary mb-3">WEB SCRIPTING</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6"> <!-- Changed col to col-md-6 for half width on medium screens and above -->
                <div id="lab3" class="content">
                    <h2 class="section-heading">Sem 3-lab</h2>
                    <div class="lab-buttons">
                        <div class="row">
                            <div class="col">
                                <a href="oopslab.html"><button class="btn btn-primary mb-3">OBJECT ORIENTED PROGRAMMING</button></a>
                                <a href="adslab.html"><button class="btn btn-primary mb-3">ADVANCED DATA STRUCTURES AND ALGORITHMS</button></a>
                                <a href="wslab.html"><button class="btn btn-primary mb-3">WEB SCRIPTING</button></a>
                            </div>
                            <div class="col">
                                <a href="dblab.html"><button class="btn btn-primary mb-3">DATABASE TECHNOLOGY</button></a>
                                <a href="mpmclab.html"><button class="btn btn-primary mb-3">MICROPROCESSORS AND MICRO CONTROLLERS</button></a>
                                <a href="ee.html"><button class="btn btn-primary mb-3">ENGINEEERING EXPLORATION - 2</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    <!-- JavaScript to toggle visibility of content on button click -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript to toggle visibility of content on button click
        document.getElementById('sem3').addEventListener('click', function() {
            document.getElementById('theory3').style.display = 'block';
            document.getElementById('lab3').style.display = 'block';
        });
        document.getElementById('backButton').addEventListener('click', function() {
    // Perform the action you want when the back button is clicked
    // For example, you can hide all content or go back to the previous page
    // Here, we are simply hiding all content
    document.querySelectorAll('.content').forEach(function(element) {
        element.style.display = 'none';
    });
});
        <!-- JavaScript to toggle visibility of content on button click -->

    // JavaScript to toggle visibility of content on button click
    $(document).ready(function() {
        // Hide the content initially
        $('.content').hide();
        
        // When SEMESTER-3 link is clicked
        $('#sem3').click(function() {
            // Show the content
            $('.content').show();
            // Trigger click event on homepage link
            $('#sem1').trigger('click');
        });
    });
</script>
</body>
</html>