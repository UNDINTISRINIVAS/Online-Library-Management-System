<?php
	include 'header.php';
	include 'includes/dbh.inc.php';
	error_reporting(0);
?>
<?php
	if(!isset($_SESSION["student"]))
	{
		?>
			<script type="text/javascript">
				window.location = "login.php";
			</script>
		<?php
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Books display</title>
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/semantic.css">
</head>
<body>
<center><h1 style="font-family: verdana;color: blue;font-size: 25px;"><i>All Books</i></h1></center>
<form method="POST" class="ui form">
	<input type="text" name="search" placeholder="enter book name" style="width: 270px;" required="enter value">
	<button class="ui green button" name="submit">search....</button>
</form>
<?php
	if(isset($_POST["submit"])){
	$res = mysqli_query($conn,"select * from books where bname like('%$_POST[search]%')");
	echo "<table class='ui selectable celled table'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>";  echo "id";echo"</th>";
	echo "<th>";  echo "Name";echo"</th>";
	echo "<th>";  echo "Isbn";echo"</th>";
	echo "<th>";  echo "Author";echo"</th>";
	echo "<th>";  echo "Publisher";echo"</th>";
	echo "<th>";  echo "Purchase date";echo"</th>";
	echo "<th>";  echo "Books Quantity";echo"</th>";
	echo "<th>";  echo "Available Quantity";echo"</th>";
	echo "<th>";  echo "Price";echo"</tr>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";

	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["id"];echo"</td>";
		echo "<td>"; ?> <div class="ui small image"><img src="images/bookimage.jpeg" style="height: 70px;width: 70px;"></div><?php echo $row["bname"];echo"</td>";
		echo "<td>";  echo $row["bisbn"];echo"</td>";
		echo "<td>";  echo $row["bauthor"];echo"</td>";
		echo "<td>";  echo $row["bpublisher"];echo"</td>";
		echo "<td>";  echo $row["bpurdate"];echo"</td>";
		echo "<td>";  echo $row["bquantity"];echo"</td>";
		echo "<td>";  echo $row["bavailable"];echo"</td>";
		echo "<td>";  echo $row["bprice"];echo"</tr>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
	}
	else{
	$res = mysqli_query($conn,"select * from books");
	echo "<table class='ui selectable celled table'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>";  echo "id";echo"</th>";
	echo "<th>";  echo "Name";echo"</th>";
	echo "<th>";  echo "Isbn";echo"</th>";
	echo "<th>";  echo "Author";echo"</th>";
	echo "<th>";  echo "Publisher";echo"</th>";
	echo "<th>";  echo "Purchase date";echo"</th>";
	echo "<th>";  echo "Books Quantity";echo"</th>";
	echo "<th>";  echo "Available Quantity";echo"</th>";
	echo "<th>";  echo "Price";echo"</tr>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["id"];echo"</td>";
		echo "<td>"; ?> <div class="ui small image"><img src="images/bookimage.jpeg" style="height: 70px;width: 70px;"></div><?php echo $row["bname"];echo"</td>";
		echo "<td>";  echo $row["bisbn"];echo"</td>";
		echo "<td>";  echo $row["bauthor"];echo"</td>";
		echo "<td>";  echo $row["bpublisher"];echo"</td>";
		echo "<td>";  echo $row["bpurdate"];echo"</td>";
		echo "<td>";  echo $row["bquantity"];echo"</td>";
		echo "<td>";  echo $row["bavailable"];echo"</td>";
		echo "<td>";  echo $row["bprice"];echo"</tr>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
}
?>
</body>
</html>