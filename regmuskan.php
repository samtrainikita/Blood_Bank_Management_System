<?php 
    
    $conn=mysqli_connect("localhost", "diksha", "abcd123", "blooddb");
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
    
    $query="INSERT INTO donors (d_fname, d_lname, d_email, d_phone_number, d_address, d_age, d_gender, d_blood_type, d_password) VALUES('{$fname}', '{$lname}', '{$email}', {$phone}, '{$address}', {$age}, '{$gender}', '{$blood_type}', '{$password}')";
    $update=mysqli_query($conn, $query);
    if(!$update) {
    echo "ERROR WHILE INSERTING!";
    }

    }
    else {
        echo "Enter same password.";
    }
    

    }
?>
	