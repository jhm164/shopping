<html>
<head><title>Login page</title>
<style>
	
	table{
		border: solid 1px black;
		margin-left: 30%;
		
	}
	tr{
		padding: 3px;
		
	}
	td{
		color:white;
		text-shadow:  1px 1px 2px black; 
		border: #970000;
		font-size:35px;
		padding: 30px;
		border: solid 1px black;
	}
	h2{
		margin-left: 30%;
		
	}
		
	}
	.b{
		
	}
	
	h2{
		color:white;
		font-size: 70px;
		text-shadow:  1px 1px 2px black; 
	}
</style>

</head>
<body bgcolor="#808080">
<h2>login page</h2>
<table>
<form action="http://localhost:8080/shopping/index.php" method="post">
<tr>
	<td><b>username</b></td>
	<td><input type="text" placeholder="username" name="username"/></td>
</tr>
<tr>
	<td><b>password</b></td>
	<td><input type="password" placeholder="password" name="password"/></td>
</tr>
<tr>
	<td><input type="submit" value="Login" style="height: 45px; width:100px;  box-shadow: 4px 4px 0px 4px #595959; font-size: 18px;"></td>
	<td><a href="http://localhost:8080/shopping/register.php">Sign up</a></td>
</tr>
</form>
<?php

?>
</table>
</body>
</html>