<?php
/***************************************
Written by: Immanuel Flepu (Siya)
Github: https://github.com/SiyaFl
***************************************/

	session_start();

	if(!isset($_SESSION['login'] ) ){
		header("LOCATION: view/index.html");
	}

	else{
		header("LOCATION: view/pages_adm/page_adm.php");	
	}
?>