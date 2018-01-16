<html>
<head><title>Shop me</title>

<style>

.left h3{
	color: white;
	float:right;
	
}
.left h1{
	margin-left: 15px;
	color: white;
	
	
}
.left{
		position: relative;
		height:150px;
		width:100%;
		overflow: auto;
		background-color:#034947 ;
		
	}
	
	.product_box{
		
		margin: 2px;
		border:solid 1px white;
		 
	}
	.single_product{
		
		align-content: center;
		width:382px;
		height: auto;
		padding:8px;
		margin: 2px;
		border:solid 1px white;
		color:white;
		float:left;
	}
	.single_product a{
		color:white;
		text-decoration:none;
		
	}
	.left li a{
		padding-left: 12px;
		color: white;
		margin-left: 8px;
		color:white;
		text-decoration: none;
		
	}
	.left li{
		float: left;
		text-decoration: none;
	}
.left ul{
	list-style-type: none;
	
}
	
	img:hover{
		width: 370;
		transition-duration: 4s;
	}
	.left h1{
	margin: center;
		color: :white;
	}
	h3{
		color:white;
		float:right;
	}
</style>
</head>
<body bgcolor="#60615a">



<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("shopping",$conn);

global $veri;
if(!$db){
	echo mysql_error();
	
}



if(!empty($_POST['username'])&& !empty($_POST['password'])){
$u=($_POST['username']);
$p=($_POST['password']);
$sql="select * from login where username='$u' and password='$p'";
 $r=mysql_query("$sql",$conn);
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row


if ($count==1) {
   
    while($row=mysql_fetch_array($r)){
?>
<h3><?php echo $row['fname']; ?>   <?php  echo $row['lname'];?></h3>
	<?php 
		$veri=$row['id'];
		}
} else {
    echo "Unsuccessful! $count";
    
}
}else{
	echo "<script type='text/javascript'>alert('Continue without login');</script>";
	
}
?>

<div class="left">

<h1>My app</h1>

<?php

echo $veri;

?>
<ul>
	<li><a href="http://localhost:8080/shopping/index.php/?menu=1">mobile</a></li>
	<li><a href="http://localhost:8080/shopping/index.php/?menu=2">TV</a></li>
	<li><a href="http://localhost:8080/shopping/index.php/?menu=3">washing machines</a></li>
</ul>
	
</div>
	<div class="product_box">
	<?php
	
	if(!isset($_GET['menu'])){
		
	
$q="SELECT * FROM products ORDER BY rand() LIMIT 0,6";

$r=mysql_query("$q",$conn);

if($r){
	
	while($row=mysql_fetch_array($r)){
		?>
		
		<div class="single_product">
		<a href="product_detail.php/?pid=<?php echo $row['pid']?>&id=<?php echo $veri?>">
		<h2>		<?php
		
		echo $row['pname'];
		?>
		
		</h2>
		<br />
		<?php
		echo $row['details'];
		?>
	<br />

	<br />
		<?php
	echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="270" width="270"/>';
     
	
?>
</a>
</div>
<?php
	}
	?>
	
</div>	
<?php
}
}


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		if(isset($_GET['menu'])){
		
	$id1=$_GET['menu'];
$q="SELECT * FROM products where category='$id1'";

$r=mysql_query("$q",$conn);
if($r){
	
	while($row=mysql_fetch_array($r)){
		?>
		
		<div class="single_product">
		<a href="http://localhost:8080/shopping/product_detail.php/?pid=<?php echo $row['pid']?>&id=<?php echo $veri?>">
		<h2>		<?php
		
		echo $row['pname'];
		?>
		
		</h2>
		<br />
		<?php
		echo $row['details'];
		?>
	<br />

	<br />
		<?php
	echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="270" width="270"/>';
     
	
?>
</a>
</div>
<?php
	}
	?>
	
</div>	
<?php
}
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>

</body>
</html>