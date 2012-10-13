<?php
      // $tresc = file_get_contents('http://www.onet.pl') or die('Blad na stronie');
		$text = 'Ala ma kota, a Zosia nie'.PHP_EOL;
         file_put_contents('plik.txt', $text, FILE_APPEND);
?>

