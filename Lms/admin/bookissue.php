<?php
  include "header.php";
  include "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Issue book</title>
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/semantic.css">
	<link rel="stylesheet" type="text/css" href="css/dropdown.min.css">
</head>
<body>
<script src="js/semantic.min.js"></script>
<script src="js/semantic.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/dropdown.js"></script>
  <form method="POST" class="ui form" style="margin-left: 30px;">
  <select name="username" class="ui select" style="width: 200px;">
    <?php
      $res = "select Username from student";
      $val=mysqli_query($conn,$res);
      echo "<option select='selected'>";
      echo " ";
      echo "</option>";
      while($row = mysqli_fetch_array($val))
      {       
        echo "<option>";
         echo $row["Username"];
        echo "</option>";
      }
    ?>
  </select>&nbsp;&nbsp;
  <button class="ui small primary button" name="submit" style="margin-top: -65px;margin-left: 200px;">submit</button>
  </form> 
  <?php
    if(isset($_POST["submit"]))
    {
      $res = mysqli_query($conn,"select * from student where UserName = '$_POST[username]'");
      while($row = mysqli_fetch_array($res))
      {
          $id = $row["id"];
          $fullname = $row["FullName"];
          $username1 = $row["UserName"];
          $email = $row["Email"];
          $gender = $row["Gender"];
          $status1 = $row["status"];
      }
      ?>
        <form class="ui form" method="post">
        <input type="text" name="id" value="id :<?php echo $id;?>" placeholder="id" disabled style="width:440px;height: 40px;"><br>

        <input type="text" name="fullname1" placeholder="fullname" value="FullName : <?php echo($fullname) ?>"disabled style="width:440px;height: 40px;"><br>

        <input type="text" name="username1" value="UserName : <?php echo($username1) ?>" placeholder="username" disabled style="width:440px;height: 40px;"><br>

        <input type="text" name="email1" value="Email: <?php echo($email) ?>" placeholder="email" disabled style="width:440px;height: 40px;"><br>

        <input type="text" name="gender" value="Gender: <?php echo($gender) ?>" placeholder="email" disabled style="width:440px;height: 40px;"><br>

        <input type="text" name="status1" placeholder="status1" value="<?php echo($status1) ?>" disabled style="width:440px;height: 40px;"><br>

        <select name="bookname">
          <?php
            $res = "select bname from books";
            $val = mysqli_query($conn,$res);
            while($row1 = mysqli_fetch_array($val))
            {
              echo "<option>";
              echo $row1["bname"];
              echo "</option>";
            }
          ?>
        </select>
        <button class="ui button" name="submit2">Submit</button>
        </form>
        <?
          if(isset($_POST["submit2"]))
          {
            echo $_POST["bookname"];
          }

        ?>      
      <?
    }
  ?>
</body>
</html>