<?php
	session_start();
	session_destroy();
	unset($_SESSION["student"]);
?>
<script type="text/javascript">
	window.location = "../index.php";
</script>