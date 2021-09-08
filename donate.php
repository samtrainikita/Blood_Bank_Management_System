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
	$city=$_POST['city'];
    $gender=$_POST['gender'];
	 $age=$_POST['age'];
    $blood_type=$_POST['blood_type'];
    $weight=$_POST['weight'];
    $haemo=$_POST['haemo'];
	$bp=$_POST['bp'];
	$health=$_POST['health'];
	$date=$_POST['date'];
	if($bp=="yes" and $health=="no" and $haemo=="greater than or equal to 12.5" and $weight=="greater than or equal to 50" and $age="18-50"){
	
    $query="INSERT INTO donor (d_fname, d_lname, d_email, d_phone_number, d_address,d_city, d_gender,d_age, d_blood_type,
	d_weight,d_haemo,d_bp,d_health,d_date) VALUES('{$fname}', '{$lname}', '{$email}', {$phone}, '{$address}', '{$city}', '{$gender}','{$age}', '{$blood_type}', '{$weight}',
	'{$haemo}','{$bp}','{$health}','{$date}')";
	
    $update=mysqli_query($conn, $query);


    if(!$update) {
    echo "ERROR WHILE INSERTING!";
    }
	else {$sql="select bcamp_location,bcamp_city,bcamp_date from bcamp where bcamp_city ='$city' and bcamp_date >= '$date' ";
	$result = mysqli_query($conn,$sql);
	
	echo "<span style:'font-size:22px,font-family:sans serif;'>CAMPS FOR YOU</span><br><br>";
while ($row = mysqli_fetch_array($result))  
{
	echo "<span style='font-size:18px; color:#ff4d4d;'>Location :     </span>".$row["bcamp_location"]."<br>" ;
	echo "<span style='font-size:18px; color:#ff8080;'>City :     </span>".$row["bcamp_city"]."<br>" ;
	echo "<span style='font-size:18px; color:#ff4d4d;'>Date :     </span>".$row["bcamp_date"]."<br><br><br>" ;
	
    }
	
	
	
	
	}
	}
	else { echo '<script>alert("SORRY,You Can not Donate Blood")</script>';}
	header("Location: home.html");

	}
?>