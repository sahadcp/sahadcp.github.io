<?php

if(isset($_POST['btn']))
{

	$con=mysqli_connect('localhost','root','','az');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$query= "insert into message (name,email,message) values ('$name','$email','$message')";
	mysqli_query($con,$query);
	header('location:index.html');


}

	?>