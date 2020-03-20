<script>
//This script help in clearing url after form submit to avoid resubmit on refresh in GET Method.  
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "firstweek");
    }
</script>
<?php


require 'views/firstweek.view.php';