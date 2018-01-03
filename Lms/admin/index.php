<?php
	session_start();
	error_reporting(0);
	include "header2.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		if(!isset($_SESSION["librarian"]))
		{
			?>
			<div class="heading">
				<br>
				<br>
				<br>
            <span class="title1">Online Library</span>
            <br>
            <br>
            <span class="title2">Get all cool content here</span>
            <a href="login.php"><button class="login">
               login
            </button></a>
	</div>

			<?
		}
		else{

	?>	
	<div class="heading">
		<br>
		<br>
		<br>
            <span class="title1">Online Library</span>
            <br>
            <br>
            <span class="title2">Get all cool content here</span>
           <a href="books_display.php"> <button class="login">
               View Books
            </button></a>
	</div>
	<?
}
	?>
</body>
</html>