<?php

$name = 'shreya roy';
$name2 = "shreya roy";

$msg = "hello $name";


echo "<h2>$msg</h2>";

$num1 = 15;

$num2 = 12.32;

$num3 = null;

$x = true;

$y = false;

$names = array('sam', 'joy','sita','gita','monoj-');

echo "<ol>";
for ($i=0; $i < count($names); $i++) { 
    echo "<li>".$names[$i]."</li>";
}
echo "</ol>";

echo "<pre>";
print_r($names);
echo "</pre>";

echo $names[1]."<br>";

$details = ['name'=>'shreya','roll'=> 5,'favsub'=>'geography'];

echo $details['favsub']."<br>";

$det = [
    ['name'=>'shreya','roll'=> 5,'favsub'=>'geography'],
    ['name'=>'maitri','roll'=> 1,'favsub'=>'bengali'],
    ['name'=>'arijit','roll'=> 25,'favsub'=>'math'],
    ['name'=>'mintu','roll'=> 17,'favsub'=>'biology'],
    ['name'=>'sowmi','roll'=> 7,'favsub'=>'mathakhowa'],
    ['name'=>'vedika','roll'=> 20,'favsub'=>'computer'],
    ['name'=>'srabona','roll'=> 4,'favsub'=>'geography']
];


echo $det[3]['favsub'];






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Favourite subject</th>
        </tr>
        <?php
        for ($i=0; $i < count($det); $i++) { 
            $row = $det[$i];
            echo '<tr>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['roll'].'</td>
                    <td>'.$row['favsub'].'</td>
                </tr>
                ';
        }


        ?>
        
    </table>
</body>
</html>