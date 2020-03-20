
<?php
$currentPage = 'thirdweek';
require ('partials/nav_header.php');
?>
<h1 class="payment">Payment Portal</h1>
<div class="form-container payment">
    <h4 class="task-no-text">Enter Payment Details</h4>
    
<form action="" method="get" name="form1">
    <div class="rowForm">
    <label for="payment-mode">Select Payment Mode :</label>
    <select name="payment-option" id="payment-option" class="select-option">
        <option value="Paypal">Paypal</option>
        <option value="PayTm">PayTm</option>
        <option value="Stripe">Stripe</option>
        <option value="PayU">PayU</option>
    </select>
    <label for="name">Enter Name :</label>
    <input type="text" name="name" id="name" title="Enter your name" placeholder="Enter your name as per the card" required>

    <label for="card-number">Card Number :</label>
    <input type="text" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" placeholder="xxxx xxxx xxxx xxxx" maxlength="19" name="card-number" id="card-number" required>

    <label for="expiry-date">Enter Card Expiry & Year :</label>
    <input type="month" name="expiry-month" id="expiry-month" title="Select month & year mentioned on card" >

    <!--<input type="number" name="expiry-year" id="expiry-year" min="1900" max="2099" step="1" value="2020" required>-->

    <label for="cvc">Enter CVC :</label>
    <input type="password" name="cvc" id="cvc" min="100" max="999" maxlength="3" title="Enter 3-digit CVC">

    <label for="amount">Enter Amount :</label>
    <input type="number" name="amount" id="amount"title="Enter amount" required>

    <input type="submit" name="submit-payment" value="Pay Now" class="submit-btn">
    </div>
    </form>
</div>
<div class="secondweek-output-container">
    <h4 class="task-no-text">Payment Details</h4>
    <?php require 'controllers/Tasks/thirdweekTasks/PaymentModel.php';?>
</div>
<?php require ('partials/footer.php')?>


