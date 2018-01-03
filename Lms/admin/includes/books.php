  <?php
  	session_start();
  ?>
  <?php
	if(isset($_POST["submit1"]))
	{
		include_once 'dbh.inc.php';
		$sql = "insert into books values('','$_POST[bname]','$_POST[bisbn]','$_POST[bauthor]','$_POST[bpublisher]','$_POST[bpurchase]','$_POST[bquantity]','$_POST[bavlquantity]','$_POST[price]','$_SESSION[librarian]')";
      mysqli_query($conn,$sql);
    ?>
      <script type="text/javascript">
        alert("books inserted");
        window.location = "../addbooks.php";
      </script>
    <?
	}
	else
	{
		header("Location: ../addbooks.php?book=empty");
		exit();
	}
?>