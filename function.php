<?php
// declare(strict_types=1);


function add($a=0, $b=0, $c=0){
    return ($a+$b+$c);
}

function avg($tot) {
    return $tot/3;
}

function passfail($x, $y, $z){
    if ($x >= 33 && $y >= 33 && $z >=33) {
        $total = add($x, $y, $z);
        $avg = avg($total);
        return "PASS, totalNumber: $total, Average: $avg";
    }
    else{
        return "FAIL";
    }
}

$sam = passfail(45.50, 73, 75);
$ram = add(40, 75);

// echo "<h2> sam : $sam</h2>";
// echo "<h2>Obtain number by ram is $ram</h2>";



function abcd(int $a, int $b):int {
    return ($a - $b);
}


var_dump( abcd(10, 2));


$nam = (int) 15.6;

var_dump($nam);


?>