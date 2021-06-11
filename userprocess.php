<?php
include("demo1.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$message=$_REQUEST['message']

//Inserting data to table

$query=mysqli_query($db_connect,"INSERT INTO user(name,email,mobile,message) VALUES('$name','$email','$mobile','$message')")