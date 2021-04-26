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

   <!-- <div class="alert alert-success alert-dismissible" role="alert">
      Your items have been booked successfully!!
    </div> -->
   <div class="container">
   <form action="php/book.php" method="POST">
     <!-- <img src="images/1.jpg"> -->
     <div class="form-inline">
       <h1 align="center">View Bookings</h1> 

       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <a href="viewcart.php" class="btn btn-primary" style="float: right;">Get Back</a> <br>
     </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Item</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
            $user = $_SESSION['username'];
            $i = 1;
            $sql = "select * from booking where username='$user' and date=curdate();";
            $res = mysqli_query($conn, $sql);
            $rescheck = mysqli_num_rows($res);
            if($rescheck > 0) {
              while ($row = mysqli_fetch_assoc($res)) {
                  echo '<tr>';
                    echo '<td>'.$row['item'].'</td>';
                    echo '<td>'.$row['price'].'</td>';
                    echo '<td>'.$row['quantity'].'</td>';
                    echo '<td>'.$row['total'].'</td>';
                    echo '</tr>';
                  $i=$i+1;
              }
            }
            ?>
      </tbody>
    </table>
    <?php
            $sqlone = "select sum(total) from booking where username='$user' and date=curdate();";
            $resone = mysqli_query($conn, $sqlone);
            $rescheckone = mysqli_num_rows($resone);
            if($rescheckone > 0) {
              while ($rowone = mysqli_fetch_assoc($resone)) {
              ?>
              <div class="alert alert-dark lead" role="alert">
                <b>Final Total: <?php echo $rowone['sum(total)']; ?></b>
              </div>
              <p class="lead"></p>
              <?php
                    
              }
            }
           ?>
        <!-- <button class="btn btn-success"><a href="bedroom.php" style="color: white;">Add More</a></button> -->
        <!-- <div class="alert alert-danger alert-dismissible" role="alert">
          Bookings are visible only for 24 hours!!
        </div>
     -->
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



