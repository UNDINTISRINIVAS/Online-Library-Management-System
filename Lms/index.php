// developed by srinivas 
// using semantic ui and javascript and php
<?php
	session_start();
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
</head>
<body style="background-image:url(images/books.jpg);background-size:cover;">
			<div class="heading">				
            <span class="title1">Online Library</span>
            <span class="title2">Get all cool content here</span>
            <button class="login" onclick="document.getElementById('id01').style.display='block'">
               login
            </button>
	</div>
	 <div class="w3-container">

<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-blue"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
   <h2>Choose Your Option</h2>
  </header>
  <div class="w3-container w3-light-grey w3-padding">
  	
  	<a href="admin/login.php"><img src="images/aa.jpg" style="width:340px;margin-top:60px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <a href="student/login.php"><img src="images/s1.jpg" style="margin-top:30px;"></a><hr>
    <button class="ui big red button" 
   onclick="document.getElementById('id01').style.display='none'" style="float:right;">Close</button>
  </form>
  </div>
 </div>
</div>

</div>
</body>
</html>
