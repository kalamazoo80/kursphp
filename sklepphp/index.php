<?
function __autoload($class_name){
	include '../lib/'.strtolower($class_name).'.php';
}

//$user = new User();

/*dodawanie danych
$user->username = 'Johny';
$user->password = 'haslo';
$user->imie = 'Jan';
$user->nazwisko = 'Kowalski';
$user->email = 'j@k.com';
$user->cena = 100;

$obiekt = new stdClass();
*/
$koszyk = new Koszyk();
$produkt = new Product();


//echo '<pre>';
//var_dump ($user);


$uzytkownik1 = new User(1);
echo $uzytkownik1->pobierzDane();

echo '<pre>';
var_dump($uzytkownik1);

?>