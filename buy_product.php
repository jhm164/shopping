<html>
	<head><title>Buy product</title>
	
	
	</head>
	<body>
	<script type="text/javascript">
	<?php ?>
		 var txt;
var r = confirm("Press a button!");
if (r == true) {
    txt = "You pressed OK!";
    <?php o(); ?>
    
} else {
    txt = "You pressed Cancel!";
} 
	</script>
	
		<?php
		$pid=$_GET['pid'];
		$id=$_GET['id'];

o();
	

		function O(){	
			if(!empty($_GET['id'])){
	

				$pid=$_GET['pid'];
				$id=$_GET['id'];

				$conn=mysql_connect("localhost","root","");
				$db=mysql_select_db('shopping',$conn);

				if(!$db){
					echo mysql_error();
				}
				global $p;
				echo 'sucess';

				$q="select price from products where pid='$pid'";
				$r=mysql_query("$q",$conn);
  
				if($r){
					while($row=mysql_fetch_array($r)){
						$p=$row['price'];
					}
				}
				echo $p;




				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "shopping";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if($conn->connect_error){
					die("Connection failed: " . $conn->connect_error);
				}


				$sql="Insert into product_status(pid,cid,product_price,status) values('$pid','$id','$p','u')";
 
				if($conn->query($sql) === TRUE){
					echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
					echo "New record created successfully";
				} else{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			else{
				echo 'you have not login';
				?>
				<a href="http://localhost:8080/shopping/login.php">Back</a>
				<?php
			}

		}
		?>
	

	</body>
</html>