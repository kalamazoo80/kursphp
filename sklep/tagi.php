<?php
echo '<pre>';
var_dump($_POST);
$tagi = ($_POST['tagi']);
$tablica = explode(',', $tagi);
array_walk($tablica, function(&$element){$element = trim($element);}); //ampersand przekazanie przez referencje - po to zeby zmienna po przerobieniu w funkcji zostala zachowana poza funkcja, to co sie dzieje w srodku funkcji bedzie mialo wplyw na to co jest na zewnatrz funkcji. Tu jest funkcja anonimowa bo nie ma nazwy
sort($tablica);
foreach($tablica as $tag){
	echo $tag.'<br />';
	}
	
$zpowrotem = implode(', ', $tablica);
echo $zpowrotem;

$url = 'https://www.google.pl/#hl=pl&output=search&sclient=psy-ab&q=angielski&oq=angielski&gs_l=hp.3..0l4.50243.52071.0.52562.9.6.0.3.3.0.107.546.4j2.6.0...0.0...1c.1.VAxP0HksQi0&pbx=1&bav=on.2,or.r_gc.r_pw.r_qf.&fp=da81453addaf9784&biw=1553&bih=720';
$url = parse_str($url, $dane);
echo '<pre>';
var_dump($dane);


//$tagi = trim($tagi);
//$tagi = addslashes($tagi);
//$tagi = htmlentities($tagi);
//echo $tagi;
?>

<html>
<head>
<title></title>
</head>
<body>
<form action="" method="post">
<label for="tagi">Opisz produkt za pomoca tagow, odziel je przecinkami:</label>
<textarea id="tagi" name="tagi" cols="40" rows="10"></textarea>
<input type="submit" value="Zapisz">
</form>
</body>
</html>