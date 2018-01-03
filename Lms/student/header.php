<!DOCTYPE html>
<?php
	session_start();
	error_reporting(0);
?>
<html style="height: 100%">
<head>
	<title>Student Menu</title>
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
</head>
<body style="min-height: 100%;">
	<?php
	if(!isset($_SESSION["student"]))
	{
	echo '<div class="ui secondary pointing menu" style="height:55px;line-height:25px;">
			<a class="item" id="id1" onclick="fun1()" href="index.php">Home</a>
			<a class="item" id="id2" onclick="fun2()" href="books_display.php">Books</a>
			<div class="right menu">
			<a class="item" id="id5" onclick="fun5()" href="login.php">login</a>
			</div>
		</div>';
	}
	else
	{
		echo '<div class="ui secondary pointing menu" style="height:55px;line-height:25px;">
			<a class="item" id="id1" onclick="fun1()" href="index.php">Home</a>
			<a class="item" id="id2" onclick="fun2()" href="books_display.php">Books</a>
			<a class="item" id="id3" onclick="fun3()" href="sendmsg1.php">Send Message</a>
			<a class="item" id="id4" onclick="fun4()" href="myissuedbooks.php">My Books</a>
			<a class="item" id="id5" onclick="fun5()" href="myreturnedbooks.php">ReturnedBooks</a>
			<a class="item" id="id6" onclick="fun6()" href="profile.php">Profile</a>
			<div class="right menu">';
			?>
			<?php
			echo '<img src="images/stu.png" style="height:53px;margin-top:2px;margin-right:2px;"></img>
			</div>';
			?>
			&nbsp;
			<?php
				echo"<h4 style='color:grey;margin-top:15px;'>";echo "Welcome ".$_SESSION["student"];echo"</h4>";
			?>
			<a href="logout.php" style="margin-top: 15px;margin-left: 15px;font-family: verdana">logout</a>
		</div>
		<?php
	
	}
	?>
	<script type="text/javascript">
		function fun1()
		{
			document.getElementById("id1").className = "active item";
			document.getElementById("id2").className = "item";
			document.getElementById("id3").className = "item";
			document.getElementById("id4").className = "item";
		}
		function fun2()
		{
			document.getElementById("id1").className = "item";
			document.getElementById("id2").className = "active item";
			document.getElementById("id3").className = "item";
			document.getElementById("id4").className = "item";
		}
		function fun3()
		{
			document.getElementById("id1").className = "item";
			document.getElementById("id2").className = "item";
			document.getElementById("id3").className = "active item";
			document.getElementById("id4").className = "item";
		}
		function fun4()
		{
			document.getElementById("id1").className = "item";
			document.getElementById("id2").className = "item";
			document.getElementById("id3").className = "item";
			document.getElementById("id4").className = "active item";
		}
		function fun5()
		{
			document.getElementById("id1").className = "item";
			document.getElementById("id2").className = "item";
			document.getElementById("id5").className = "active item";
		}
	</script>
</body>
</html>