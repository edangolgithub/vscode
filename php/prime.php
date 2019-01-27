<?php
//hcf 

//6 1236
//12 1234612

for ($i = 1; $i < 101; $i++) {
    $prime = 1;
    for ($j = 2; $j < $i-1; $j++) {
        if ($i % $j == 0) {
            $prime = 0;
            break;
        } 
    }
    if ($prime == 1) {
        echo "<h1>" . $i . "</h1>";
    }
}


?>