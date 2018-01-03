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
<body style="background-image: url(images/5.png);">
	<?php
	if(!isset($_SESSION["student"]))
	{
	echo '<div class="ui secondary pointing menu" style="height:55px;line-height:25px;">
			<a class="item" id="id1" onclick="fun1()" href="index.php" style="color:white;"><i>Home</i></a>
			<a class="item" id="id2" onclick="fun2()" href="books_display.php" style="color:white;">Books</a>
			<div class="right menu">
			<a class="item" id="id5" onclick="fun5()" href="login.php" style="color:white;">login</a>
			</div>
		</div>';
	}
	else
	{
		echo '<div class="ui secondary pointing menu" style="height:55px;line-height:25px;">
			<a class="item" id="id1" onclick="fun1()" href="index.php" style="color:white;">Home</a>
			<a class="item" id="id2" onclick="fun2()" href="books_display.php" style="color:white;">Books</a>
			<a class="item" id="id3" onclick="fun3()" href="send_message.php" style="color:white;">Send Message</a>
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
</body>
</html>