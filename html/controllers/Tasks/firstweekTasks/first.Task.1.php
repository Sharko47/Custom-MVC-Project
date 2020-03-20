<?php 
require 'controllers/functions/ReusableFunctions.php';  

$array = extractArrayElements($_GET['array']);
?>
    <?php if (isset($_GET['submit'])):?>
        <?php foreach ($array as $value):?>
            <?php if ($value%2==0):?>
                <p id='even'><?= $value?> : Hello World</p>
            <?php else :?>
                <p id='odd'><?= $value?> : Hello World</p>
            <?php endif ?>
        <?php endforeach ?>

    <?php else :?>
        <h5>Please enter some input.</h5>
    <?php endif ?>