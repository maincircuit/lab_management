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
<nav class="navbar navbar-expand-sm bg-lit navbar-light">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#" data-toggle="tooltip" title="Company Logo">Logo</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="tooltip" title="StoreKeeper Login!">StoreKeeper Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="tooltip" title="Staff Login!">Staff Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="tooltip" title="About Us!">About</a>
    </li>
  </ul>
</nav>
<form action="#" method="post">
	<h3>StoreKeeper Login</h3>
	<div class="input-group">
		<label>Username:</label>
		<input type="text" name="">
	</div>
	<div class="input-group">
		<label>Password :</label>
		<input type="password" name="">
	</div>
	<div>
		<button class="btn btn-success" type="submit" name="login_btn">Login</button>
	</div>
</form>

</body>
</html>