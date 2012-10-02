<?php
//echo '<pre>';
//var_dump($_POST);
define('VAT', 0.23);
if (!empty($_POST['liczba1']) && !empty($_POST['liczba2'])){
  if(!empty($_POST)){
 $liczba1 = $_POST['liczba1'];
 $liczba2 = $_POST['liczba2'];
 $suma = $liczba1 + $liczba2;
 $pole = $liczba1 * $liczba2;
 $vat = $suma * VAT;
 $obwod = ($liczba1 *2) + ($liczba2 * 2);
 echo 'Twoje liczby to '.$liczba1.' i '.$liczba2.'<br />';
 echo 'Ich suma to: '.$suma.'<br />';
 echo 'Pole prostokata o podanej dlugosci bokow to '.$pole.'<br />';
 echo 'Obwod prostokata o podanej dlugosci bokow to '.$obwod.'<br />';
 echo 'Vat od sumy Twoich liczb to '.$vat;
 die;
       }
       else{ 
 echo 'Oba pola sa wymagane';
}}
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
    <p><input type="submit" value="Policz"></p>
</form>
    </body>
</html>

<?php

?>
