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
   <form>
     <!-- <img src="images/1.jpg"> -->
     <h1 align="center">View Items</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Image</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
          <th scope="col">Stock</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
            $i = 1;
            $sql = "select * from items where category='Ayurvedic';";
            $res = mysqli_query($conn, $sql);
            $rescheck = mysqli_num_rows($res);
            if($rescheck > 0) {
              while ($row = mysqli_fetch_assoc($res)) {
                  echo '<tr>';
                    echo '<td>'.$row['name'].'</td>';
                    ?>
                   <td><img src="../images/ayurveda/<?php echo $row['img']; ?>" width="100px" alt="image"></td>
                    <?php
                    echo '<td>'.$row['category'].'</td>';
                    echo '<td>'.$row['price'].'</td>';
                    echo '<td>'.$row['description'].'</td>';
                    echo '<td>'.$row['stock'].'</td>';
                    ?>

                    <td>
                      <a href="crud.php?edit=<?php echo $row['id']; ?>" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="php/crud.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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

   </form>
   </div>
    <?php include_once 'includes/footer.php'; ?>
 <script src="includes/jquery31.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         $("#add").removeClass("active");
        $("#cat").addClass("active");
      });
    </script>
  </body>
</html>





















