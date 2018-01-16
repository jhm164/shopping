<?php


 if (isset($_GET['hello'])) {
clearc();
    }
    
  
function clearc(){

	setcookie("user1616", "", time()-3600);
	setcookie("pass1616", "", time()-3600);
}
?>
<a href="http://localhost:8080/shopping/index.php">back to previous</a>
<br>

<a href="http://localhost:8080/shopping/login.php">Login page</a>
