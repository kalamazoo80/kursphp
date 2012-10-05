<?php
session_start();
require_once 'baza.php';
if(!empty($_GET['dodaj'])){
    foreach ($produkty as $produkt) {
        if($_GET['dodaj'] == $produkt['id']){
             $_SESSION['koszyk'][] = $produkt;
        }
    }
}
echo '<pre>';
var_dump($_SESSION);
//unset($_SESSION['koszyk']);
//session_destroy();

?>
