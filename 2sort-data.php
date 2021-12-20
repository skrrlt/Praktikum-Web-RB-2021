<?php
    $list = ['larine','aduh','qifuat','toda','anevi','samid','kifuat'];
    
    sort($list);
    function fungsi($Array){
        foreach($Array as $datalist){
            echo $datalist;
            echo "<br>";
        }   
    }
    fungsi($list);
?>
