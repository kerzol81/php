<?php
    $fish = array('tuna', 'salmon', 'brass', 'snapper');
    
    sort($fish);
    //rsort($fish);
    //asort($fish);
    
    foreach ($fish as $f){
        print($f . '<br>');
    }
    print('<hr>');

    $data = array('name' => 'zolee', 'city' => 'Budapest', 'age' => 35);

    foreach($data as $k => $v){
        print( $k . ' : ' . $v . '<br>');
    }
?>
