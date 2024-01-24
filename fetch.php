<?php


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
        <th>Sno</th>
        <th>Topic</th>
        <th>Description</th>
    </tr>

    <?php
    $conn = mysqli_connect('localhost','root','','mwf_2');
    $sql = 'select * from notes';
    $res = mysqli_query($conn, $sql);

        $no = 1;
        while ($row = mysqli_fetch_assoc($res)) {
            # code...
            
            $topic = $row['topic'];
            $desc = $row['description'];
            echo "<tr>
                    <td>$no</td>
                    <td>$topic</td>
                    <td>$desc</td>
                </tr>";
            $no++;
        }

     
    ?>

    
</table>

<h1>this is a test line</h1>
    
</body>
</html>