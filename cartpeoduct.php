<?php
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
echo cartp(7);
?>