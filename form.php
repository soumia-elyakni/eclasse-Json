<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3a3f417346.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="main.css">
    
</head>

<body>

<h1 class="text-center text-secondary mt-3">Students informations :</h1>
<h2 class="text-center text-primary">Saisissez les informations de l'apprenant</h2>
<form class="mt-5 w-75 m-auto" action="studentstable.php" method="post" >
            
            <label for="Name">
              <span>Name :</span>
            </label>
            <input type="text" name="Name" class="w-100 p-1 mt-2">
          
            <label for="mail">
              <span>Email :</span>
            </label>
            <input type="text"  name="mail" class="w-100 p-1 mt-2">
    
            <label for="Phone">
                <span>Phone :</span>
            </label>
            <input type="text"  name="Phone" class="w-100 p-1 mt-2">

            <label for="ErN">
                <span>Eroll Number :</span>
            </label>
            <input type="text"  name="ErN" class="w-100 p-1 mt-2">

            <label for="Addate">
                <span>Date of admission :</span>
            </label>
            <input type="date"  name="Addate" class="w-100 p-1 mt-2">

              
    
            <input type="submit" value="send" class="btn btn-info w-100 mt-4"><a href="" class="text-white text-decoration-none"></a>

</body>