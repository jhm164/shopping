<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gmail=$_POST['gmail'];
$contact=$_POST['cont'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$username=$_POST['username'];
$password=$_POST['password'];





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql="Insert into login(id,fname,mname,lname,gmail,contact,gender,date,address,pin,username,password) values('','$fname','$mname','$lname','$gmail','$contact','$gender','$date','$address','$pin','$username','$password')";
 
 



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>


<a href="http://localhost:8080/shopping/login.php">Go back</a>