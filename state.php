<?php
    if(empty($_GET['state'])){
        print('State wasnt set');
    }
    
    if(isset($_GET) && array_key_exists('state', $_GET)){
        print($_GET['state']);
    }
?>
