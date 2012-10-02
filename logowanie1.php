<?php
//echo '<pre>';
//var_dump($_POST);
$user = 'Kuba';
$password = 'haslo1';
if(!empty($_POST)){
    if (!empty($_POST['login']) && !empty($_POST['haslo'])){
        if(($user == $_POST['login']) && ($password == $_POST['haslo'])){
           echo 'Jest ok, zalogowales sie';
           die; 
        }
        else{
            echo 'Jest problem, nieprawidlowy login lub haslo';
        }
    }
    else{
        echo 'Jest problem, nie wypelniles wszystkich pol';
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
