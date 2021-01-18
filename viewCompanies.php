<?php

$dbconnectpdo = new PDO('mysql:host=localhost;dbname=ECF2005_Carrivale', 'root', '');

$sql =  'SELECT * FROM Companies';


$data = '<table><tr>';

foreach  ($dbconnectpdo->query($sql) as $row){
    $data.='<td>'.$row['Name'].'</td>';
    $data.='<td>'.$row['City'].'</td>';
}
$data.= '</tr></table>';

echo $data;