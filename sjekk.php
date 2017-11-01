<?php
	session_start();
	$oppgave = false;
//	Jeg genererer en tekst, "tilfeldig"
	if (isset($_POST['sendt'])) {
		echo("<p>heeeeeei</p>");
		if ($_POST['inntekst'] == $_SESSION['string']) {
			$oppgave = 'solved';
		}
	} else {
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Language" content="no-bok">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Sjekk menneske og ikke maskin</title>
<style>
input {background-color:#f8eef8;margin-left:25px;}
</style>
</head>
<body onload="document.getElementById('inntekst').focus();">
<p>Sjekker at dette ikke settes opp av maskin, men menneske!</p>
<?php if (!$oppgave) { ?>
	<p>Du ser en tekst i ruten nedenfor:</p>
	<img src='image.php' />
	<p>Vennligst gjenta teksten her:</p>
	<form method='POST' action='sjekk.php'>
	<p>	<input type='text' name='inntekst' id='inntekst' size='40'>
	<input type='submit' name='sendt' value='Bekreft tekst'></p>
	</form>
	<?php } else { ?>
		<p>Takk. Input riktig gjengitt</p>
	<?php }?>
	
</body>
</html>