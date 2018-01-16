<html>
<head><title>product details</title>
<style>
h2{
	color: white;
	margin-left: 35%;
}
a{
	
	text-decoration: none;
}
h3{
	color:white;
	font-size: 50px;
}
p{
	color: white;
}
tr{
	border:solid 1px black;
}
table{
	margin-top: 10%;
	margin-left:35%;
}
td{
	font-size: 30px;
color:white;	
border:solid 1px black;
padding: 8px;
padding-left: 5px;
}	

.rell{
box-shadow: 2px 2px 2px 2px black;
	margin:8px;
	padding-top:12px;
	padding-left: 12px;
	border: solid 1px #black;
	height: 400px;
	width:400px;
	float: left;
}
.rell img:hover{
	width:350px;
	 transition: width 1s;
}
</style>


</head>
<body bgcolor="#6b6071">
<table>

<?php
$id=$_GET["pid"]; 
global $id1;
$id1=$_GET["id"];
global $cat;
  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("shopping",$conn);
  global $i;
  if(!$db){
  	echo mysql_error();
  }
  $q="select * from products where pid='$id'";
  $r=mysql_query("$q",$conn);
  
  if($r){
  	while($row=mysql_fetch_array($r)){
  		?>
  		<tr>
  			<td>
  			   <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="300px" width="300px"/>';	?>
  			</td>
  			
  		</tr>
  	<tr>	
  	<td>product name</td>
  	<td>
  		<?php
	  	echo $row['pname'];
	  	?>
	</td>
	</tr>
	<tr>	
  	<td>product details</td>
  	<td>
	  	<?php
	  	echo $row['details'];
	  	?>
	  	</td></tr>
	  	<tr>
	  	<td>best price</td>
	  	<td>
	  	<?php
	  	echo $row['price'];
	  	?>
	  	</td></tr>
	  	<tr>
	  	<td>internal memory</td>
	  	<td>
	  	<?php
	  	echo $row['internal'];
	?>
	</td></tr>
	<tr>
	<td>ram</td>
	<td>
	<?php
	   echo $row['ram'];
	   $cat=$row['category'];
	   
	  }
}
	  ?>
	  </td>
	  </tr>
	<tr>
		<td><a href="http://localhost:8080/shopping/buy_product.php/?pid=<?php echo $id ?>&id=<?php echo $id1?>">buy product</<a></td>
	</tr>  
	</table>
	<br>
	<br>
<h3>Suggesions</h3>
	  <?php
	  
	$q="select * from products where category='$cat'";
  $r=mysql_query("$q",$conn);
  
  if($r){
  	while($row=mysql_fetch_array($r)){
  		 ?>
  		 <div class="rell">
  		 <?php 
  		 $id2=$row['pid'];
  		  ?>
  		<a href="http://localhost:8080/shopping/product_detail.php/?pid=<?php echo $id2 ?>&id=<?php echo $id1?>">
  		 	 <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="300px" width="300px"/>';	?>
  		 	<p><?php echo $row['pname']; ?></p>
  		 	<p><?php echo $row['details']; ?></p>
  		 	</a>
  		 </div>
  		 <?php
  		
		}
	}
	  
	  
	  
	  
	  
  	
  
  
  
  
?>

</body>
</heml>