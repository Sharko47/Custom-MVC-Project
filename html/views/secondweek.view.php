<?php
$currentPage = 'secondweek';
require ('partials/nav_header.php');
?>
<h1>This is Second Week</h1>
<div>
<div class="form-container">
    <h4 class="task-no-text">Task No 1</h4>
    <form action="" method="post">
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
            <select id="country" name="country">
            <option value="Australia">Australia</option>
            <option value="Canada">Canada</option>
            <option value="USA">USA</option>
            <option value="India">India</option>
            <option value="China">China</option>
            <option value="Japan">Japan</option>
            </select>

        <label for="interest">Interest</label>
        <input type="text" name="interest" id="interest" placeholder="Enter your interest.." required>
        <div class="terms-option">
        <label for="terms-condition">Accept Terms & Conditions</label>
        <input type="checkbox" name="terms-condition" id="terms-condition" required>
        </div>
        <input type="submit" value="Submit">
    </div>
</form>
</div>
<div class="secondweek-1-output-container">
    <h4 class="task-no-text">Output -> Task No 1</h4>
    <?php require 'register_user.php'?>
</div>
<div class="form-container">
    <h4 class="task-no-text">Task No 2</h4>
    <form action="uploads.php" method="post" enctype="multipart/form-data">
    <label for="upload-file">Click to upload file from your computer</label>
    <input type="file" name="upload-file" id="upload-file">
    <input type="submit" value="Upload Now">
    </form>
    
</div>
<div class="form-container">
    <h4 class="task-no-text">Task No 3</h4>
<form action="" method="post" >
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
    <input type="month" name="expiry-month" id="expiry-month" title="Select month & year mentioned on card" required>

    <!--<input type="number" name="expiry-year" id="expiry-year" min="1900" max="2099" step="1" value="2020" required>-->

    <label for="cvv">Enter CVC :</label>
    <input type="number" name="cvc" id="cvc" min="100" max="999" step="1" title="Enter 3-digit CVC" required>

    <label for="amount">Enter Amount :</label>
    <input type="number" name="amount" id="amount"title="Enter amount">

    <input type="submit" name="submit" value="Pay Now" class="submit-btn">
    </div>

</div>
</form>

<div class="secondweek-1-output-container">
    <h4 class="task-no-text">Output -> Task No 3</h4>
<?php include '/payment.php'; ?>
</div>
</div>
<?php require ('partials/footer.php')?>