<?php

$payment = [
    ['name'=>'karthi', 
    'payement'=>'First',
    'Billnbr'=>'00012223', 
    'amountp'=>'DHS 100,000',
    'balan'=>'DHS 500,000',
    'Date'=>'05-Jan, 2022'],

    ['name'=>'karthi', 
    'payement'=>'First',
    'Billnbr'=>'00012223', 
    'amountp'=>'DHS 100,000',
    'balan'=>'DHS 500,000',
    'Date'=>'05-Jan, 2022'],

    ['name'=>'karthi', 
    'payement'=>'First',
    'Billnbr'=>'00012223', 
    'amountp'=>'DHS 100,000',
    'balan'=>'DHS 500,000',
    'Date'=>'05-Jan, 2022'],

    ['name'=>'karthi', 
    'payement'=>'First',
    'Billnbr'=>'00012223', 
    'amountp'=>'DHS 100,000',
    'balan'=>'DHS 500,000',
    'Date'=>'05-Jan, 2022'],

    ['name'=>'karthi', 
    'payement'=>'First',
    'Billnbr'=>'00012223', 
    'amountp'=>'DHS 100,000',
    'balan'=>'DHS 500,000',
    'Date'=>'05-Jan, 2022']

];

$pay = json_encode ("$payment");
file_put_contents("payments.json", $pay);

?>