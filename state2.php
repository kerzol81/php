<?php
    if(empty($_GET['state'])){
        print('State wasnt set');
        exit;
    }else if (filter_input(INPUT_GET, 'state', FILTER_SANITIZE_STRING)){
        //$state = $_GET['state'];
        print('<p>You live in ' . $_GET['state'] . '</p>');
    }        
?>
