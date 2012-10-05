<?php

for ($i=1; $i<=20; $i++){
    $array[$i] = rand(1, 20);
}
//echo '<pre>';
//var_dump ($array);

sort($array);
for($j=0; $j<=20; $j++){
    echo "$array[$j] ";
}
echo '<br />';
$values = array_count_values($array);
foreach($values as $klucz => $wartosc)
    echo $klucz.' => '.$wartosc.'<br />';
?>
