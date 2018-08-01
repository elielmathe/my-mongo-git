<?php
    echo "Very nice";
    echo "<h1>This is cool</h1>";
    echo "<pre>";
    echo "\n";
    
    $db = new Mongo("mongodb://127.0.0.1");
    $cursor = $db -> dbUser -> find;
    
    foreach($cursor as $result){
        print_r($result);
    }
