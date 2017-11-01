<?php
	session_start();
	
	include "db.php";
	
	$brukernavn = $_POST["brukernavn"];
	$passord = $_POST["passord"];
	$sql = "SELECT email, passord FROM brukere WHERE email = '$passord' and password = sha1('IT2_2018''$password')";)
	$resultat = mysql_query($sql, $link);
	
	if($resultat == false){
		echo "<a href="login.php">Feilmelding, kan ikke kjøre query</a>";
		exit;
	}
	
	$rader = mysql_num_rows($resultat);
	if($rader == 1){
		$_SESSION["Logg inn"] = "OK";
		$_SESSION["Brukernavn"] = $brukernavn;
		$redirect = "hjem.php";
	}else{
		$redirect = "default.php";
	}
	
	mysql_free_result($resultat);
	mysql_close($link);
	
	header("Location: $redirect");
?>