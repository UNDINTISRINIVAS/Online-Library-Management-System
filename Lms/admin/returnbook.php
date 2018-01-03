<?
include "includes/dbh.inc.php";
$id =$_GET["id"];
$a = date('d-M-Y');
$sql = "update bookissue set Breturndate='$a' where id=$id";
$link = mysqli_query($conn,$sql);

$bname;
$sql2 = "select * from bookissue where id = $id";
$val = mysqli_query($conn,$sql2);
while($row=mysqli_fetch_array($val))
{
	$bname = $row["BookName"];
}

$sql3 = "update books set bavailable = bavailable+1 where bname = '$bname'";
mysqli_query($conn,$sql3);
?>
<script type="text/javascript">
	alert("book returned successfully");
	window.location = "return_book.php";
</script>