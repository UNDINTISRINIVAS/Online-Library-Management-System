<?php
    
    include "includes/dbh.inc.php";
    include "header.php";
?>
<html>
<head>
 <link href="css/semantic.min.css" rel="stylesheet">
   <link href="css/semantic.css" rel="stylesheet">
   <title>Display issued books</title>
</head>
</html>

<body>
<script src="css/semantic.min.js"></script>
<div class="ui container">
<center><h1 class="ui green big header"><i>Books Issued to Students</i></h1></center>
</div>
<?php
$count = 0;
 $res = mysqli_query($conn,"select * from bookissue");
 
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
    echo "<th>";echo "Return date";echo "</th>";
    echo "</thead>";
    echo "</tr>";
     while($row = mysqli_fetch_array($res))
     {
     echo "<tbody>";
     echo "<tr>";
    echo "<td>";echo $row["stu_fullname"];echo "</td>";
    echo "<td>";echo$row["stu_username"];echo "</td>";
    echo "<td>";echo $row["stu_email"];echo "</td>";
    echo "<td>";echo $row["BookName"];echo "</td>";
    echo "<td>";echo $row["BookIsbn"];echo "</td>";
    echo "<td>";echo $row["BookAuthor"];echo "</td>";
    echo "<td>";echo $row["Bpurdate"];echo "</td>";
    echo "<td>";echo $row["Breturndate"];echo "</td>";
    echo "</tr>";
    echo "</tbody>";
     }
     echo "</table>";
     echo"</div>";

?>

</body>
