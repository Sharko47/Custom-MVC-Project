<?php

require 'controllers/functions/ReusableFunctions.php';

class Person
{
    protected $details_array;

    public function __construct()
    {
        $this->details_array =  $_REQUEST;
    }

    public function getDetails($key)
    {
        return $this->details_array[$key];
    }
}
?>
<?php
$p = new Person;
?>
<div style="overflow-x:auto;">
<table>
    <th>User Details</th>
    <th>Entries</th>
    <tr>
        <td>Name :</td>
        <td><?=$p->getDetails('name')?></td>
    </tr>
    <tr>
        <td>Email Id :</td>
        <td><?=$p->getDetails('email')?></td>
    </tr>
    <tr>
        <td>Gender :</td>
        <td><?=$p->getDetails('gender')?></td>
    </tr>
    <tr>
        <td>Address :</td>
        <td><?=$p->getDetails('address')?></td>
    </tr>
    <tr>
        <td>City :</td>
        <td><?=$p->getDetails('city')?></td>
    </tr>
    <tr>
        <td>Country :</td>
        <td><?=$p->getDetails('country')?></td>
    </tr>
    <tr>
        <th rowspan='<?=countArrayElements($interest_array)?>'>Interest :</th>
            <?php
                $interest_array = extractArrayElements($p->getDetails('interest'));
            ?>
            <?php foreach ($interest_array as $value):?>
                
                <tr>
                <td><?=$value?></td>
                </tr>
            <?php endforeach?>
          
    </tr>
</table>
</div>