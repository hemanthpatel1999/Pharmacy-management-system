<!doctype html>
<html lang="en">
  <head>
   <?php 
   include_once 'includes/db.inc.php';
   include_once 'includes/head.php';
   ?>
    <title>MESSAGES FOR YOU</title>
  </head>
  <body>
   <?php include_once 'includes/nav.php'; ?>
   <div class="container">
   <form>
     <!-- <img src="images/1.jpg"> -->
     <h1 align="center">REQUESTS</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">NAME</th>
          <th scope="col">PHONE</th>
          <th scope="col">EMAIL</th>
          <th scope="col">MESSAGE</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
            $i = 1;
            $sql = "select * from contact ;";
            $res = mysqli_query($conn, $sql);
            $rescheck = mysqli_num_rows($res);
            if($rescheck > 0) {
              while ($row = mysqli_fetch_assoc($res)) {
                  echo '<tr>';
                
                    ?>
                    <?php
                    echo '<td>'.$row['username'].'</td>';
                    echo '<td>'.$row['phone'].'</td>';
                    echo '<td>'.$row['email'].'</td>';
                    echo '<td>'.$row['message'].'</td>';
                    ?>
                    <?php
                  echo '</tr>';
                  $i=$i+1;
              }
            }
           ?>
      </tbody>
    </table>
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