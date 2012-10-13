<?php
echo '<pre>';
var_dump($_POST);
$tekst = ($_POST['tekst']);
$tekst = trim($tekst);
//$tekst = addslashes($tekst);
$tekst = htmlentities($tekst);
echo $tekst;
?>

<html>
<head>
<title></title>
</head>
<body>
<form action="" method="post">
<label for="tekst">Tu wpisz jakis tekst</label>
<textarea id="tekst" name="tekst" cols="40" rows="10"></textarea>
<input type="submit" value="Wyslij">
</form>
</body>
</html>