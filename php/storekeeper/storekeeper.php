<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>StoreKeeper Home Page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
  	<script src="../../assets/js/jquery.min.js"></script>
  	<script src="../../assets/js/popper.min.js"></script>
  	<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="../../css/keeper.css">
</head>
<body>
<?php  
include '../config/keeper_config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>StoreKeeper Login</title>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
  	<script src="../../assets/js/jquery.min.js"></script>
  	<script src="../../assets/js/popper.min.js"></script>
  	<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="../../css/keeper.css">
</head>
<body>
	<div class="contner">
<nav class="navbar navbar-expand-sm bg-lit navbar-light">
  <!-- Brand/logo -->
  <a class="navbar-brand active" href="../index.php" data-toggle="tooltip" title="Company Logo">Home</a>
  
  <!-- Links -->
  <ul class="navbar-nav" style="color:white;">
    <li class="nav-item">
      <a class="nav-link" href="add_staff.php" data-toggle="tooltip" title="StoreKeeper Login!">Add Staff</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_item.php" data-toggle="tooltip" title="Staff Login!">Add Item</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="manage_item.php" data-toggle="tooltip" title="About Us!">Manage Items</a>
    </li>

  </ul>
  <div class="profile_info" style="">

            <div>
              <?php  if (isset($_SESSION['user'])) : ?>
                <strong><!--<?php echo $_SESSION['user']['name']; ?>--> User One</strong><br>
                <strong><!--<?php echo $_SESSION['user']['email']; ?>-->StoreKeeper</strong><br>
                <small>
                  <i  style="color: white;">(Industry-Based Supervisor)</i> 
                  <br>
                  <a class="btn btn-light action-button" role="button" href="index.php?logout='1'">Sign Out</a>
                </small>
              <?php endif ?>
            </div>
          </div>
</nav>
<section><h3>Images of Available Items</h3></section>
<img src="../../images/la.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/chicago.jpg" width="40%" height="300" class="rounded-circle img-fluid">
<img src="../../images/ny.jpg" width="40%" height="300" class="rounded-circle img-fluid">
<img src="../../images/chicago1.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/la1.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/ny1.jpg" width="40%" height="300" class="rounded-circle img-fluid">

</div>
</body>
</html>
</body>
</html>