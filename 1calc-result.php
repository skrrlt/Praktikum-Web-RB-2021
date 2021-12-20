<p>Berikut merupakan hasil dari setiap operasi</p>

<?php

    $bilangan1 = $_POST["bilangan1"];
    $bilangan2 = $_POST["bilangan2"];
    $operator = $_POST["operator"];

    fungsi($bilangan1, $bilangan2, $operator);

    function fungsi($a, $b, $x)
    {
        if($x == 1){
            echo 'PENJUMLAHAN <br>';
            echo 'Operator + <br>';
            echo 'Hasil : ', $a + $b;
        }elseif($x == 2){
            echo 'PENGURANGAN <br>';
            echo 'Operator - <br>';
            echo 'Hasil : ', $a - $b;
        }elseif($x == 3){
            echo 'PEMBAGIAN <br>';
            echo 'Operator / <br>';
            echo 'Hasil : ', $a / $b;
        }elseif($x == 4){
            echo 'PERKALIAN <br>';
            echo 'Operator * <br>';
            echo 'Hasil : ', $a * $b;
        }elseif($x == 5){
            echo 'MODULUS <br>';
            echo 'Operator % <br>';
            echo 'Hasil : ', $a % $b;
        }else{
            echo 'Pilihan Salah!';
        }
    }
?>