<?php
require_once 'controllers/functions/ReusableFunctions.php';
require_once 'core/bootstrap.php';

$database = $app['database'];
?>
<div style="overflow-x:auto;">
<table>
<th>Sr. No</th>
<th>Name</th>
<th>Payment Gateway</th>
<th>Card Number</th>
<th>Amount</th>
    <?php
        $payment_array = json_decode(json_encode($database->selectAll('payment')),true);
        if (! empty($payment_array)) {
            $length = countArrayElements($payment_array);
            for ($i=0; $i < $length; $i++) {
                $rows = $payment_array[$i];
                echo "<tr>";
                foreach ($rows as $column => $entries) { 
                   switch ($column) {
                       case 'Sr_No':
                           echo "<td>{$entries}</td>";
                           break;
                       case 'Name':
                           echo "<td>{$entries}</td>";
                           break;
                       case 'Payment_Gateway':
                           echo "<td>{$entries}</td>";
                           break;
                       case 'Card_Number':
                           $hidden_card_number = hideStarting12Digits($entries);
                           echo "<td>$hidden_card_number</td>";
                            break;
                       case 'Amount':
                           echo "<td>Rs. {$entries}</td>";
                           break;
                   }
               }
               echo "</tr>";
            }    
        }
        
    ?>
</table>
</div>