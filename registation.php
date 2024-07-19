<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student performance prediction website</title>
    
  <link rel="stylesheet" href="sty.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <style>
         body{
   background-image: url(tttt.jpg);
   background-image: radial-gradient(rgba(238, 235, 235, 0), rgb(48, 42, 42)), url(tttt.jpg);
   background-repeat: no-repeat;
   background-attachment: fixed; 
   background-size: 100% 100%;
 }
    </style>
   

<body>
<section class="header">
    <form class="registerform" name="registerform" action="process.php" method="post">
            <div class="loinfo">
                <h3>REGISTER</h3>
                    <form1>
                        <label for="name">FULL NAME</label>
                        <input type="text" id="name" name="regsitername" placeholder="YOUR NAME">
                        <label for="number">MOBILE NUMBER</label>
                        <input type="tel" id="number" name="registernumber" placeholder="YOUR NUMBER">
                    </form1>
                    <form2>
                        <label for="name">EMAIL</label>
                        <input type="email" id="name" name="registeremail" placeholder="YOUR EMAIL">
                        <label for="number">PASSWORD</label>
                        <input type="password" id="number" name="registerpassword" placeholder="YOUR PASSWORD">
                    </form2>
        
                    <button class="button" name="submit" value="login">Submit</button>
                <h1>Already Registered ? Login <a style="color:#11ABB0" href="index.html">Here</a></h1>
</div>
    </form>
</section>
</body>


</html>