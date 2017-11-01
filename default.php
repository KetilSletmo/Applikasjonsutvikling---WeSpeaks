<!DOCTYPE html>
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
#tekstReg{
	display: inline;
}
.regForesporsel{
	margin-top: 50px;
}
fieldset.Foresporsel, fieldset#loggInnField{
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
#regKnapp{
	margin-top: 40px;
	margin-bottom: 20px;
}
</style>

</head>

<body>
	<img src="logo.png" id="logoen" class="bildet" alt="Bilde av logo">
	<fieldset id="loggInnField">
		<legend>Logg inn</legend>
		<form method="POST" action="logginn.php">
			<label>Brukernavn: </label>
			<input type="text" name="Brukernavn" class="tekst"><br>
			<label>Passord: </label>
			<input type="password" name="Passord" class="tekst"><br>
			<input type="button" value="Glemt passord?" class="knapp">
			<input type="submit" name="Logg inn" value="Logg inn" class="knapp">
		</form>
	</fieldset>
	
	<fieldset class="Foresporsel">
		<article class="regForesporsel">
		<p id="tekstReg">Har du ikke registrert deg?</p>
		<input type="button" value="Registrer en bruker" class="knapp" onclick="location.href='registrer.php';">
		</article>
	</fieldset>
</body>

</html>