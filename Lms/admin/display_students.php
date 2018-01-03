<?php
    include "includes/dbh.inc.php";
    include "header.php";
?>
<html>
<head>
 <link href="css/semantic.min.css" rel="stylesheet">
   <link href="css/semantic.css" rel="stylesheet">
   <title>Display Students</title>
</head>
</html>

<body>
<script src="css/semantic.min.js"></script>
<div class="ui container">
<center><h1 class="ui green big header"><i>Student details</i></h1></center>
</div>
<?php
$count = 0;
 $res = mysqli_query($conn,"select * from student");
 
    echo "<table class='ui celled padded table'>";
    echo "<tr>";
    echo "<thead>";
    echo "<th>";echo "FullName";echo "</th>";
    echo "<th>";echo "UserName";echo "</th>";
    echo "<th>";echo "Email";echo "</th>";
    echo "<th>";echo "status";echo "</th>";
    echo "<th>";echo "Approve";echo "</th>";
    echo "<th>";echo "Not Approve";echo "</th>";
    echo "<th>";echo "Delete";echo "</th>";
    echo "</thead>";
    echo "</tr>";
     while($row = mysqli_fetch_array($res))
     {
     echo "<tbody>";
     echo "<tr>";
    echo "<td>";echo $row["FullName"];echo "</td>";
    echo "<td>";echo$row["UserName"];echo "</td>";
    echo "<td>";echo $row["Email"];echo "</td>";
    echo "<td>";echo $row["status"];echo "</td>";
    echo "<td>";?> <a href="includes/approve.php?id=<?php echo $row["id"];?>"><button class="ui tiny green button">Approve</button></a><?php echo"</td>";
    echo "<td>";?> <a href="includes/notapprove.php?id=<?php echo $row["id"];?>"><button class="ui tiny grey button">Not Approve</button></a><?php echo"</td>";
    echo "<td>";?> <a href="includes/delete.php?id=<?php echo $row["id"];?>"><button class="ui tiny red button">Delete</button></a><?php echo"</td>";
    
    echo "</tr>";
    echo "</tbody>";
     }
     echo "</table>";
     echo"</div>";

?>

</body>
