<?php

// $a = 1;
// echo "<ul>";
// while ($a <= 10) {
//     if($a%2==0){
//         echo "<li>$a - even</li>";
//     }
//     else{
//         echo "<li>$a - odd</li>";
//     }
//     $a++;
// }
// echo "</ul>";

$nums = [11, 23, 10, 42, 52, 71, 20];
$a = 0;
while ($a < count($nums)) {
    if ($nums[$a]%5 == 0) {
        $a++;
        continue;
        // break;
    }
    echo $nums[$a]."<br>";
    $a++;
}

?>