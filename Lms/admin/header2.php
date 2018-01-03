 <?php
session_start();
  include "includes/dbh.inc.php";
  error_reporting(0);  
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
<body style="background-image: url(images/books.jpg);">
  <?php 
    if(!isset($_SESSION["librarian"]))

    {
      ?>
<div class="ui secondary pointing menu" id="menu1" style="margin-top: 7px;">
  <a class="item" id="id1" onclick="func1()" href="index.php" style="color: white;"">
    Home
  </a>
  <a class="item" id="id2" onclick="func2()" href="books_display.php" style="color: white;">
    books
  </a>
  <a class="item" id="id3" onclick="func3()" href="displaystudents.php" style="color: white;">
    Student's details
  </a>
  <a class="item" id="id3" onclick="func3()" href="bookissue1.php" style="color: white;">
    Issue Books
  </a>
  <a class="item" id="id3" onclick="func3()" href="display_issued_books.php" style="color: white;">
    Display Issued Books
  </a>
  <a class="item" id="id3" onclick="func3()" href="return_book.php" style="color: white;">
    Return Book
  </a>

   <a class="item" id="id3" onclick="func3()" href="view_message.php" style="color: white;">
    Messages
    <div class="floating small ui blue label"><?echo $count?></div>
  </a>
  
  <div class="right menu">
    <a class="item" id="id4" onclick="func4()" href="login.php" style="color: white;">
      login
    </a>
  </div>
</div>    
    <?
    }
    else
    {
  ?>
<div class="ui secondary pointing menu" id="menu1" style="margin-top: 7px;">
  <a class="item" id="id1" onclick="func1()" href="index.php" style="color: white;"">
    Home
  </a>
  <a class="item" id="id2" onclick="func2()" href="books_display.php" style="color: white;">
    books
  </a>
  <a class="item" id="id3" onclick="func3()" href="displaystudents.php" style="color: white;">
    Student's details
  </a>
  <a class="item" id="id3" onclick="func3()" href="bookissue1.php" style="color: white;">
    Issue Books
  </a>
  <a class="item" id="id3" onclick="func3()" href="display_issued_books.php" style="color: white;">
    Display Issued Books
  </a>
  <a class="item" id="id3" onclick="func3()" href="return_book.php" style="color: white;">
    Return Book
  </a>

   <a class="item" id="id3" onclick="func3()" href="view_message.php" style="color: white;">
    Messages
    <div class="floating small ui blue label"><?echo $count?></div>
  </a>
  
  <div class="right menu">
    <a class="item" id="id4" onclick="func4()" href="logout.php" style="color: white;">
      logout
    </a>
  </div>
</div>  
<?
  }
?>  
</script>
</body>
</html>