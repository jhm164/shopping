<?php

$cid=$_GET['cid'];
$pid=$_GET['pid'];

if(!empty($cid)&&!empty($pid)){
	
	
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


$sql="insert into cart values('','$cid','$pid')";
if ($conn->query($sql) === TRUE) {
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully added to cart')
    window.location.href='http://localhost:8080/shopping/index.php';
    </SCRIPT>");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}
else{
	 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('please login and try')
    window.location.href='http://localhost:8080/shopping/index.php';
    </SCRIPT>");
}
	

?>