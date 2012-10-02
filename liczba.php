<?php
//echo '<pre>';
//var_dump($_POST);

if(!empty($_POST)){
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    
    if ($liczba1 > $liczba2){
            echo 'Twoja liczba1 to '.$liczba1.' i jest wieksza od '.$liczba2;
    }
    else if($liczba1 < $liczba2){
            echo 'Twoja liczba1 to '.$liczba1.' i jest mniejsza od '.$liczba2;
    }
    else {
            echo 'Twoja liczby sa rowne';
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
    <label for="liczba1">Liczba1</label>
    <input id="liczba1" type="text" name="liczba1"><br />
    <label for="liczba2">Liczba2</label>
    <input id="liczba2" type="text" name="liczba2"><br />
    <p><input type="submit" value="Sprawdz"></p>
</form>
    </body>
</html>

<?php

?>
