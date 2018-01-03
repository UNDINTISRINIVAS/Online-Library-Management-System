<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<select name="gender">
		<option>HE HE</option>
		<option>Male</option>
		<option>Female</option>
	</select>
	<input type="submit" name="submit">
</form>
<?php
	if(isset($_POST["submit"]))
	{
			echo $_POST["gender"];
	}
?>
</body>
</html>