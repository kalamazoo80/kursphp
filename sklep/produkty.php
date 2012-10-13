<?php
session_start();
require_once ('baza.php');
?>
<html>
    <head>
        <title>Sklep - produkty</title>
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
    <table class="table table-striped table-bordered">
        <tr> 
        <?php foreach ($produkty as $klucz => $wartosc) {?>
            <th><?=$klucz ?></th>
        <?php } ?>
            <th>Kup</th>
        </tr>
        <?php foreach ($produkty as $produkt) {?>
        <tr>
            <td><?php echo $produkt['id'] ?></td>
            <td><?php echo $produkt['nazwa'] ?></td>
            <td><?php echo $produkt['cena'] ?></td>
            <td><a class="btn" href="index.php?dodaj=<?php echo $produkt['id']?>">Dodaj do koszyka</a></td>
        </tr>
        <?php }?>
       </div>
    </body>
</html>
