
<?php
$currentPage = 'firstweek';
require('partials/nav_header.php');
?>
<div class="task_1_container">
    <h2>Task No 1</h2>
    <div class="rowForm">
        <form action='' method="get">
        <input type="text" name="array[]" class="col" id="array" placeholder="Enter array with space seperated" required>
        <input type="submit" name="submit" id="name" value="Submit" class="submit-btn">
        </form>
        </div>
<h4>Output: </h4>
    <div class="task_1_output_container">
        <?php require 'controllers/Tasks/firstweekTasks/first.Task.1.php'?>
    </div>
</div>
<div class="task_1_container">
<h2>Task No 2</h2>
    <div class="rowForm">
    <form action='' method="get" style="width: 100%; padding: 10px 5px; margin-left: auto; margin-right: auto; display: inline-block;">
        <input type="text" name="arrayOne[]"  id="arrayOne" placeholder="Enter array with space seperated" class="task_1_arrInput" required>
        <input type="text" name="arrayTwo[]" id="arrayTwo" placeholder="Enter array with space seperated" class="task_1_arrInput" required>
        <input type="submit" name="submit" id="array" value="Submit" class="submit-btn">
    </form>
    </div>
    <?php require 'controllers/Tasks/firstweekTasks/first.Task.2.php'?>
</div>
<div class="task_1_container">
<h2>Task No 3</h2>
<div class="task_1_output_container">
    <div class="rowForm">
        <form action='' method="get">
        <input type="text" name="number" class="col" id="number" placeholder="Enter a number" required>
        <input type="submit"  name="submit" id="number" value="Submit" class="submit-btn">
        </form>
</div>
    <?php require 'controllers/Tasks/firstweekTasks/first.Task.3.php'?>  
</div>
</div>
<div class="task_1_container">
<h2>Task No 4</h2>
<div class="task_1_output_container">
<div class="rowForm">
    <form action='' method="get" style="margin-top:10px;">
        <input type="text" name="string" id="string" placeholder="Enter any sentence" required>
        <input type="submit" name="submit" id="string" value="Submit" class="submit-btn">
    </form>
</div>
    <?php require 'controllers/Tasks/firstweekTasks/first.Task.4.php'?>
</div>
</div>
<?php require('partials/footer.php')?>