<?php
//ending the session of the user and redirecting to login again
	session_start();
	
	session_unset();
	session_destroy();
	header('Location:SignIn2.html');
	
?>