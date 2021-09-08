<?php
$servername = "localhost";
$username = "diksha";
$password = "abcd123";
$database_name = "blood_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);
// now Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$email = isset($_POST['email']) == true ? $_POST['email'] : '';
$pwd = isset($_POST['password']) == true ? $_POST['password'] : '';
$sql = "SELECT * FROM user WHERE u_email='$email' and u_password='$pwd' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

if (mysqli_num_rows($result) == 1) {
   // var_dump($row);
   // echo "Welcome";
    session_start(); // starts/Resumes the session ---> Starting
    $_SESSION["name"] = $row['u_fname'];
    $_SESSION["isLoggedIn"] = true;
    echo "<script>
    alert('Login Sucessfully');
    window.location.href = 'login.html' 
    </script>";
} else {
    echo "<script>
    alert('Incorrect Password or Email-id');
    window.location.href = 'login.html' 
    </script>";
}
?>