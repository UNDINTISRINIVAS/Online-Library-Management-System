<?php
	include "header.php";
	include "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="semantic.min.css">
     <link rel="stylesheet" href="css/w3.css">
     <style type="text/css">
     #d{
        width: 730px;
     }
     </style>
  </head>
  <body style="background-color: grey;">
    <?php
        $sql = "select * from admin where `username`='$_SESSION[librarian]'";
        $n = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($n))
        {
            $id = $row["id"];
            $fullname = $row["fullname"];
            $username = $row["username"];
            $email = $row["email"];
        }
    ?>
  <br>
<div class="ui special cards" style="margin-left: 453px;height:45px;" id="d">
  <div class="card">
    	<div class="image">
    		<img src="images/u1.jpeg" style="height: 300px;">    		
    	</div>	
    		<div class="content">
    			<h5>Username : <?php echo $username;?></h5>
        </div>
        <div class="content">
          <h5>FullName :<?php echo $fullname;?></h5>
        </div>
          <div class="content">
          <h5>Email : <?php echo $email;?></h5>
        </div>
        <div class="content">
         <button class="ui big blue button" onclick="document.getElementById('id01').style.display='block'">Change password</button>
        </div>  
    		</div>
    </div>
    <div class="w3-container">

<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-blue"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright" style="height:48px;">&times;</span>
   <h2>Change your password</h2>
  </header>
  <div class="w3-container w3-light-grey w3-padding">
  <form class="ui form" action="changeP.php" method="POST">
    <div class="image">
        <img src="images/u1.jpeg" style="height: 200px;margin-left:263px;">       
      </div>&nbsp;
    <input type="password" name="upass" placeholder="Enter Password" required="" title="enter password">
    <input type="password" name="upass1" placeholder="Confirm Password" required="" title="reenter your password">
    <br>
    <br>
    <button class="ui big green button">Submit</button>
    <button class="ui big red button" 
   onclick="document.getElementById('id01').style.display='none'" style="float:right;">Close</button>
  </form>
  </div>
 </div>
</div>

</div>
 </body>
</html>
