<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://fonts.googleapis.com/css?family=Vollkorn:400,400i,600,700,900&display=swap"
    rel="stylesheet"
  />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
/>


    <link rel="stylesheet" href="style.css">
    <title>Himachal Tourism</title>
</head>
<body>
    <header class="header ">
        <div class="img-wrapper ">
    <img src="images/Chitkul-Valley.webp " alt="background">
        </div>
        <div class="shift">
        <button class="login"  onclick="login()" >Login</button>
        <button  class="signup" onclick="signup()" >SignUp</button>
        </div>
        <div class="first">
        <h1> Himachal Tourism </h1>
        <p class="left">UNFORGETTABLE holidays in the Mountains</p>
        
      </div>
    </header>


    
<!-- login Page -->

<div class="bg-modal">
    <div class="modal-contents">
      <a class="close" onclick="close2()">+</a>
      <img src="images/user1.png" alt="" class="userImage">
      <form action="database.php"  method="POST">
        <input type="email" placeholder="example@gmail.com" name="mail" autocomplete="off" required>
        <input type="password" placeholder="Password" name="pass" autocomplete="off" required>
        <input class="loginButton loginbutton" value="Login" type="submit" name="login" ><br>
        <a href="#" style="font-size: 1.5em; color: aqua;">Forgot Password ?</a>
      </form>
  
    </div>
  </div>
  
  
  
  <!-- SignUp Page -->
  
  <div class="bg-modal1">
    <div class="signup-contents">
   <a class="close1" onclick="close1()">+</a>
     <h1 class="heading">Register</h1>
      <form action="database.php"  method="POST">
        <input type="text" placeholder="Firstname" name="fname" autocomplete="off" required>
        <input type="text" placeholder="Lastname" name="Lname" autocomplete="off" required>
        <input type="email" placeholder="example@gmail.com" name="mail" autocomplete="off" required>
        <input type="password" placeholder="Password" name="pass" autocomplete="off" required>
        <input type="text" placeholder="contact" name="contact" autocomplete="off" pattern="[789][0-9]{9}" required>
        <input type="text" placeholder="City" name="city" autocomplete="off" required>
        <input class="loginButton registerButton" value="Register" type="submit" name="register" ><br>
        
      </form>
  


    </div>
  </div>

  <script type="text/javascript">

document.querySelector('.bg-modal').style.display = "none";
document.querySelector('.bg-modal1').style.display = "none";

function login(){
    document.querySelector('.login').addEventListener("click", ()=> {
	document.querySelector('.bg-modal').style.display = "flex";
});

  }
 function close2(){
document.querySelector('.close').addEventListener("click",()=> {
	document.querySelector('.bg-modal').style.display = "none";
  });
}


function signup(){
    document.querySelector('.signup').addEventListener("click", ()=> {
	document.querySelector('.bg-modal1').style.display = "flex";
});

  }
  
  function close1(){
document.querySelector('.close1').addEventListener("click",()=> {
	document.querySelector('.bg-modal1').style.display = "none";
  });
}
  </script>
 </body>
</html>
<?php
error_reporting(0);
session_start();
if($_SESSION['log']==1)
{
  session_destroy();
  echo "<script>
  document.querySelector('.bg-modal').style.display = 'flex';
  </script>";
}

?>