<?php 
    $myVar = 10;
    echo $myVar; # displays 10
    
    function addTen(&$param) {
        return $param += 10;
    }
    
    addTen($myVar);
    
    echo $myVar; # displays 20
?>