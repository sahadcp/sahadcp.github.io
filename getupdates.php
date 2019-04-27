<?php

if(isset($_POST['btn']))
{

	$con=mysqli_connect('localhost','root','','az');

	$email=$_POST['email'];
	$query= "insert into get_updates (email) values ('$email')";
	mysqli_query($con,$query);
	header('location:index.html');

	
}

	?>