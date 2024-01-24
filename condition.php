<?php

$mrp = 12000;

if ($mrp <= 10000) {
    $dis = 10;
}
elseif($mrp <= 20000){
    $dis = 12;
}
else{
    $dis = 15;
}

$off = $mrp*$dis/100;
if ($off > 10000) {
    $off = 10000;
}

$pay = $mrp - $off;

echo "total-price: $mrp, dis: $dis% , Off-price: $off, net-amount: ". number_format($pay, 2);

?>