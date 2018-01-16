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
		padding: 10px;
		border: solid 1px black;
	}
	h2{
		margin-left: 30%;
		
	}
		
	}
	.b{
		
	}
</style>

</head>
<body>
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
	<td><input type="submit" value="Login"></td>
	<td><a href="http://localhost:8080/shopping/register.php">Sign up</a></td>
</tr>
</form>
<?php

?>
</table>
</body>
</html>