<?php

include "dbh.inc.php";
$id = $_GET["id"];
mysqli_query($conn,"UPDATE student SET status = 'no' WHERE id=$id");

?>

<script>
window.location="../displaystudents.php";
</script>