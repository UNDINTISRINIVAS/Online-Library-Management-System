 <?php
session_start();
  include "includes/dbh.inc.php";
  error_reporting(0);
  if(!$_SESSION["librarian"])
  {
    ?>
    <script type="text/javascript">
      window.location = "login.php";
    </script>
    <?
  }
  $count = 0;
  $res = "select * from message where admin_name = '$_SESSION[librarian]'";
  $link = mysqli_query($conn,$res);
  $count = mysqli_num_rows($link);
?>

<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/semantic.css"> -->
</head>
<style type="text/css">
#menu1 a{
  font-size: 12px;
  font-family: verdana;
  font-style: italic;
}
</style>
<body style="background-image: url(images/books.jpg); background-size: cover;">
<div class="ui secondary pointing menu" id="menu1" style="margin-top: 7px;">
  <a class="item" id="id1" onclick="func1()" href="index.php">
    Home
  </a>
  <a class="item" id="id2" onclick="func2()" href="books_display.php">
    books
  </a>
  <a class="item" id="id3" onclick="func3()" href="displaystudents.php">
    Student's details
  </a>
  <a class="item" id="id3" onclick="func4()" href="BBookissue1.php">
    Issue Books
  </a>
  <a class="item" id="id3" onclick="func5()" href="display_issued_books.php">
    Display Issued Books
  </a>
  <a class="item" id="id3" onclick="func6()" href="return_book.php">
    Return Book
  </a>
 <a class="item" id="id3" onclick="func7()" href="profile.php">
    Profile
  </a>
   <a class="item" id="id3" onclick="func8()" href="view_message.php">
    Messages
    <div class="floating small ui blue label"><?echo $count?></div>
  </a>
  
  <div class="right menu">
    <a class="item" id="id4" onclick="func4()" href="logout.php">
      logout
    </a>
  </div>
</div>
<script type="text/javascript">
function func1() {
  document.getElementById("id1").className = "active item";
  document.getElementById("id2").className = "item";
  document.getElementById("id3").className = "item";
  document.getElementById("id4").className = "item";
}
function func2() {
  document.getElementById("id2").className = "active item";
   document.getElementById("id1").className = "item";
  document.getElementById("id3").className = "item";
  document.getElementById("id4").className = "item"
}
function func3() {
  document.getElementById("id3").className = "active item";
   document.getElementById("id2").className = "item";
  document.getElementById("id1").className = "item";
  document.getElementById("id4").className = "item"
}
function func4() {
  document.getElementById("id4").className = "active item";
   document.getElementById("id2").className = "item";
  document.getElementById("id3").className = "item";
  document.getElementById("id1").className = "item"
}
    
</script>
</body>
</html>