<?php
  session_start();
  include_once '../includes/db.inc.php';
  $username = $_SESSION['username'];
  if (isset($_POST['book'])) {
    $sql = "insert into booking(username, item, price, quantity, total, date) select username, name, price, quantity, (price*quantity), date from cart where username='$username';";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
      header("Location: ../viewcart.php?result=fail");
    } else {
      $sqlone = "delete from cart where username='$username';";
      mysqli_query($conn, $sqlone);
      header("Location:../shopping.php?result=success");
    }
  } 