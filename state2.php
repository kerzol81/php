<?php
    if(empty($_GET['state'])){
        print('State wasnt set');
        exit;
    }else if (filter_input(INPUT_GET, 'state', FILTER_SANITIZE_STRING)){
        print('yeppp');
    }        
?>
