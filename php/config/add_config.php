<?php
 $conn = mysqli_connect("localhost","root","","storekeeper");
 if(isset($_POST['register_btn']))
 {
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$pf_number = $_POST['pf_number'];
 	$department = $_POST['department'];
 	$position = $_POST['position'];
 	$password = md5($pf_number);

 	$insert_query = "INSERT INTO staff(email,name,pf_number,department,position,password) VALUES ('$email','$name','$pf_number','$department','$position','$password')";
 	mysqli_query($conn,$insert_query);
 }
?>