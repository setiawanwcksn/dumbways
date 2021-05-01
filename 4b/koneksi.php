<?php
	$con=mysqli_connect("localhost","root","","dumbways");
	if ($con->connect_error)
	{
		die('Maaf koneksi gagal'.connect_error);
	}
?>