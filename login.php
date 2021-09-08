<?php
	 
    $conn=mysqli_connect("localhost", "diksha", "abcd123", "blood_db");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	session_start();

	if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

	
	$sql="select u_email,u_password,u_fname from user where u_email = '$email' and u_password = '$password'";
	$result=mysqli_query($conn,$sql);
	
	
	if(mysqli_num_rows($result)==0)
	{
		echo "<script> 
		window.location.href='login.html';
		alert('Invalid credentials');
		</script>";
	}
	else 
	{
			header ("Location: home.html");
			echo "<script>
			alert('Welcome');
			</script>";
	}
	}