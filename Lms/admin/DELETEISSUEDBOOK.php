<?php
	$conn = mysqli_connect("localhost","root","","lms");
	$name = $_GET["name"];
	$book = $_GET["book"];

	$sql = "delete from message where `stu_name`='$name' and `msg_title`='$book'";
	$c = mysqli_query($conn,$sql);
	$n = mysqli_num_rows($c);
	echo $n;
?>