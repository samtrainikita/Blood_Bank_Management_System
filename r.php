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
	
    $gender=$_POST['gender'];
	
    $blood_type=$_POST['blood_type'];
    $quantity=$_POST['quantity'];
   
	$sqlquery =" select * from bloodbank where blood_type='$blood_type' and quantity >= '$quantity'";
	$abc=mysqli_query($conn,$sqlquery);
	
	

	if(mysqli_num_rows($abc)==0)
		{$sql="select d_fname,d_lname,d_blood_type from donor where d_blood_type = '$blood_type'  ";
	$result = mysqli_query($conn,$sql);
	
	echo "<span style:'font-size:22px,font-family:sans serif;'>Details</span><br><br>";
while ($row = mysqli_fetch_array($result))  
{
	echo "<span style='font-size:18px; color:#ff4d4d;'>Fname:     </span>".$row["d_fname"]."<br>" ;
	echo "<span style='font-size:18px; color:#ff8080;'>Lname :     </span>".$row["d_lname"]."<br>" ;

	echo "<span style='font-size:18px; color:#ff4d4d;'>Bloodtype :     </span>".$row["d_blood_type"]."<br><br><br>" ;
	
    }
	
	
	
	
	}
	
	
	else{
	
    $query="INSERT INTO receiver (r_fname, r_lname, r_email, r_phone_number, r_address, r_gender, r_blood_type,r_quantity) VALUES('{$fname}', '{$lname}', 
	'{$email}', {$phone}, '{$address}','{$gender}', '{$blood_type}',{$quantity})";
	
    $update=mysqli_query($conn, $query);


    if(!$update) {
    echo "ERROR WHILE INSERTING!";
    }
	else{
		 echo '<script>alert("WE NOTED YOUR REQUEST, YOU WILL RECIEVE YOUR BLOOD BAG SOON")</script>';}
		
	}
	}

	
?>