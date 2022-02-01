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
 'Addate'=>'08-Dec,2021'],

 ['name'=>'username', 
 'mail'=>'karthi@gmail.com',
 'phone'=>'	7305477760', 
 'Enrlnbr'=>'1234567305477760',
 'Addate'=>'08-Dec,2021'],

 ];


 $data= json_encode($students);
file_put_contents("students.json",$data);



/***********Form************/


// $name = $_POST ['Name'];
// $mail = $_POST ['mail'];
// $phone = $_POST ['Phone'];
// $ernbr = $_POST ['ErN'];
// $addate = $_POST ['Addate'];



// echo "name : " .$name. "<br>";
// echo "mail : " .$mail. "<br>";
// echo "Phone :" .$phone. "<br>";
// echo "Eroll Number : " .$ernbr. "<br>";
// echo "Date :" .$addate. "<br>";



/****************************test***********************/






// $tabJson= file_get_contents("students.json");
// $students=json_decode($tabJson);

// foreach($students as $key);
?>
