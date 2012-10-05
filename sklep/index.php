<?php
session_start();

require_once 'baza.php';
require_once 'funkcje.php';
//require_once 'koszyk.php';

if(!isset($_GET['sortuj']) && ($_GET['sortuj'] == 'username')){
    foreach ($users as $klucz => $wiersz) {
    $username[$klucz]  = $wiersz['username'];
    }
    array_multisort($username, SORT_DESC, $users);
}
?>
<!DOCTYPE HTML>
<html lang="pl-PL">
    <head>
        <title>Sklep</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" media="all" />
    </head>
    <body>
        <div class="container">
        <h1>Sklep</h1>
        <div>  
            <h3>Koszyk</h3>
            <p>Liczba eproduktow w koszyku <?=count($_SESSION['koszyk']) ?></p>
        </div>
        <a class="btn" href="index.php?sortuj=username">Sortuj wedlug imion</a>
    <table class="table table-striped table-bordered">
        <tr> 
        <?php foreach ($users as $klucz => $wartosc) {?>
            <th><?= $klucz ?></th>
        <?php } ?>
            <th>Akcja</th>
        </tr>
        <?php foreach ($users as $user) {?>
        <tr>
            <td><?=$user['id'] ?></td>
            <td><?=$user['username'] ?></td>
            <td><?=$user['email'] ?></td>
            <td><a class="btn" href="">Edytuj</a> <a href="" class="btn btn-danger">Usun</a></td>
        </tr>
        <?php }?>
    </table>
        </div>
        <div>
        <a class="btn" href="index.php?dodaj=1">Dodaj do koszyka</a>
        </div>
        <div>
            <p>Odwiedziles strone <?=licznik() ?> razy</p>
        </div>
   </body>
</html>