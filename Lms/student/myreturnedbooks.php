<?php
	include "includes/dbh.inc.php";
	include "header.php";
	error_reporting(0);
?>
<html>
<head>
 <link href="css/semantic.min.css" rel="stylesheet">
   <link href="css/semantic.css" rel="stylesheet">
   <title>View Book</title>
</head>
</html>

<body>
<script src="css/semantic.min.js"></script>
<div class="ui container">
<center><h1 class="ui green big header"><i>ISSUED BOOKS</i></h1></center>
</div>
<?php
 $res = mysqli_query($conn,"select DISTINCT  `stu_fullname`,`stu_email`,`BookName`,`BookIsbn`,`BookAuthor`,`Bpurdate`,`Breturndate`,`stu_username` from bookissue where `stu_username`='$_SESSION[student]' and `Breturndate`!='';");
 
    echo "<table class='ui blue table'>";
    echo "<tr>";
    echo "<thead>";   
    echo "<th>";echo "FULLNAME";echo "</th>";
    echo "<th>";echo "Email";echo "</th>";
    echo "<th>";echo "BOOKNAME";echo "</th>";
    echo "<th>";echo "BOOKISBN";echo "</th>";
    echo "<th>";echo "BOOKAUTHOR";echo "</th>";
    echo "<th>";echo "PURCHASE DATE";echo "</th>";
    echo "<th>";echo "RETURN DATE";echo "</th>";
    /*echo "<th>";echo "USERNAME";echo "</th>";*/
    /*echo "<th>";echo "Delete";echo "</th>";*/
    echo "</thead>";
    echo "</tr>";
     while($row = mysqli_fetch_array($res))
     {

     echo "<tbody'>";
     echo "<tr style='background-color:light grey;'>";
    echo "<td>";echo $row["stu_fullname"];echo "</td>";
    echo "<td>";echo$row["stu_email"];echo "</td>";
    echo "<td>";echo$row["BookName"];echo "</td>";
    echo "<td>";echo$row["BookIsbn"];echo "</td>";
    echo "<td>";echo$row["BookAuthor"];echo "</td>";
    echo "<td>";echo $row["Bpurdate"];echo "</td>";
    echo "<td>";echo $row["Breturndate"];echo "</td>";
    /*echo "<td>";echo$row["stu_username"];echo "</td>";*/
   /* echo "<td>";?><a href="#"><button class="ui disabled red button">Delete</button></a><?echo"</td>";*/
    /*echo "<td>";?><a href="msgdelete.php?id= <?echo $row["id"]?>"><button class="ui red button">Delete</button></a><?echo"</td>";*/
    echo "</tr>";
    echo "</tbody>";
     }
     echo "</table>";
     echo"</div>";

?>

</body>
