<?php 
	
	
    $conn=mysqli_connect("localhost", "diksha", "abcd123", "blood_db");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }
    
    if($_SERVER["REQUEST_METHOD"]=='POST'){
    $fname=$_POST['f_name'];
    $lname=$_POST['l_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $blood_type=$_POST['blood_type'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password==$cpassword) {
    
    $query="INSERT INTO user (u_fname, u_lname, u_email, u_phone_number, u_address, u_age, u_gender, u_blood_type,
	u_password) VALUES('{$fname}', '{$lname}', '{$email}', {$phone}, '{$address}', {$age}, '{$gender}', '{$blood_type}', '{$password}')";
    $update=mysqli_query($conn, $query);
    if(!$update) {
    echo "ERROR WHILE INSERTING!";
    }
		 echo '<script>alert("SUBMITTED SUCESSFULLY")</script>';
		 header("Location: home1.html");
    }
    else {
        echo "Enter same password.";
    }
    

    }
	$image_url='../Images/logo3.gif';
	$user_url='../donormuskan1.php';
	$contact_url='../contact_us.html';
	$faq_url='../faq.html';
	$home_url='../home.html'
	
?>