<?php
$currentPage = 'thirdweek';
require ('partials/nav_header.php');
?>
<h1>Payment Portal</h1>
    <form class="" method="post">
      <label for="pay_method">Please select Payment method</label>
      <select class="" id="pay_method" name="pay_method">
        <option value="Paytm">Paytm</option>
        <option value="Paypal">Paypal</option>
        <option value="PayU">PayU</option>
        <option value="Phonepe">Phonepe</option>

      </select><br>
      <label for="card_number">Enter Card No</label>
      <input id="card_number" type="number" name="card_number" value="" required><br>
        <label for="name">Name on card :</label>
      <input id="name" type="text" name="name" value="" required><br>
      <label for="amount">Amount</label>
      <input id="amount" type="number" name="amount" value="" required><br>
      <input type="submit" name="submit" value="Submit">
    </form><br><br>


  <ul>
    <?php
    $query = require 'core/bootstrap.php';
    
    
    $payment = $query->selectAll('payment');
    
    
    dd($payment);

     function dd($data)
     {
         echo "<pre>";
         var_dump($data);
         echo "</pre>";
     }
    ?>

  </ul>

<?php require ('partials/footer.php')?>


