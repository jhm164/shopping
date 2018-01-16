<html>
<head><title>Shop me</title>
<script type="text/javascript">
	
	function  k() {
    document.cookie = user1616 + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};
</script>
<style>

.left h3{
	color: white;
	float:right;
	
}
.left input[type=button]{
float: right;
}
details{
	float: right;
	text-decoration: none;
	box-decoration-break: none;
}
b{
	color:red;
}

.footer {
	color:white;
	
}
.left h1{
	margin-left: 15px;
	color: white;
	
	
}
.left{
		position: relative;
		height:auto;
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
.cart{
	float:right;
}
	
.single_product	img:hover{
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
	.pdetail{
		margin-left:12px; 
				position: relative;
		float:right;
	}
	.pdetail input[type=button]
	{
background: skyblue;
color:black;
font-size: 18px;
	}
</style>
</head>
<body bgcolor="#60615a">



<?php
 include 'counter.php';

global $u;
global $p;



$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("shopping",$conn);

global $veri;
if(!$db){
	echo mysql_error();
	
}

if(!isset($_COOKIE['pass1616'])&&!isset($_COOKIE['user1616'])) {
 
    if(!empty($_POST['username'])&& !empty($_POST['password'])){
 $u=($_POST['username']);
 $p=($_POST['password']);
}else{
	echo "<script type='text/javascript'>alert('Continue without login');</script>";
	
}
} else {
    $u= $_COOKIE['user1616'];
     $p= $_COOKIE['pass1616'];
}



$sql="select * from login where username='$u' and password='$p'";
 $r=mysql_query("$sql",$conn);
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row

global $xx;
if ($count==1) {
	$cookie_name = "user1616";
$cookie_value = $u;
setcookie($cookie_name, $cookie_value,  time()+3600); 
	$cookie_name1 = "pass1616";
$cookie_value1 = $p;
setcookie($cookie_name1, $cookie_value1, time()+3600); 

   
    while($row=mysql_fetch_array($r)){
?>
<div class="pdetail">
	
<details>
	

	<td><summary><h3><?php echo $row['fname']; ?>   <?php  echo $row['lname'];?></h3></summary>
		
	<table><tr><td><img src="http://localhost:8080/shopping/images/settingi.png" height="30" width="30"> <p>Accaunt settings</p></td></tr></table>
<form action="http://localhost:8080/shopping/index.php">
<input type="submit" value="Sign out" onclick="k()">
<a href="http://localhost:8080/shopping/logout.php?hello=true" >ok</a>
</form>
</details>

	</div>
<?php $xx=$row['id'];?>
<div class="cart">
<a href="http://localhost:8080/shopping/cart_details.php?id=<?php echo $xx ?>"><h3><i><b><?php  echo cartp($xx); ?></b></i></h3><img src="http://localhost:8080/shopping/images/cart2.png" height="40" width="30" alt="cart"></a>

</div>
	<?php 
		$veri=$row['id'];
		}
} else {
    echo "Unsuccessful! $count";
    
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
	<li><a href="http://localhost:8080/shopping/index.php/?menu=4">watchs</a></li>
	<li><a href="http://localhost:8080/shopping/index.php/?menu=5">head phones</a></li>
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
     $v=$row['pid'];
	
?>
<br>
<br>

</a>
<a href="http://localhost:8080/shopping/cart.php?cid=<?php echo $veri;?>&pid=<?php echo $v?>"  class="deletebtn">add cart</a>

</div>

<?php
	}
	?>
	
</div>	

<?php
}
?>
<?php
}
?>

	
<?php	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
<br>
<div class="footer">
<?php   echo count1(); add1();?><b>people have already visited this site</b>
	
</div>

</body>
</html>