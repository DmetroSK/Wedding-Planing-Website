<?php
	session_start();
	// this code section will remove the session varibales
	unset($_SESSION["userID"]);
	if(session_destroy()) {
      header("Location: index.php"); //redirects to the login page
   }
?>
