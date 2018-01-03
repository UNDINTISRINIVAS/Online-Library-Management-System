<?
session_start();
error_reporting(0);
?>
<?php
	if(!$_SESSION["librarian"])
	{
		?>	
			<script type="text/javascript">
				window.location = "login.php";
			</script>

		<?
	}
?>
<?
	include "header.php";
	include "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add books</title>
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/semantic.css">
</head>
<body style="background-image: url(images/books.jpg);background-size: cover;height: 90%;">
  <!-- add books 1-->
  <div style="margin-left: 30%;margin-top: 1%; border: 1px solid black;width: 700px;height: 500px;">
  <a class="ui tag big label" style="margin-top: 10px;">Enter Books Details</a>
  <form method="post" autocomplete="off" action="includes/books.php" enctype="multipart/form-date">
  <div class="ui form" style="margin-top: 10px;">
  	<div class="inline field" style="margin-left: 10px;margin-top: 5px;">
    <input placeholder="Book Name" type="text" name="bname" style="width: 455px;line-height: 25px;" required="">
    <div class="ui left pointing blue basic label">
      Enter book Name
    </div>
    <br>

    <div class="inline field">
    <input placeholder="Book Isbn" type="text" name="bisbn" style="width: 455px;line-height: 25px;" required="">
    <div class="ui left pointing blue basic label">
    Enter Isbn
    </div><br>
    <div class="inline field">
    <input placeholder="Book Author" type="text" name="bauthor" style="width: 455px;line-height: 25px;" required="">
    <div class="ui left pointing blue basic label">
    Enter Author
    </div><br>
    <div class="inline field">
    <input placeholder="Book Publisher" type="text" name="bpublisher" style="width: 455px;line-height: 25px;" required="">
    <div class="ui left pointing blue basic label">
      Enter Publisher
    </div><br>
    <div class="inline field">
    <input placeholder="Purchase date" type="text" name="bpurchase" style="width: 455px;line-height: 25px;" required="">
    <div class="ui left pointing blue basic label">
      Enter Purchase date
    </div><br>
    <div class="inline field">
    <input placeholder="Book Quantity" type="number" name="bquantity" style="width: 455px;line-height: 25px;" required="">
    <div class="ui left pointing blue basic label">
      Enter Book Quantity
    </div><br>

    <div class="inline field">
    <input placeholder="Available Quantity" type="number" name="bavlquantity" style="width: 455px;line-height: 25px;" required="">
    <div class="ui left pointing blue basic label">
      Enter Available Quantity
    </div><br>

    <div class="inline field">
    <input placeholder="Book Price" type="number" name="price" style="width: 455px;line-height: 25px;" required="">
    <div class="ui left pointing blue basic label">
      Enter Book price
    </div><br>

     </div>
    <button class="ui blue big button" name="submit1" id="button1" onclick="func();">Submit</button>
   </form>
  </div>
</div>
<script type="text/javascript">
	function func() {
		document.getElementById("button1").className= "ui primary loading big button";
	}
</script>
</body>
</html>
