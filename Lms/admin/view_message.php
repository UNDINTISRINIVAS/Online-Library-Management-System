<?php
	
	include "includes/dbh.inc.php";
	include 'header.php';
	$count = 0;
	$res = "select * from message where admin_name = '$_SESSION[librarian]'";
	$link = mysqli_query($conn,$res);
	$count = mysqli_num_rows($link);
	mysqli_query($conn,"update message set read_msg='yes' where admin_name='$_SESSION[librarian]'");
	$count = $count - 1;
?>

<html>
<head>
 <link href="css/semantic.min.css" rel="stylesheet">
   <link href="css/semantic.css" rel="stylesheet">
   <title>MESSAGES</title>
</head>
</html>

<body>
<script src="css/semantic.min.js"></script>
<div class="ui container">
<center><h1 class="ui green big header"><i>Messages</i></h1></center>
</div>
<?php
 $res = mysqli_query($conn,"select * from message where admin_name='$_SESSION[librarian]'");
 
    echo "<table class='ui celled padded table'>";
    echo "<tr>";
    echo "<thead>";   
    echo "<th>";echo "Student";echo "</th>";
    echo "<th>";echo "title";echo "</th>";
    echo "<th>";echo "Message";echo "</th>";
    /*echo "<th>";echo "Delete";echo "</th>";*/
    echo "</thead>";
    echo "</tr>";
     while($row = mysqli_fetch_array($res))
     {

     echo "<tbody>";
     echo "<tr>";
    echo "<td>";echo $row["stu_name"];echo "</td>";
    echo "<td>";echo$row["msg_title"];echo "</td>";
    echo "<td>";echo $row["msg"];echo "</td>";
   /* echo "<td>";?><a href="#"><button class="ui disabled red button">Delete</button></a><?echo"</td>";*/
    /*echo "<td>";?><a href="msgdelete.php?id= <?echo $row["id"]?>"><button class="ui red button">Delete</button></a><?echo"</td>";*/
    echo "</tr>";
    echo "</tbody>";
     }
     echo "</table>";
     echo"</div>";

?>

</body>
