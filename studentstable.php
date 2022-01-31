<?php
$students = [
['name'=>'username', 
'mail'=>'karthi@gmail.com',
'phone'=>'	7305477760', 
'Enrlnbr'=>'1234567305477760',
'Addate'=>'08-Dec,2021'],

['name'=>'username', 
'mail'=>'karthi@gmail.com',
'phone'=>'	7305477760', 
'Enrlnbr'=>'1234567305477760',
'Addate'=>'08-Dec,2021'],

['name'=>'username', 
'mail'=>'karthi@gmail.com',
'phone'=>'	7305477760', 
'Enrlnbr'=>'1234567305477760',
'Addate'=>'08-Dec,2021'],

['name'=>'username', 
'mail'=>'karthi@gmail.com',
'phone'=>'	7305477760', 
'Enrlnbr'=>'1234567305477760',
'Addate'=>'08-Dec,2021'],

['name'=>'username', 
'mail'=>'karthi@gmail.com',
'phone'=>'	7305477760', 
'Enrlnbr'=>'1234567305477760',
'Addate'=>'08-Dec,2021']

];

$data= json_encode($students);
file_put_contents("students.json");

?>
