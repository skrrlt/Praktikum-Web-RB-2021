<?php
    function primes($a, $x){
        for($i = $a ; $i <= $x ; $i++){
            $y = 0;

            for($j = 1 ; $j <= $i ; $j++){
                if($i % $j == 0){
                    $y = $y + 1;
                }
            }

            if($y == 2){
                echo "$i";
                echo "<br>";
            }
        }
    }
    primes(1,50); 
?>

