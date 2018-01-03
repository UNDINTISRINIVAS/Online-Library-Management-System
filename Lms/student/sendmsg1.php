<?php
  session_start();
  error_reporting(0);
  if(!$_SESSION["student"])
  {
  	?>	
		<script type="text/javascript">
			window.location = "login.php";
			exit();
		</script>
  	<?php
  }
?>
<?php
error_reporting(0);
  include "header.php";
  include "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Issue book</title>
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
</head>
<body>
<script src="js/semantic.min.js"></script>
<script src="js/semantic.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/dropdown.js"></script>
	<center><h4 style="color: grey;font-family: verdana;">Send Message To Librarian</h4></center><br>
  <center>
  <form method="post" class="ui form" style="margin-left: 30px;">
  <select name="username" class="ui select" style="width: 200px;" required="">
    <?php
      $res = "select username from admin";
      $val=mysqli_query($conn,$res);
      echo "<option select='selected'>";
      echo " ";
      echo "</option>";
      while($row = mysqli_fetch_array($val))
      {       
        echo "<option>";
         echo $row["username"];
        echo "</option>";
      }
    ?>
  </select>&nbsp;&nbsp;  
  <br>
  <select name="title" style="width: 440px;">
    <?
      $sql = "select `bname` from books where `bavailable`>0";
      $num = mysqli_query($conn,$sql);
      while($row1= mysqli_fetch_array($num))
      {
        echo"<option>";echo $row1["bname"];echo"</option>";
      }
    ?>
  </select>
  <br>
  <textarea name="message" rows="5" cols="50%" placeholder="Enter Message" style="width: 450px;margin-top: -15px;" required="">
  </textarea><br><br>
  <button class="ui huge primary button" name="submit" id="btn" onclick="loa()">submit</button><br><br>
  </form> 
  <?php
  	if(isset($_POST["submit"]))
  	{
  		$sql = "insert into message values('','$_SESSION[student]','$_POST[username]','$_POST[title]','$_POST[message]','no')";
  		$link = mysqli_query($conn,$sql);
      ?>
      <script type="text/javascript">
        alert("message sent succesfully!!");
        window.location = "sendmsg1.php";
      </script>
      <?php
  	}
  ?>
</center>
<script type="text/javascript">
  function loa() {
    document.getElementById("btn").className += "ui huge primary loading button";  
  }
  
</script>
</body>
</html>