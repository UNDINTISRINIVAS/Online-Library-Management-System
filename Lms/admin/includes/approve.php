<?php
include "dbh.inc.php";
$id = $_GET["id"];
mysqli_query($conn,"UPDATE student set status='yes' where id=$id");
?>

<script type="text/javascript">
window.location="../displaystudents.php";
</script>