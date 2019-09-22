<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Store Home Page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  	<script src="assets/js/jquery.min.js"></script>
  	<script src="assets/js/popper.min.js"></script>
  	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/home.css">
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

<div class="container">
  <h3>Welcome to the Equipment Management System</h3>
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/la.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Screen</h3>
        <p>For Practical Lessons</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chicago.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Speakers</h3>
        <p>For Video and Audio Tutorials</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/ny.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Sony Projector</h3>
        <p>Powerful projector to be used in classes</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  <div>
  	<section>
  		<h3>Section 1.</h3>
  		<p>Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.</p>
  	</section>
    <section>
    	<h3>Section 2.</h3>
    	<p>To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements.</p>
    </section>
  	<section>
  		<h3>Section 3.</h3>
  		<p>Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.</p>
  	</section>
  </div><br>
  
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script
</body>
</html>