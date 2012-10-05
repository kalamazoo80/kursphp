<?php
       $tresc = file_get_contents('http://www.onet.pl') or die('Blad na stronie');
       echo $tresc;
?>
