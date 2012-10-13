<?php
$email = 'jakub@kalamazoo-design.co.uk';
echo str_replace('@', '.', $email); //jesli true- wyswietla tekst przed @, false - po @
//$domena = explode('@', $email)[0]; - dziala tylko w najnowszym php 5.4
//echo $domena;

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