<?php
if(!empty($_POST)){
	//header("location: index.php");
	//exit;
if (!empty($_POST['login'])){

    $login = $_POST['login'];
    
    if (preg_match("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}/", $login)){
			echo 'Email OK';
		}
		else{
			echo 'Nieprawidlowy email';
		}
}
else{ 
 echo 'Oba pola sa wymagane';
}
}
?>
<html>
<head>
<title>rejestracja</title>
</head>
<body>
<form action="" method="post">
    <label for="login">Email</label>
    <input id="login" type="text" name="login"><br />
    <p><input type="submit" value="Rejestracja"></p>
</form>