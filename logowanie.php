<?php


//echo '<pre>';
//var_dump($_POST);
    if(!empty($_POST)){
if (!empty($_POST['login']) && !empty($_POST['haslo'])){

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    
    $text = 'Hello ';
    $text .= $login;
    
    echo $text.'<br />';
    echo 'Twoje haslo to '.$_POST['haslo'].'<br />';
    die();
}
else{ 
 echo 'Oba pola sa wymagane';
}
}
?>
<!DOCTYPE HTML>
<html lang="pl-PL">
    <head>
        <title>title</title>
        <meta charset="UTF-8">
    </head>
    <body>
<form action="" method="post">
    <label for="login">Login</label>
    <input id="login" type="text" name="login"><br />
    <label for="haslo">Haslo</label>
    <input id="haslo" type="text" name="haslo"><br />
    <p><input type="submit" value="Zaloguj sie"></p>
</form>
    </body>
</html>

<?php

?>
