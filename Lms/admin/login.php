<?php
	session_start();
?>
  <?php
    if(isset($_SESSION["librarian"]))
    {
      ?>
      <script type="text/javascript">
        window.location = "index.php";
      </script>
      <?
    }
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Admin login</title>
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
    background-image: url(images/12.jpg);
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
    
  <form class="w3-container" method="POST">
  <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="images/12.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
<br>
<div id="m1">
<label class="w3-text-blue"><b>User Name</b></label><div id="inp">
  <input class="w3-input w3-animate-input" type="text" name="username" placeholder="xyz"  style="width:135px" required=""><br></div>
<label class="w3-text-blue"><b>Password</b></label><div id="inp">
  <input class="w3-input w3-animate-input" type="password" placeholder="*****" name="upass" style="width:135px" required=""><br></div>
  <button class="massive ui blue button" name="submit">Login</button>
<br><br>
<a href="signup.php"><i><h3 style="font-family: verdana;"><u>Need an account ??</u></h3></i></a>
<br>
</div>
</div>
</form>
<?php
	
	if(isset($_POST["submit"]))
	{
		include_once('includes/dbh.inc.php');
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$pwd = mysqli_real_escape_string($conn,$_POST['upass']);
		$sql = "select * from admin where username = '$username' and password='$pwd' and status='yes'";
		$result = mysqli_query($conn,$sql);
		$resultcheck = mysqli_num_rows($result);
    $location = "/LMS1/admin/login.php?login = error";
		if($resultcheck < 1)
		{
			header("Location:" . "http://" . $_SERVER['HTTP_HOST']. $location);
			exit();
		}
		else{

			$_SESSION["librarian"] = $_POST['username'];
			?>

			<script type="text/javascript">
				window.location = "addbooks.php";
			</script>

			<?
		}
	}
	else
	{
		header(0);
    exit();

	}
?>
</body>
