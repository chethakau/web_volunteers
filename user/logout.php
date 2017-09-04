<?php

session_start();
			$name=$_SESSION['fuser'];
			$first=$_SESSION['mulnama'];
			$last=$_SESSION['aganama'];
			$uid=$_SESSION['uid'];
					
			unset($_SESSION['fuser']);
			unset($_SESSION['mulnama']);
			unset($_SESSION['aganama']);
			unset($_SESSION['uid']);
			session_destroy();
			
			header("Location: /");
					 exit;

?>
