<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Internals mark pages </title>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      
      .home-section{
  text-align: center;
  padding: 13% 2%;
  justify-content: space-between;
  align-items: center;
  background-image:radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(hhhh.jpg);
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
               background-image: url(hhhh.jpg);
               background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(hhhh.jpg);
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
  </head>

  <body style="overflow: hidden;">
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
            <li><a href="/login/student/internal-marks/sem-1/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/login/student/internal-marks/sem-1/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/login/student/internal-marks/sem-1/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-2" class="show-1">SEM 2 +</label>
          <a href="#">SEM 2</a>
          <ul>
          <li><a href="/login/student/internal-marks/sem-2/IAT-1/IAT1.php">IAT-1</a></li>
            <li><a href="/login/student/internal-marks/sem-2/IAT-2/IAT2.php">IAT-2</a></li>
            <li><a href="/login/student/internal-marks/sem-2/IAT-3/IAT3.php">IAT-3</a></li>
         </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 3 +</label>
          <a href="#">SEM 3</a>
          <ul>
            <li><a href="/login/student/internal-marks/sem-3/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/login/student/internal-marks/sem-3/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/login/student/internal-marks/sem-3/IAT-2/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 4 +</label>
          <a href="#">SEM 4</a>
          <ul>
            <li><a href="/login/student/internal-marks/sem-4/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/login/student/internal-marks/sem-4/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/login/student/internal-marks/sem-4/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 5 +</label>
          <a href="#">SEM 5</a>
          <ul>
            <li><a href="/login/student/internal-marks/sem-5/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/login/student/internal-marks/sem-5/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/login/student/internal-marks/sem-5/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 6  +</label>
          <a href="#">SEM 6</a>
          <ul>
            <li><a href="/login/student/internal-marks/sem-6/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/login/student/internal-marks/sem-6/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/login/student/internal-marks/sem-6/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 7 +</label>
          <a href="#">SEM 7</a>
          <ul>
            <li><a href="/login/student/internal-marks/sem-7/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/login/student/internal-marks/sem-7/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/login/student/internal-marks/sem-7/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">SEM 8 +</label>
          <a href="#">SEM 8</a>
          <ul>
            <li><a href="/login/student/internal-marks/sem-8/IAT-1/IAT1.php">IAT 1</a></li>
            <li><a href="/login/student/internal-marks/sem-8/IAT-2/IAT2.php">IAT 2</a></li>
            <li><a href="/login/student/internal-marks/sem-8/IAT-3/IAT3.php">IAT 3</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-1" class="show-1">Back</label>
          <a href="/login/student/first1.php">Back</a>
        </li>
      </ul>
    </nav>
<section class="home-section">
    <div class="text-box">
            <h1>IT<br><span>INTERNALS MARKS</span></h1>         
        </div>
  </section>

    <script>
      let arrow = document.querySelectorAll(".arrow");
      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e)=>{
          let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
          arrowParent.classList.toggle("showMenu");
        });
      }
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".bx-menu");
      console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("close");
      });
    </script>
  </body>
</html>