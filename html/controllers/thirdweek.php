<script>
//This script help in clearing url after form submit to avoid resubmit on refresh in GET Method.  
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "thirdweek");
    }
</script>
<?php
require 'views/thirdweek.view.php';

require 'Tasks/thirdweekTasks/third.Task.php';

