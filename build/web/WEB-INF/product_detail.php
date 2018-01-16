<html>
<head><title>product details</title>
<style>
h2{
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
</style>


</head>
<body bgcolor="#6b6071">
<table>

<?php
$id=$_GET["pid"]; 
$id1=$_GET["id"];
  $conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("shopping",$conn);
  
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
	  }
	  ?>
	  </td>
	  </tr>
	<tr>
		<td><a href="http://localhost:8080/shopping/buy_product.php/?pid=<?php echo $id ?>&id=<?php echo $id1?>">buy product</<a></td>
	</tr>  
	  <?php
  	
  }
  
  
  
  
?>
</table>
</body>
</heml>