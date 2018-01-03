<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
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
</style>

</head>

<body style="height: 60%;">
  <label class="w3-text-pink"><i><center><h1 style="font-family: verdana; font-size: 40px;margin-top: 20px;" >Registration Form</h1></center></i></label>
  <form class="w3-container" method="POST"  action="includes/signup.inc.php">
<br>
<label class="w3-text-blue"><b>Full Name*</b></label>
<div id="inp">
  <input class="w3-input w3-animate-input" type="text" name="ufullname" placeholder="Enter exactly characters.." style="width:135px" required=""><br>
  </div>

<label class="w3-text-blue"><b>User Name*</b></label><div id="inp">
  <input class="w3-input w3-animate-input" type="text" name="uuname" placeholder="xyz" autocomplete="none" style="width:135px" required=""><br></div>
 
<label class="w3-text-blue"><b>Email*</b></label><div id="inp">
  <input class="w3-input w3-animate-input" type="text" name="umail" placeholder="some@123.com" style="width:135px"><br></div>

<label class="w3-text-blue"><b>Password*</b></label><div id="inp">
  <input class="w3-input w3-animate-input" type="password" placeholder="*****" name="upass" style="width:135px" required=""><br></div>

<label class="w3-text-blue"><b>Confirm Password</b></label><div id="inp">
  <input class="w3-input w3-animate-input" type="password" placeholder="****" name="upass1" style="width:135px" required=""><br></div>
<label class="w3-text-blue"><b>Gender*</b></label><div id="inp">
	<input class="w3-radio" type="radio" name="gender" value="male" required="">
  <label>Male</label><br>
<input class="w3-radio" type="radio" name="gender" value="female" required="">
<label>female</label><br><br>
<button class="w3-button  w3-blue  w3-xxlarge" name="submit">Register</button>&nbsp;&nbsp;
<!-- <a href="login.php"><button class="w3-button w3-ripple w3-green w3-xxlarge">Login</button></a> -->
<br><br>
</div>
</form> 
    </body>
