<?php
/**
 *
 */
class PaymentHistory extends PaymentModel
{

  function get()
  {
    return $this->select("SELECT * FROM payment");
  }

  function add($id,$payMethod,$cardNo,$amount,$name)
  {
    return $this->insert("INSERT INTO `payment` (`Sr_No`, `Payment_Gateway`, `Card_Number`, `Amount`,'Name')
    VALUES (NULL, '$payMethod', '$cardNo', '$amount','$name'");
  }
}
 ?>
