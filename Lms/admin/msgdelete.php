<?
	include "includes/dbh.inc.php";
	$id = $_GET["id"];
	$link = mysqli_query($conn,"delete from message where id = $id");
?>
<script type="text/javascript">
	window.location = "view_message.php";
</script>