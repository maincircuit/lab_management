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
    <style type="text/css">
      section{
        width: 300px;
        height: relative;
        background-color: green;
        color:white;
        text-align: left;
        border: 2.5px solid green;
      }
      .sidebar-active .active{
        color: green;
        border: 2px solid black;
        font-weight: bold;
      }
    </style>
</head>
<body>
  <div class="d-flex" id="wrapper">
<div class="bg-light border-right" id="sidebar-wrapper" style="background-color: green;">
      <div class="sidebar-heading" style="background-color: green;">Home </div>
      <div class="list-group list-group-flush sidebar-active" >
        <!--<a href="#" class="list-group-item list-group-item-action bg-light"></a>-->
        <a href="#" class="list-group-item list-group-item-action bg-light">Available Items</a>
        <a href="#two" class="list-group-item list-group-item-action bg-light">Borrowed Items</a>
        <a href="#three" class="list-group-item list-group-item-action bg-light">REQUESTS</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Staff</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <div id="page-content-wrapper">

<nav class="navbar navbar-expand-sm bg-lit navbar-light">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="../index.php" data-toggle="tooltip" title="Company Logo">Logo</a>
  
  <!-- Links -->
  <ul class="navbar-nav" style="color:white;">
    <li class="nav-item">
      <a class="nav-link" href="add_staff.php" data-toggle="tooltip" title="StoreKeeper Login!">Add Staff</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_item.php" data-toggle="tooltip" title="Staff Login!">Add Item</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="manage_item.php" data-toggle="tooltip" title="About Us!">Manage Items</a>
    </li>

  </ul>
</nav>
<!--<section>
  <a href="#" class="btn btn-block active" style="color:black;border-radius: 0px;">Available Items</a>
  <a href="#" class="btn btn-block">Borrowed Items</a>
  <a href="#" class="btn btn-block">Requests</a>

</section>-->

<section><h3>Images of Available Items</h3></section>
<img src="../../images/la.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/chicago.jpg" width="40%" height="300" class="rounded-circle img-fluid">
<img src="../../images/ny.jpg" width="40%" height="300" class="rounded-circle img-fluid">
<img src="../../images/chicago1.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/la1.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/ny1.jpg" width="40%" height="300" class="rounded-circle img-fluid">
<div style="background-color: white;" id="two">
  <section><h3>Images of Available Items</h3></section>
<img src="../../images/la.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/chicago.jpg" width="40%" height="300" class="rounded-circle img-fluid">
<img src="../../images/ny.jpg" width="40%" height="300" class="rounded-circle img-fluid">
<img src="../../images/chicago1.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/la1.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/ny1.jpg" width="40%" height="300" class="rounded-circle img-fluid">
</div>
<div style="background-color: green;" id="three">
  <section><h3>Images of Available Items</h3></section>
<img src="../../images/la.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/chicago.jpg" width="40%" height="300" class="rounded-circle img-fluid">
<img src="../../images/ny.jpg" width="40%" height="300" class="rounded-circle img-fluid">
<img src="../../images/chicago1.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/la1.jpg" width="40%" height="300" class="rounded img-fluid">
<img src="../../images/ny1.jpg" width="40%" height="300" class="rounded-circle img-fluid">
</div>
<div>
  
</div>
</div>

</div>
</body>
</html>