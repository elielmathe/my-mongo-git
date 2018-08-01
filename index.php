<?php
    echo "Very nice";
    echo "<pre>";
    $db = new Mongo("mongodb://127.0.0.1");
    $cursor = $db -> dbUser -> find;
    
    foreach($cursor as $result){
        print_r($result);
    }