<?php
include "dbh.inc.php";
$id = $_GET["id"];
mysqli_query($conn,"DELETE from student where id=$id");
?>

<script type="text/javascript">
window.location="../display_students.php";
</script>