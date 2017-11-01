<?php
header("Content-type: image/png");
session_start();
$img = imagecreatetruecolor(100, 40);
$hvit = imagecolorallocate($img, 255, 255, 255);
$svart = imagecolorallocate($img, 0, 0, 0);
$oransje = ImageColorAllocate($img, 255, 140, 0);
function tilfeldigTekst($lengde){
	$karak = "abcdefghijkmnopqrstuvwxyz023456789";
	$str = "";
	$i = 0;
		while($i <= $lengde){
			$num = rand() % 33;
			$tmp = substr($karak, $num, 1);
			$str = $str . $tmp;
			$i++;
		}
	return $str;
}
imagefill($img, 0, 0, $oransje);
$tekst = tilfeldigTekst(rand(5,5));
$_SESSION['string'] = $tekst;
imagettftext($img, 14, 0, 13, 19, $svart, "calibri.ttf", $tekst);
imagettftext($img, 16, 0, 12, 18, $hvit, "calibri.ttf", $tekst);
imagepng($img);
imagedestroy($img);
?>