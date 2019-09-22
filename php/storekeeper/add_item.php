<?php  
include '../config/keeper_config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adding an Item</title>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
  	<script src="../../assets/js/jquery.min.js"></script>
  	<script src="../../assets/js/popper.min.js"></script>
  	<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="../../css/keeper.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-lit navbar-light">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="../index.php" data-toggle="tooltip" title="Company Logo">Logo</a>
  
  <!-- Links -->
  <ul class="navbar-nav" style="color:white;">
    <li class="nav-item">
      <a class="nav-link" href="add_staff.php" data-toggle="tooltip" title="StoreKeeper Login!">Add Staff</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="add_item.php" data-toggle="tooltip" title="Staff Login!">Add Item</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="manage_item.php" data-toggle="tooltip" title="About Us!">Manage Items</a>
    </li>

  </ul>
</nav>
<form action="#" method="post">
  <h3>Add An Accessory Into the System</h3>
  <div class="input-group">
    <label>Item Type</label>
    <input type="text" name="item_type" placeholder="e.g. Projector, Speaker" required="true">
  </div>
  <div class="input-group">
    <label>Serial Number</label>
    <input type="text" name="serial_number" placeholder="xxxxxx..." required="true">
  </div><div class="input-group">
    <label>Photo of the Item</label>
    <input type="file" name="photo" accept="image/*" required="true">
  </div>
    <div>
    <button class="btn btn-success" type="submit" name="add_btn">Add</button>
    <button class="btn btn-danger" type="submit" name="cancel_btn">Cancel</button>

  </div>
      <div>
  </div>
</form>

</body>
</html>