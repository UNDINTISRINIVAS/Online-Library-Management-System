<?php
error_reporting(0);
	$name = $_POST["u1"];
	$email = $_POST["u2"];
	$pass = $_POST["upass"];
	include "includes/dbh.inc.php";
	if($pass != $_POST["upass1"])
	{
		?>
			<script type="text/javascript">
			alert("password not matched");
			window.location = "forgotP.php";
			</script>
		<?
	}
	else
	{
		$sql = "UPDATE student set `Pass` = '$pass' WHERE `UserName` = '$name' and `Email`='$email'";
		mysqli_query($conn,$sql);
		?>
			<script type="text/javascript">
			alert("password Updated Successfully");
			window.location = "login.php";
			</script>

		<?
		
	}
?>