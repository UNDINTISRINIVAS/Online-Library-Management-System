<html>

<head>
<link rel="stylesheet" href="css/w3.css"></head>
<body>
<?php
	if(isset($_POST['submit']))
	{
		include_once 'dbh.inc.php';
		$fullname = mysqli_real_escape_string($conn,$_POST['ufullname']);
		$username = mysqli_real_escape_string($conn,$_POST['uuname']);
		$uemail = mysqli_real_escape_string($conn,$_POST['umail']);
		$upass = mysqli_real_escape_string($conn,$_POST['upass']);
		$gender = mysqli_real_escape_string($conn,$_POST['gender']);

		/*if(empty($fullname) || empty($username) || $empty($uemail) || empty($upass) || empty($gender))
		{
			header("Location: ../signup.php?signup=empty");
			exit();
		}*/
			// checking for inputs are valid
			if(!preg_match("/^[a-zA-Z]*$/", $fullname) || !preg_match("/^[a-zA-Z1-9]*$/", $username))
			{
				?>
				<script type="text/javascript">
					alert("Enter names only");
					window.location = "../signup.php?fullnameerror";
				</script>

				<?
			}
			else{
			if($upass != $_POST['upass1'])
			{

			?>	
				<script type="text/javascript">
					alert("password not matched");
					window.location = "../signup.php?password=notmatched";
				</script>
			<?
			/*	header("Location: ../signup.php?signup=passwordnotmatch");
				exit();*/
			}
			else{
				// checking for email is valid
				if(!filter_var($uemail,FILTER_VALIDATE_EMAIL))
				{
					?>
						<script type="text/javascript">
							alert("pls enter a valid email");
							window.location = "../signup.php?email=notvalid";
						</script>

					<?
					/*header("Location: ../signup.php?signup=invalidemail");
					exit();*/
				}
				else{
					$sql = "select * from student where UserName = '$username'";
					$result = mysqli_query($conn,$sql);
					$resultcheck = mysqli_num_rows($result);

					// checking if already username is taken or not
					if($resultcheck > 0)
					{
						?>
							<script type="text/javascript">
							alert("Username already takesn");
							window.location = "../signup.php?usernanmealreadytaken";
							</script>

						<?
						/*header("Location: ../signup.php?signup=usernametaken");
						exit();*/
					}
					else{
							$sql = " insert into student values('','$fullname','$username','$uemail','$upass','$gender','no');";
							mysqli_query($conn,$sql);
							?>
								<script type="text/javascript">
									alert("your account have been successfully registered once it was confirmed by admin you will get your login credential thank you!!!");
									window.location = "../login.php";
								</script>
							<?php
							//header("Location: ../signup.php?signup=success");
							//exit();
						}
					}
				}
		}
	}
	else
	{
		header("Location: ../signup.php");
		exit();
	}
?>

</html>
