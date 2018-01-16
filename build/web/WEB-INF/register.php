<html>
<head><title>Register</title>
<style>
	
	
	table{
		margin-left: 35%;
		
	}
	
	td{
		padding:8px;
	border:solid 1px white;
		color: white;
	}
	h1{
		
		color:white;
	}
	
	
</style>

</head>
<body bgcolor="#4e2552">
<h1>Registeration form</h1>
<table>

<form action="http://localhost:8080/shopping/action_page.php" method="post">
<tr>
	<td>Enter full name</td>
	<td><input type="text" name="fname" placeholder="first name"/> <input type="text" name="mname" placeholder="middle name"/> <input type="text" name="lname" placeholder="last name"/></td>
	
	
</tr>
<tr>
	<td>Enter gmail</td>
	<td><input type="text" name="gmail" placeholder="@gmail.com"/></td>
</tr>
<tr>
	<td>Enter Contact</td>
	<td><input type="tel" name="cont" placeholder="+91"/></td>
</tr>
<tr>
	<td>Select Gender</td>
	<td><input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
</td>
</tr>
<tr>
	<td>Enter DOB</td>
	<td><input type="date" name="date" placeholder="+91"/></td>
</tr>
<tr>
	<td>Enter your address</td>
	<td><input type="text" name="address" placeholder="add"/></td>
</tr>
<tr>
	<td>Enter pin code</td>
	<td><input type="text" name="pin" placeholder="pin"/></td>
</tr>
<tr>
	<td>Enter Username</td>
	<td><input type="text" name="username" placeholder="username"/></td>
</tr>
<tr>
	<td>Enter password</td>
	<td><input type="password" name="password" /></td>
</tr>
<tr>
	<td><input type="reset" value="reset" /></td>
	<td><input type="submit" value="submit"/></td>
</tr>
</form>


<?php

?>
</table>
</body>

</html>