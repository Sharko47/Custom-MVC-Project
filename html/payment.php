<?php

    class Payment
    {
        private $paymode_mode;
        private $card_number;
        private $expiry_month;
        private $cvc;
        private $amount;

        /**
         * Get the value of paymode_mode
         */
        public function getPaymode_mode()
        {
            return $this->paymode_mode;
        }

        /**
         * Set the value of payment_mode
         *
         * @return  self
         */

        public function setPaymode_mode($paymode_mode)
        {
            $this->paymode_mode = $paymode_mode;

            return $this;
        }

        /**
         * Get the value of card_number
         */
        public function getCard_number()
        {
            return $this->card_number;
        }

        /**
         * Set the value of card_number
         *
         * @return  self
         */
        public function setCard_number($card_number)
        {
            $this->card_number = $card_number;

            return $this;
        }

        /**
         * Get the value of expiry_month
         */
        public function getExpiry_month()
        {
            return $this->expiry_month;
        }

        /**
         * Set the value of expiry_month
         *
         * @return  self
         */
        public function setExpiry_month($expiry_month)
        {
            $this->expiry_month = $expiry_month;

            return $this;
        }

        /**
         * Get the value of cvc
         */
        public function getCvc()
        {
            return $this->cvc;
        }

        /**
         * Set the value of cvc
         *
         * @return  self
         */
        public function setCvc($cvc)
        {
            $this->cvc = $cvc;

            return $this;
        }

        /**
         * Get the value of amount
         */
        public function getAmount()
        {
            return $this->amount;
        }

        /**
         * Set the value of amount
         *
         * @return  self
         */
        public function setAmount($amount)
        {
            $this->amount = $amount;

            return $this;
        }
    }
    $payment = [new Payment()];
    if (isset($_POST['submit'])) {
        for ($i=0; $i < count($payment); $i++) {
            $payment[$i]->setPaymode_mode($_POST['payment-option']);
            $payment[$i]->setCard_number($_POST['card-number']);
            $payment[$i]->setExpiry_month($_POST['expiry-month']);
            $payment[$i]->setCvc($_POST['cvc']);
            $payment[$i]->setAmount($_POST['amount']);
        }
    }
    for ($i=0; $i < count($payment); $i++) {
        echo "<p class='textField'>{$payment[$i]->getPaymode_mode()}</p>";
        echo "<p class='textField'>{$payment[$i]->getCard_number()}</p>";
        echo "<p class='textField'>{$payment[$i]->getExpiry_month()}</p>";
        echo "<p class='textField'>{$payment[$i]->getCvc()}</p>";
        echo "<p class='textField'>{$payment[$i]->getAmount()}</p>";
    }
   
?>
    <div style="overflow-x:auto;">
    <table>
        <th>Serial Number</th>
        
        <th>Payment Gateway</th>
        <th>Card Number</th>
        <th>Amount</th>
    </table>
    </div>