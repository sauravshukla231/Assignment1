<?php
echo "<pre>";
$space = 10;
for ($i = 0; $i <= 10; $i++) {
     
    for ($k = 0; $k < $space; $k++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < 2 * $i - 1; $j++) {
        echo "*";
    }
     
    $space--;
    echo "<br/>";
}
echo "</pre>";
?>