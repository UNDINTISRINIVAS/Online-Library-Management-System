<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
</head>
<body>
	<center>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

	<div class="ui container">
<form class="ui form" method="POST" id="form1" style="background-color:dark grey;">
	<h3 style="color: grey;">Enter your details</h3>
<input typ="text" name="uname" placeholder="USERNAME" style="width:450px;height:55px;" required><br><br>
<input typ="text" name="uemail" placeholder="EMAIL" style="width:450px;height:55px;" required><br><br>
<button class="ui big blue button" name="submit">Submit..</button>
</form>
<?php
	if(isset($_POST["submit"]))
	{
		$uname = $_POST["uname"];
		$mail = $_POST["uemail"];
		include "includes/dbh.inc.php";

		$sql = "select `UserName`,`Email` from student WHERE `UserName`='$uname' and `Email`='$mail' and `status`='yes'";
		$num = mysqli_query($conn,$sql);
		$re = mysqli_num_rows($num);
		if($re > 0)
		{
			?>
				<script type="text/javascript">
				document.getElementById("form1").className += "ui loading form";
				</script>
				<h1 style="color:grey;font-family:verdana;font-size:20px;">Enter your New password</h1>
				<form method="POST" class="ui form" action="PP.php">
					<input typ="text" name="u1" value="<?php echo $uname; ?>"  style="width:450px;height:55px;" readonly><br>
					<input typ="text" name="u2" value="<?php echo $mail; ?>"  style="width:450px;height:55px;" readonly><br>
					<input type="password" name="upass" placeholder="Enter your password" style="width:450px;height:55px;" required><br>
					<input type="password" name="upass1" placeholder="ReEnter your password" style="width:450px;height:55px;" required><br>
					<br>
					<button class="ui big green button" name="submit1">Submit</button>

				</form>
			<?

		}
		else{
			?>
				<script type="text/javascript">
				alert("no details found");
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
</div>
</center>
</body>
</html>