<script>
//This script help in clearing url after form submit to avoid resubmit on refresh in GET Method.  
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "secondweek");
    }
</script>
<?php

require 'views/secondweek.view.php';


if(isset($_GET['clear'])){
    clear();
}
function clear(){
    session_destroy();
}