<?php
session_start();
$currentPage = 'secondweek';
require ('partials/nav_header.php');
?>
<h1>This is Second Week</h1>
<div>
<div class="form-container">
    <h4 class="task-no-text">Task No 1</h4>
    <div class="rowForm">
    <form action="" method="get">
    <div class="register-form">
        
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name..">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

        <label for="gender">Gender</label>
        <div class="gender-option">
        <input type="radio" name="gender" id="gender" value="Male"><p>Male</p>
        <input type="radio" name="gender" id="gender" value="Female"><p>Female</p>
        <input type="radio" name="gender" id="gender" value="Others"><p>Others</p>
        </div>

        <label for="address">Address</label>
        <textarea name="address" id="address" cols="30" rows="4" style="resize:none"></textarea>

        <label for="city">City</label>
        <input type="text" name="city" id="city" placeholder="Enter your city...">

        <label for="country">Country</label>
            <select id="country" name="country" class="select-option">
            <option value="Australia">Australia</option>
            <option value="Canada">Canada</option>
            <option value="USA">USA</option>
            <option value="India">India</option>
            <option value="China">China</option>
            <option value="Japan">Japan</option>
            </select>

        <label for="interest">Interest</label>
        <input type="text" name="interest[]" id="interest" placeholder="Enter your interest with space seperated" required>
        <div class="terms-option">
        <label for="terms-condition">Accept Terms & Conditions</label>
        <input type="checkbox" name="terms-condition" id="terms-condition" required>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
    </div>
</form>
</div>
</div>
<div class="secondweek-output-container">
    <h4 class="task-no-text">Output -> Task No 1</h4>
        <?php require 'controllers/Tasks/secondweekTasks/second.Task.1.php'?>
</div>
<div class="form-container">
    <h4 class="task-no-text">Task No 2</h4>
    <form action="controllers/Tasks/secondweekTasks/second.Task.2.php" method="post" enctype="multipart/form-data">
    <label for="upload-file">Click to upload file from your computer</label>
    <input type="file" name="upload-file" id="upload-file" >
    <input type="submit" value="Upload Now" class="submit-btn">
    </form>
    
</div>
<div class="form-container">
    <h4 class="task-no-text">Task No 3</h4>
    
<form action="" method="get" name="form1">
    <div class="rowForm">
    <label for="payment-mode">Select Payment Mode :</label>
    <select name="payment-option" id="payment-option" class="select-option">
        <option value="Paypal">Paypal</option>
        <option value="PayTm">PayTm</option>
        <option value="Stripe">Stripe</option>
        <option value="PayU">PayU</option>
    </select>

    <label for="card-number">Card Number :</label>
    <input type="text" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" placeholder="xxxx xxxx xxxx xxxx" maxlength="19" name="card-number" id="card-number" required>

    <label for="expiry-date">Enter Card Expiry & Year :</label>
    <input type="month" name="expiry-month" id="expiry-month" title="Select month & year mentioned on card" >

    <!--<input type="number" name="expiry-year" id="expiry-year" min="1900" max="2099" step="1" value="2020" required>-->

    <label for="cvv">Enter CVC :</label>
    <input type="number" name="cvc" id="cvc" pattern="[0-9]{3} "min="100" max="999" step="1" title="Enter 3-digit CVC">

    <label for="amount">Enter Amount :</label>
    <input type="number" name="amount" id="amount"title="Enter amount" required>

    <input type="submit" name="submit" value="Pay Now" class="submit-btn">
    </div>
    </form>
</div>


<div class="secondweek-output-container">
    <h4 class="task-no-text">Output -> Task No 3</h4>
    <form action="" method="get">
    <input type="submit" name="clear" value="Delete All Payments" class="submit-btn delete">
    </form>
    
    <?php require 'controllers/Tasks/secondweekTasks/second.Task.3.php'; ?>
</div>
</div>
<?php require ('partials/footer.php')?>