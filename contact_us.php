
	<?php 
    
    $conn=mysqli_connect("localhost", "diksha", "abcd123", "blood_db");
    if(!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    }
    
    if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name=$_POST['name'];
    
    $email=$_POST['email'];
    
   
    $subject=$_POST['subject'];
    $msg=$_POST['msg'];
     
    
    $query="INSERT INTO contact_us (name,email,subject,message) VALUES('{$name}',  '{$email}', '{$subject}','{$msg}')";
    $update=mysqli_query($conn, $query);
    if(!$update) {
    echo "ERROR WHILE INSERTING!";
    }

    
    else {
		 echo '<script>alert("Thanks for contacting us! we will revert back soon")</script>';
    }
    

    }
	
	
?>