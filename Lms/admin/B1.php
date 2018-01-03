<?php
  
  include "header.php";
  include "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Issue</title>
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/semantic.css">
	<link rel="stylesheet" type="text/css" href="css/dropdown.min.css">
</head>
<style type="text/css">
  #div1{
    margin-left: 40%;
    margin-top: -30px;
  }

  #div2{
    margin-left: 40%;
    margin-top: -30px;
  }
  body{
    background-color:light grey;
  }
</style>
<body>
<script src="js/semantic.min.js"></script>
<script src="js/semantic.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/dropdown.js"></script>
<center><h1 style="font-family: verdana;color: grey;"><i>Issue books to Students</h1></i></center>
<div class="ui form" id="div1">
  <form method="POST" class="ui form" style="margin-left: 30px;margin-top: 5%;">
  <select name="username" style="width: 200px;">
    <option value="1" selected="">Select Student</option>
    <?php
      $res = "select Username from student";
      $val=mysqli_query($conn,$res);
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
</div>
  <?php
    if(isset($_POST["submit"]))
    {
        
      if($_POST["username"] == 1)
      {
        ?>
          <script type="text/javascript">
            alert("Please choose the option");
            window.location = "B1.php";
          </script>
        <?
      }
      else
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
        <center><h2 style="margin-left: 40px;color:grey;"><i>Student details </i></h2></center>
        <form class="ui form" method="POST" style="margin-left: 40%;">
        <input type="text" name="id1" value="<?php echo $id;?>" placeholder="id" disabled style="width:440px;height: 40px;margin-right:50%;"><br>

        <input type="text" name="fullname2" placeholder="fullname" value="<?php echo($fullname) ?>" style="width:440px;height: 40px;"><br>

        <input type="text" name="uname" placeholder="uname" value="<?php echo($username1) ?>" style="width:440px;height: 40px;"><br>

       <!--  <input type="text" name="username2" value="<?php echo($username1) ?>" placeholder="username"  style="width:440px;height: 40px;"><br>
 -->
        <input type="text" name="email2" value="<?php echo($email) ?>" placeholder="email"  style="width:440px;height: 40px;"><br>

        <input type="text" name="gender1" value="Gender: <?php echo($gender) ?>" placeholder="email" disabled style="width:440px;height: 40px;"><br>

        <input type="text" name="status1" placeholder="status1" value="Status : <?php echo($status1) ?>" disabled style="width:440px;height: 40px;"><br>
        <label><h4>Select book</h4></label>
        <select name="bookname" style="width: 440px;">
          <option selected required>Select book</option>
          <?php
            $res = "select bname from books";
            $val = mysqli_query($conn,$res);
            while($row1 = mysqli_fetch_array($val))
            {
              echo "<option style = 'margin-right: 145px;'>";
              echo $row1["bname"];
              echo "</option>";
            }
          ?>
        </select>

        <input type="text" name="issuedate" placeholder="isue date (dd-mm-yr)" value="<?php echo date("d-M-Y") ?>" style="width:440px;height: 40px;"><br>
        <button class="ui huge button" name="submit2" style="margin-top: 5px;">Submit</button>
      </form>
    </div>
      
      <?
    }
  }
  ?>
    <?
      if(isset($_POST["submit2"]))
        {
          $sql = "select * from books where bname = '$_POST[bookname]'";
          $val = mysqli_query($conn,$sql);
          while($row2 = mysqli_fetch_array($val))
          {
            $count = $row2["bavailable"];
            $bauthor = $row2["bauthor"];
            $bisbn = $row2["bisbn"];
          }

          if($count == 0){
            ?>
              <script type="text/javascript">
                alert("no available books");
                window.location = "bookissue1.php";
              </script>
            <?
          }
          else
          {
          $sql2 = "insert into bookissue values('','$_POST[fullname2]','$_POST[email2]','$_POST[bookname]','$bisbn','$bauthor','$_POST[issuedate]','$_POST[returndate]','$_POST[uname]')";
            mysqli_query($conn,$sql2);
            $sql3 = "update books set bavailable = bavailable-1 where bname = '$_POST[bookname]'";
            mysqli_query($conn,$sql3);
          ?>
          <script type="text/javascript">
            alert("book successfully issued");
            window.location = "bookissue1.php"
          </script>
          <?
        }
      }
    ?>    
</body>
</html>