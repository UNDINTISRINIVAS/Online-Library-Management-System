<?php
	include "header.php";
	include "includes/dbh.inc.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Return books</title>
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/semantic.css">
	<link rel="stylesheet" type="text/css" href="css/dropdown.min.css">
</head>
<body>
	<center><h4 style="font-family: verdana;color: grey;">Return Book </h4></center>
<form class="ui form" style="margin-left: 35%;" method="post">
	<select name="username" style="width: 440px;height: 60px;">
		<?php
			$sql = "select DISTINCT `stu_username` from bookissue";
			$val = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($val))
			{
				echo "<option>";
				echo $row["stu_username"];
				echo "</option>";
			}
		?>
	</select>
	<button class="ui big primary blue button" name="submit" style="margin-left: 50%;margin-top: -9%;height: 57px;">Search</button>
</form>
	<?php
		if(isset($_POST["submit"]))
		{
			$sql = "select DISTINCT `id`,`stu_fullname`,`stu_username`,`stu_email`,`BookName`,`BookIsbn`,`BookAuthor`,`Bpurdate` from bookissue where stu_username = '$_POST[username]' and Breturndate='' ";
			$val1 = mysqli_query($conn,$sql);
			echo "<table class='ui celled padded table'>";
		    echo "<tr>";
		    echo "<thead>";
		    echo "<th>";echo "student FullName";echo "</th>";
		    echo "<th>";echo "student UserName";echo "</th>";
		    echo "<th>";echo "Student Email";echo "</th>";
		    echo "<th>";echo "Book Name";echo "</th>";
		    echo "<th>";echo "Book Isbn";echo "</th>";
		    echo "<th>";echo "Book Author";echo "</th>";
		    echo "<th>";echo "Purchased date";echo "</th>";
		    echo "<th>";echo "Return";echo"</th>";
		    echo "</thead>";
		    echo "</tr>";

		    while($row1 = mysqli_fetch_array($val1)){
		    	 echo "<tbody>";
			     echo "<tr>";
			    echo "<td>";echo $row1["stu_fullname"];echo "</td>";
			    echo "<td>";echo$row1["stu_username"];echo "</td>";
			    echo "<td>";echo $row1["stu_email"];echo "</td>";
			    echo "<td>";echo $row1["BookName"];echo "</td>";
			    echo "<td>";echo $row1["BookIsbn"];echo "</td>";
			    echo "<td>";echo $row1["BookAuthor"];echo "</td>";
			    echo "<td>";echo $row1["Bpurdate"];echo "</td>";
			    echo "<td>";?><a class="item" href="returnbook.php?id=<?echo $row1["id"]?>">Return</a><? echo "</td>";
			    echo "</tr>";
			    echo "</tbody>";
		    }
		}
	?>
</body>
</html>