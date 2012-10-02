<?php
for ($i = 1; $i <= 100; $i++){
    switch ($i){
    case (($i%3 == 0) && ($i%5 == 0)):
        echo 'FIZZBUZZ<br />';
        break;
    case (($i%3 == 0) && (!$i%5 == 0)):
        echo 'FIZZ<br />';
        break;
    case ((!$i%3 == 0) && ($i%5 == 0)):
        echo 'BUZZ<br />';
        break;
    default:
        echo $i.'<br />';
        break;
    }
}
?>
