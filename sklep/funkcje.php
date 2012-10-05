<?php
function licznik(){
        $value = isset($_COOKIE['licznik']) ? ++$_COOKIE['licznik'] : 1;
        //$value = 1;
        //$value = ++$_COOKIE['licznik'];
        setcookie('licznik', $value, time()+3600);
        return $value;
}
?>
