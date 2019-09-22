<?php  
include '../config/keeper_config.php';
include '../config/add_config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adding Staff</title>
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
    <li class="nav-item active">
      <a class="nav-link " href="add_staff.php" data-toggle="tooltip" title="StoreKeeper Login!">Add Staff</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_item.php" data-toggle="tooltip" title="Staff Login!">Add Item</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="manage_item.php" data-toggle="tooltip" title="About Us!">Manage Items</a>
    </li>

  </ul>
</nav>
<form action="#" method="post">
  <h3>Add A New Staff</h3>
  <div class="input-group">
    <label>Email:</label>
    <input type="email" name="email" placeholder="abc@e.mail" required="true">
  </div>
  <div class="input-group">
    <label>Staff's Name:</label>
    <input type="text" name="name" placeholder="First Middle Last" required="true">
  </div><div class="input-group">
    <label>PF Number:</label>
    <input type="text" name="pf_number" placeholder="org..." required="true">
  </div><div class="input-group">
    <label>Department:</label>
    <input type="text" name="department" placeholder="e.g. IT, Comp Science..." required="true">
  </div><div class="input-group">
    <label>Staff's Position:</label>
    <input type="text" name="position" placeholder="e.g. Lecturer, Lab Technician..." required="true">
  </div>
    <div>
    <button class="btn btn-success" type="submit" name="register_btn">Register</button>
    <button class="btn btn-danger" type="submit" name="cancel_btn">Cancel</button>

  </div>
      <div>
  </div>
</form>

</body>
</html>