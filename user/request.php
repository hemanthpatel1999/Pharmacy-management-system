<!doctype html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php';
       include_once 'includes/db.inc.php'; ?>
    <?php include_once 'includes/footer.php'; ?> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/loc.css">
    <title>Location</title>
  </head>
  <body>
    <?php include_once 'includes/nav.php'; ?>
    <h1 align="center">Request Item</h1> <br>
    <div class="row justify-content-center">
    <form action="includes/reqadd.php" method="POST">
    <div class="center">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="enter Name">
        </div>
      <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number">
        </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="enter email">
        </div>
      <div class="form-group">
        <label>message</label>
        <textarea type="text" class="form-control" id="message" name="message" placeholder="Description" style="width: 300px;"></textarea>
      </div>
      <button type="submit" class="btn btn-danger" name="submit">Request</button>
    </div>  
  </form>
</div>
  </body>
</html>