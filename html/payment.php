<?php

    $paymode_mode = $_POST['payment-option'];
    $card_number = $_POST['card-number'];
    $expiry_month = $_POST['expiry-month'];
    $cvc = $_POST['cvc'];
    $amount = $_POST['amount'];
    
    echo "<p class='textField'>$paymode_mode</p>";
    echo "<p class='textField'>$card_number</p>";
    echo "<p class='textField'>$expiry_month</p>";
    echo "<p class='textField'>$cvc</p>";
    echo "<p class='textField'>$amount</p>";
?>
    <div style="overflow-x:auto;">
    <table>
        <th>Serial Number</th>
        <th>Payment Gateway</th>
        <th>Card Number</th>
        <th>Amount</th>
    </table>
    </div>