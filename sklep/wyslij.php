<?php
echo '<pre>';
var_dump($_FILES);
$uploaddir = '';
$uploadfile = $uploaddir.basename($_FILES['plik']['name']);
if(move_uploaded_file($_FILES['plik']['tmp_name'], $uploadfile)){
echo  "ok";
}
else{
	echo "cos nie tak";
}
?>

<html>
<head>
<title></title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<label for="plik">Szukaj pliku</label>
<input type="file" id="plik" name="plik">
<input type="submit" value="Wyslij">
</form>
</body>
</html>