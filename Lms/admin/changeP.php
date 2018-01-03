<?php
	session_start();
	error_reporting(0);
	?>

	<?php
		$pass = $_POST["upass"];
		include "includes/dbh.inc.php";
	if($pass != $_POST["upass1"])
	{
		?>
			<script type="text/javascript">
			alert("password not matched");
			window.location = "profile.php";
			</script>
		<?
	}
	else
	{
		$sql = "UPDATE admin set `password` = '$pass' WHERE `UserName` = '$_SESSION[librarian]'";
		mysqli_query($conn,$sql);
		?>
			<script type="text/javascript">
			alert("password Updated Successfully");
			window.location = "profile.php";
			</script>

		<?
		
	}
?>