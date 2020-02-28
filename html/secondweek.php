<?php
$currentPage = 'secondweek';
include ('nav_header.php');
?>
<h1>This is Second Week</h1>
<div>
<?php include '2_task_1.php';?>
<div class="form-container">
    <h4 id="task_no_text">Task No 1</h4>
<form action="" method="post" >
<div class="container">
    <div class="rowForm">
    <label for="payment-mode">Select Payment Mode :</label>
    <select name="payment-option" id="payment-option" class="select-option">
        <option value="Paypal">Paypal</option>
        <option value="PayTm">PayTm</option>
        <option value="Stripe">Stripe</option>
        <option value="PayU">PayU</option>
    </select>

    <label for="card-number">Card Number :</label>
    <input type="text" placeholder="Enter Card Number" name="card-number" id="card-number" required>

    <label for="expiry-date">Enter Card Expiry & Year :</label>
    <input type="month" name="expiry-month" id="expiry-month" required>

    <!--<input type="number" name="expiry-year" id="expiry-year" min="1900" max="2099" step="1" value="2020" required>-->

    <label for="cvv">Enter CVC :</label>
    <input type="number" name="cvc" id="cvc" min="001" max="999" step="1" required>

    <label for="amount">Enter Amount :</label>
    <input type="number" name="amount" id="amount">

    <input type="submit" value="Pay Now" class="submit-btn">
    </div>

</div>
</form>
</div>
<div class="secondweek-1-output-container">
<?php include 'payment.php'; ?>
</div>
</div>
<?php include ('footer.php')?>