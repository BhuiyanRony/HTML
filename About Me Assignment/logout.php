<?php
	session_start();

	if(!isset($_SESSION['loggedin']))
	{
		header("Location: login.php");
	}
	else if(isset($_SESSION['loggedin'])!="")
	{
		session_destroy();
        unset($_SESSION['loggedin']);
		header("Location: login.php");
	}

?>