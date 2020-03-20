<?php
require_once 'core/bootstrap.php';

$database = $app['database'];
if (isset($_GET['submit-payment'])) {
    $database->insert(
    'payment',
    [
        'Name' => $_GET['name'],
        'Payment_Gateway' => $_GET['payment-option'],
        'Card_Number' => $_GET['card-number'],
        'Amount' => $_GET['amount'],
        'CVC' => $_GET['cvc']
    ]
);
}