
<?php


 if (isset($_GET['hello'])) {
clearc();
    }
    
  
function clearc(){

	setcookie("user1616", "", time()-3600);
	setcookie("pass1616", "", time()-3600);
}


function count1(){
	$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("shopping",$conn);
global $co;
if(!$db){
	echo mysql_error();
	
}

$q="select * from counter";
$r=mysql_query("$q",$conn);

if($r){
	while($row=mysql_fetch_array($r)){
	//echo $row['count'];
	$co=$row['count'];
}
}
return $co;
}


add1();
function add1(){
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


$sql="insert into counter values('')";
if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}


global $co;
function cartp($f){
	
$con = mysql_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("shopping", $con);

$cnt = mysql_num_rows(mysql_query("SELECT * FROM cart where cid='$f'"));

return $cnt;

}


?>
<a href="http://localhost:8080/shopping/index.php">back to previous</a>

<a href="http://localhost:8080/shopping/login.php">Login page</a>
