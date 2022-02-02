

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payements</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3a3f417346.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="main.css">
</head>
<body class="m-0 p-0 w-100 h-100">
    
    <?php 
    require 'dash.php'
    ?>

    <main>
          <!--avanttable-->

      <section class="nav_bar d-flex align-items-center px-3">

        <h2 class="tabtitle col-11 align-self-center mt-1">Payment Details</h2> 
        <div class="col-1 flex-end ">
            <button style="border: transparent; background: transparent; align-self: center;">
              <img src="images/svg/buttonpay.svg">
            </button>
        </div>
      </section>

          <!--table-->
          
      <section class="mt-5 mx-2">
        <table class="table table-responsive table-striped table-sm">
          <thead class="text-muted" style="background: transparent;">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Payment Schedule</th>
              <th scope="col">Bill Number</th>
              <th scope="col">Amount Paid</th>
              <th scope="col">Balance amount</th>
              <th scope="col">Date</th>
              <th scope="col"></th>
              <td></td>
            </tr>
          </thead>
          <tbody>

          <?php

          $tableJson= file_get_contents("payments.json",);
          $payment= json_decode("$tableJson");

          $index = 0;
          foreach($payment as $row) 
           echo "<tr>
              <td class='pt-3'>$row->name</td>
              <td class='pt-3'>$row->payement</td>
              <td class='pt-3'>$row->Billnbr</td>
              <td class='pt-3'>$row->amountp</td>
              <td class='pt-3'>$row->balan</td>
              <td class='pt-3'>$row->Date</td>
              <td class='pt-3'><i class='fas fa-eye' style='color: turquoise;'></i></td>
            </tr>";

          $index++;
          ?>

          </tbody>
        </table>
    </main>
</body>
</html>