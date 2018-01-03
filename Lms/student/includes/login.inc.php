<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if(isset($_POST["submit"]))
	{
		include_once('dbh.inc.php');
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$pwd = mysqli_real_escape_string($conn,$_POST['upass']);
		$sql = "select * from student where UserName = '$username' and Pass='$pwd' and status='yes'";
		$result = mysqli_query($conn,$sql);
		$resultcheck = mysqli_num_rows($result);
		if($resultcheck < 1)
		{
			?>
				<script type="text/javascript">
					alert("your account is not confirmed or you entered wrong details");
					window.location = "../login.php";
				</script>
			<?
			
		}
		else{
			$_SESSION["student"] = $_POST["username"];
			?>

			<script type="text/javascript">
				window.location = "../books_display.php";
			</script>

			<?php
		}
	}
	else
	{
		header("Location: ../login.php");
		exit();

	}
?>
</body>
</html>