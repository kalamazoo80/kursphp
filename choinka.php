<?php
for ($i = 1; $i <=5; $i++){
    for($j = 1; $j <= 5; $j++){
    echo '&nbsp;';
    $liczba = (1 + ($j*2));
    for ($j = 1, $j<= ($liczba + 2); $++){
        echo '*';
}
}
?>
