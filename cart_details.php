
<html>
	
	<head>
		<title>my cart</title>
		<style>
			td{
				
				padding-left:8px; 
				color: white;
				font-size: 30px;
				height:150px;
				width:150px;
				
			}
			img:hover{
				height: 300px;
				width:300px;
				transition: width 1.5s;
				transition: height 2s;
			}
			.left{
				position: absolute;
			}

			.right{
				position: relative;
				width: auto;
background-color: :#938893;
				float:right;
			}

			.right h4{

				color:white;
			}


		</style>
	</head>
	<body bgcolor="#6b616b">
		<div class="left">
		<?php
		
		$id=$_GET['id'];
		global $p;
		$conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("shopping",$conn);
  global $i;
  if(!$db){
  	echo mysql_error();
  }
  if(isset($_GET['rmd'])){
  	$id1=$_GET['pid'];
			$sql = "DELETE FROM cart WHERE cid='$id' and pid='$id1'";

mysql_query($sql)
or die(mysql_error());      


		}
  
		$q="SELECT pid FROM cart where cid='$id'";

$r=mysql_query("$q",$conn);

if($r){
	
	while($row=mysql_fetch_array($r)){
		
		
		$p[]=$row['pid'];
		
	}
}
$arrlength=count($p);
for($x = 0; $x < $arrlength; $x++) {
   
   
   $q="SELECT * FROM products where pid='$p[$x]'";

$r=mysql_query("$q",$conn);
?>
<table>
<?php
global $u1;
if($r){
	
	while($row=mysql_fetch_array($r)){

		?>
		<tr>
		<td>	<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" height="150" width="150"/>';?></td>
		<td><?php echo $row['pname'];?></td>
		<td><?php echo $row['details'];?></td>
		<td><?php echo $row['price'];?> </td>
		<td><a href="http://localhost:8080/shopping/product_detail.php/?pid=<?php echo $row['pid']?>&id=<?php echo $id ?>">buy it</a> </td>
		<td><a href="http://localhost:8080/shopping/cart_details.php?pid=<?php echo $row['pid']?>&id=<?php echo $id ?>&rmd=<?php echo $id ?>">remove</a> </td>
		
		</tr>
		<?php
		$u1=$u1+$row['price'];

	}
}
   
   
   
}


?>

</table>	
</body>
</div>
<div class="right">
<h3>Total cart value:</h3><h4><?php echo $u1;?></h4></div>	
	</body>
</html>