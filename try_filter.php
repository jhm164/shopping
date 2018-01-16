<html>
<head><title>try filter</title>
 <script type="text/javascript">
 function triggerChange(){
    $("#chk").trigger("change");
}
 </script>


</head>
<body>


<?php


function display_category($ct){
		$conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("shopping",$conn);
  global $i;
  if(!$db){
  	echo mysql_error();
  }
  
		$q="SELECT * FROM products WHERE category='$ct'";

$r=mysql_query("$q",$conn);

if($r){
	
	while($row=mysql_fetch_array($r)){
		
	echo $row['pname'];
		
	}
}
}



function p($i,$i1){
		$conn=mysql_connect("localhost","root","");
  $db=mysql_select_db("shopping",$conn);
  global $i;
  if(!$db){
  	echo mysql_error();
  }
  
		$q="SELECT * FROM products WHERE price between '$i' and '$i1'";

$r=mysql_query("$q",$conn);

if($r){
	
	while($row=mysql_fetch_array($r)){
		
	echo $row['pname'];
		
	}
}
}


?>

me<input type="checkbox" onclick="cc()" id="chk"/>


 <select>
  <option value="volvo" >Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select> 

</body>
s</html>