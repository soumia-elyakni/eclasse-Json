<?php

    //fetch data from json
    $data = file_get_contents('students.json');
    $data = json_decode($data,true);

     //get the index
     $email = $_GET['index'];
     $index = getIndexByEmail($email, $data);


    //delete the row with the index
    unset($data[$index]);
 
    //encode back to json
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('students.json', $data);
 
    header('location: stud.php');

    function getIndexByEmail($mail, $data){
        $id = null;
        foreach($data as $index=>$user){
            if($user['mail'] === $mail)
                $id = $index;
        }
        return $id;
    }
?>