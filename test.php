<!DOCTYPE html>
<!--Laget av jan 26.09.2017 -->
<!--Endret av Jan 27.09.2017 -->
<!--Kontrollert av Hamta 27.09.2017 -->
<html>

<head>
<title>WeSpeaks</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial scale 1.0">
<link rel="stylesheet" type="text/css" href="hjemStyle.css">
<link rel="stylesheet" type="text/css" href="General.css">
</head>

<body>
	<!--Kommentar ole: Tenker å legge inn slik at menybaren blir fixed etter at menybaren treffer toppen av webbrowseren-->
	<nav class="topbar">
		<img src="logo.png" class="bildet" alt="Bilde av logo">
		<div class="Login">
			<p>Login og registrering</p>
		</div>
	</nav> 

	<label for="responsivMeny" class="responsivMeny"></label>
	<label for="toggle" id="hamburgeren">&#9776;</label>
	<nav class="meny">
		<!--"Hamburgerknapp løsning for mobile enheter ved bruk av checkbox typen -->
		<input type="checkbox" id="toggle"/>
		<input type="checkbox" id="responsivMeny" role="button">
		<!--lag en liste over menyvalgene-->
		<ul class="pc">
			<li><a id="valgt" href="default.php">Hjem</a></li>
			<li><a href="arrangement.html">Arrangement</a></li>
			<li><a href="Grupper.html">Grupper</a></li>
			<li><a href="omOss.html">Om oss</a></li>
		</ul>
	</nav>
	
	<article>
		<h1 class="velkommen1">Velkommen til din sosiale portal!</h1>
			<p class="info">Informasjon</p>
		<h1 class="velkommen2">Velkommen!</h1>
	</article>
	
	
	<table>
		<tr>
			<th colspan="2";>
				<p class="h1p">
				Nyheter
				</p>
			</th>
		</tr>
		<tr>
			<th class="th">
				En nyhet
			</th>
			<th class="th1">
				En nyhet
			</th>
		</tr>
	</table>

	<article>
		<h1 class="finnfrem">Finn deg fram!</h1>

	</article>
	
<div class="venstre">
	<div class="row">
		<div class="rute">
			<div class="innhold">Valg av sted</div>
			<div class="innhold">Valg av sted</div>
			<div class="innhold">Valg av sted</div>
			<div class="innhold">Valg av sted</div>
			<div class="innhold">Valg av sted</div>
		</div>
		
		<div class="kart">
				<img src="map.png" alt="map">
		</div>
		
		<div class="beskrivelse">
				<p>Beskrivelse av sted</p>
		</div>
	</div>
</div>
	

</body>

<footer>
	<p>Lenker og terms of service</p>
<!--Forskjellige lenker og terms of service-->
</footer>

</html>