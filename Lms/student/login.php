<?php
session_start();
?>
<?php
if(!isset($_SESSION["student"]))
{
?>
    <!DOCTYPE html>
<html>
<head>
<title>student login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/semantic.min.css">
<style type="text/css">
  .w3-container{
    margin-left: 660px;
    margin-top: 30px;
    border: 1px solid black;
    line-height: 35px;
    width: 40%;
    background-color: #ffffff ;
  }
  
  .w3-container label{
    font-size: 25px;
    font-family: verdana;
    font-style: italic;

  }
  #inp{
    font-size: 20px;
    font-family: verdana;
    font-style: italic;

  }
  body{
    background-image: url(images/back.jpg);
    background-size: cover;
  }

  #msg{
    width: 40%;
    margin-left: 29%;
  }

  #m1{
    margin-left: 345px;
  }
  .w3-container{
    margin-top: 155px;
  }
</style>


</head>

<body>
    
  <form class="w3-container" method="POST"  action="includes/login.inc.php">
  <div class="w3-center"><br>
        <img src="images/u1.jpeg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
<br>
<div id="m1">
<label class="w3-text-blue"><b>User Name</b></label><div id="inp">
  <input class="w3-input w3-animate-input" type="text" name="username" placeholder="xyz"  style="width:135px" required=""><br></div>
<label class="w3-text-blue"><b>Password</b></label><div id="inp">
  <input class="w3-input w3-animate-input" type="password" placeholder="*****" name="upass" style="width:135px" required=""><br></div>
  <button class="massive ui blue button" name="submit">Login</button>
<br><br>
<div>
<a href="forgotP.php"><i><h3 style="font-family: verdana; margin-left:180px; color:red;margin-left:-180px;">lost your password</h3></i></a>
<a href="signup.php"><i><h3 style="font-family: verdana; margin-left:180px;margin-top:-20px;"><u>Need an account ??</u></h3></i></a>
</div>
<br>
</div>
</div>
</form> 
</body>
<?php
}
else
{
  ?>
    <script type="text/javascript">
      window.location = "books_display.php";
    </script>

  <?php
}
?>
