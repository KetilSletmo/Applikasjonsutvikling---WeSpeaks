<?php
	session_start();
	$oppgave = false;
	if (isset($_POST['sendt'])) {
		if ($_POST['inntekst'] == $_SESSION['string']) {
			$oppgave = "solved";
		}
	} else {
	}
?>
<!DOCTYPE HTML lang="no">
<html>

<head>
<title>WeSpeaks</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial scale 1.0">
<link rel="stylesheet" type="text/css" href="General.css">
<style>
#logoen	{display: block;
		margin: 0 auto;
}
fieldset.Foresporsel{
	height: 120px;
	margin-top: 50px;
}
#tekstLogg{
	display: inline;
}
.regForesporsel{
	margin-top: 50px;
}
fieldset.Foresporsel, fieldset#loggInnField, fieldset#registrerField{
	width: 400px;
	margin-left: auto;
	margin-right: auto;
	padding-left: 25px;
	padding-right: 25px;
	border-radius: 4px;
}
fieldset#loggInnField {
	margin-top: 30px;
	height: 220px;
}
fieldset#registrerField{
	margin-top: 30px;
}
fieldset#loggInnField input.knapp{
	margin-top: 40px;
}
legend	{
	font-size: 32px;
}
input.tekst	{
	float: right;
	margin-top: 10px;
	padding: 5px;
	border-radius: 4px;
	font-size: 14px;
}
input.knapp {
	float: right;
	margin-right: 3px;
	border-radius: 5px;
	padding: 5px;
	background-color: orange;
}
label {
	display: inline-block;
	margin-top: 13px;
	margin-bottom: 10px;
	clear: both;
}
.flex {
	display: flex;
	flex-direction: column;
}
#regKnapp{
	margin-top: 40px;
	margin-bottom: 20px;
}

</style>
<script>
$("#").before($("#regKnapp"))
</script>
</head>
<body>
	<img src="logo.png" id="logoen" class="bildet" alt="Bilde av logo">
	<fieldset id="registrerField">
		<legend>Registrer bruker</legend>
		<form method="POST" action="logginn.php">
			<label>Epost-adresse: </label>
			<input type="email" name="Epost" class="tekst" required><br>
			<label>Brukernavn: </label>
			<input type="text" name="Brukernavn" class="tekst" required><br>
			<label>Passord: </label>
			<input type="password" name="Passord" class="tekst" required><br>
			<label>Gjenta passord: </label>
			<input type="password" name="Passord2" class="tekst" required><br>
			<input type='submit' name='sendt' value='Registrer bruker' id='regKnapp' class='knapp'>
		</form>
		<?php if (!$oppgave) { ?>
			<form method='POST' action='registrer.php'>
				<img src='image.php'>
				<input type='submit' value='Nytt bilde' class='knapp' value='nyCaptcha'>
				<p>Vennligst gjenta teksten her:</p>
				<input type='text' name='inntekst' id='inntekst' size='40'>
				<?php if (isset($_POST['nyCaptcha'])){ ?>
					<img src='image.php' />
				<?php } ?>
			</form>
		<?php } else { ?>
			<p>Takk. Input riktig gjengitt</p>
		<?php } ?>
	</fieldset>
	
	<fieldset class="Foresporsel">
		<article class="regForesporsel">
		<p id="tekstLogg">Har du en bruker?</p>
		<input type="button" value="Tilbake til logg inn" class="knapp" onclick="location.href='default.php';">
		</article>
	</fieldset>
</body>

</html>