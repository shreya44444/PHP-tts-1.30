<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['myname'];
    $dob = $_POST['dob'];
    $mail = $_POST['mail'];
    $no = $_POST['no'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $category = $_POST['category'];
    $ID = $_POST['id'];
    $ID_no = $_POST['idno'];
    $add_1 = $_POST['add_1'];
    $add_2 = $_POST['add_2'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $dist = $_POST['dist'];
    $po = $_POST['po'];
    $pin = $_POST['pin'];
    echo "
    <table border='1'>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td>$name</td>
        </tr>
        <tr>
            <td>DOB</td>
            <td>$dob</td>
        </tr>
        <tr>
            <td>Mail</td>
            <td>$mail</td>
        </tr>
        <tr>
            <td>Mobile No</td>
            <td>$no</td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>$gender</td>
        </tr>
        <tr>
            <td>Religion</td>
            <td>$religion</td>
        </tr>
        <tr>
            <td>Category</td>
            <td>$category</td>
        </tr>
        <tr>
            <td>ID</td>
            <td>$ID</td>
        </tr>
        <tr>
            <td>ID_no</td>
            <td>$ID_no</td>
        </tr>
        <tr>
            <td>ADD_1</td>
            <td>$add_1</td>
        </tr>
        <tr>
            <td>ADD_2</td>
            <td>$add_2</td>
        </tr>
        <tr>
            <td>STATE</td>
            <td>$state</td>
        </tr>
        <tr>
            <td>CITY</td>
            <td>$city</td>
        </tr>
        <tr>
            <td>DIST</td>
            <td>$dist</td>
        </tr>
        <tr>
            <td>PO</td>
            <td>$po</td>
        </tr>
        <tr>
            <td>PIN</td>
            <td>$pin</td>
        </tr>
    </table>
        ";

} else {
    header('location:form.html');
}



?>

