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
		{$sql="select d_fname,d_lname,d_blood_type,d_phone_number,d_email from donor where d_blood_type = '$blood_type'  ";
	$result = mysqli_query($conn,$sql);
	
while ($row = mysqli_fetch_array($result))  
{
	$echo1="First name:".$row["d_fname"]."<br>";
	$echo2="Last name :".$row["d_lname"]."<br>";
	$echo3="Blood type :".$row["d_blood_type"]."<br>";
	$echo5="Phone number:" .$row["d_phone_number"]."<br>";
	$echo6="Email address: " .$row["d_email"]."<br>"."<br>"."<br>";
		$echo4=$echo1.$echo2.$echo3.$echo5.$echo6;

	$echo4.=$echo4;
	
    }
	
	require_once('PHPMailer/PHPMailerAutoload.php');
	
	$mail= new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '465';
	$mail->isHTML();
	$mail->Username = '2018.nikita.samtrai@ves.ac.in';
	$mail->Password = 'nikita03@&&$';
	$mail->SetFrom('no-reply@gmail.com');
	$mail->Subject = 'Donor information ';
	$mail->Body=$echo4;

	$mail->AddAddress($email);
	
	$mail->Send();
	echo '<script>alert("Successfull")</script>';
	echo "<span style:'font-size:22px,font-family:sans serif;'>An email containing details of donors has been sent on your entered email</span><br><br>";
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
		 header("Location: home.html");
		
	}
	}

	
?>