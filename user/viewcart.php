<!doctype html>
<html lang="en">
  <head>
   <?php 
   include_once 'includes/db.inc.php';
   include_once 'includes/head.php';
   ?>
    <title>Our Members</title>
  </head>
  <body>
   <?php include_once 'includes/nav.php'; ?>
   <div class="container">
   <form action="php/book.php" method="POST">
     <!-- <img src="images/1.jpg"> -->
     <div class="form-inline">
       <h1 align="center">View Cart</h1> 

       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <a href="babycare.php" class="btn btn-primary" style="float: right;">Get Back</a> &nbsp;
     <a href="viewbookings.php" class="btn btn-outline-primary">View Orders</a> <br>
     </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Item</th>
          <th scope="col">name</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          
            $user = $_SESSION['username'];
            $i = 1;
            $sql = "select * from cart where username='$user';";
            $res = mysqli_query($conn, $sql);
            $rescheck = mysqli_num_rows($res);
            if($rescheck > 0) {
              while ($row = mysqli_fetch_assoc($res)) {
                  echo '<tr>';
                  echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['username'].'</td>';
                    echo '<td>'.$row['price'].'</td>';
                    echo '<td>'.$row['quantity'].'</td>';
                    ?>
                    <td>
                      <a href="php/incr.php?incr=<?php echo $row['iid']; ?>" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></a>
                      <a href="php/incr.php?dcr=<?php echo $row['iid']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-minus"></i></a>
                      <a href="php/crud.php?delete=<?php echo $row['iid']; ?>" class="btn btn-danger btn-sm" name="deleteloc"><i class="fas fa-trash"></i></a>
                    </td>
                    <?php
                  echo '</tr>';
                  $i=$i+1;
              }
            }
           ?>
      </tbody>
    </table>
        <!-- <button class="btn btn-success"><a href="bedroom.php" style="color: white;">Add More</a></button> -->

        <div class="form-group">
      
     <button type="submit" class="btn btn-success" name="book"><i class="fas fa-shopping-bag"></i> Buy Now</button>
   </div>
   <div class="alert alert-danger" role="alert">
      Your cart will be cleared as soon as you buy items!!
    </div>
   </div>
   </form>
   

    <?php include_once 'includes/footer.php'; ?>
 <script src="includes/jquery31.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         $("#living").removeClass("active");
        $("#bath").addClass("active");
        $("#btn1").click(function() {
          $(".one").fadeOut(300).delay(500);
           $(".two").fadeIn(300);
        });
      });
    </script>
  </body>
</html>



