<?php
//  session_destroy();
class Payment
{
    public $payment;

    public function __construct()
    {
        if(empty($_SESSION['Post'])){
            $_SESSION['Post'] = array();
        }
        $this->payment = $_SESSION['Post'];    
    }
    public function addNewPayment()
    {
       if(isset($_GET['submit'])){
           array_push($_SESSION['Post'],$_GET);
       }
       
    }
    public function getAllPayments()
    {   
       return $this->payment;
    }

}
//This commented codes works better on form submission.
// function showData($data)
// {
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// }


// if (empty($_SESSION['Post'])) {
//     $_SESSION['Post'] = array();
// }
// if (isset($_GET['submit'])) {
//     array_push($_SESSION['Post'], $_GET);
// }
?>
<div style="overflow-x:auto;">
<table>
<th>Sr. No</th>
<th>Payment Gateway</th>
<th>Card Number</th>
<th>Amount</th>
    <?php

        $newPayment = new Payment;
        $newPayment->addNewPayment();
        if (! empty($newPayment)) {
            $len = count($newPayment->getAllPayments());
            $mypayment = $newPayment->getAllPayments();
            for ($i=1; $i <= $len; $i++) { 
                $array = $mypayment[$i-1];
                echo "<tr>";
                echo "<td>$i</td>";
                foreach ($array as $key => $value) {
                    if ($key == 'amount') {
                        echo "<td>Rs. {$value}</td>";
                    }
                    else if( $key == 'payment-option'){
                        echo "<td>$value</td>";
                    }
                    else if($key == 'card-number'){
                        $hidden_card_number = hideStarting12Digits($value);
                        echo "<td>$hidden_card_number</td>";
                    }
                }
                echo "</tr>";
            }  
        }
    ?>
</table>
</div>
