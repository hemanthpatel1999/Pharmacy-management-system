<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to right, purple, red); height: 70px;">
  <a class="navbar-brand m-0 m-lg-0" href="#"><img src="../images/logo1.png" width="280px" style="margin-top: -20px; margin-left: -70px; margin-right: -50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active" id="add">
        <a class="nav-link" href="index.php">Shop Items <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="cat" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="allopathy.php">Allopathy</a>
          <a class="dropdown-item" href="ayurvedic.php">Ayurvedic</a>
          <a class="dropdown-item" href="homeopathy.php">Homeopathy</a>
          <a class="dropdown-item" href="dailycare.php">Daily Care</a>
          <a class="dropdown-item" href="babycare.php">Baby Care</a>
        </div>
      </li>
      <li class="nav-item" id="edit">
        <a class="nav-link" href="editprofile.php">Edit Profile</a>
      </li>
      <li class="nav-item" id="request">
        <a class="nav-link" href="request.php">Request Item</a>
      </li>
    </ul>
  </div>
      <form class="form-inline my-2 my-lg-0">
          <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['username']; ?>
          </button>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../login.php">Logout</a>
          </div>
        </li>
      </form>
</nav>