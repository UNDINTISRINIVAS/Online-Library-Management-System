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
		$sql = "select * from admin where username = '$username' and password='$pwd' and status='yes'";
		$result = mysqli_query($conn,$sql);
		$resultcheck = mysqli_num_rows($result);
		if($resultcheck < 1)
		{
			header("Location: ../login.php?login=error");
			exit();
		}
		else{

			$_SESSION["librarian"] = $_POST["username"];
			$_SESSION["librarian_name"] = $_POST["username"];
			?>

			<script type="text/javascript">
				window.location = "../addbooks.php";
			</script>

			<?
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

