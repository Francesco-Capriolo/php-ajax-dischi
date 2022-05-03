<?php
    include_once __DIR__ . '/../database/data.php';

    $genres = [];

    foreach($albums as $disc){
        if (!in_array(strtolower($disc['genre']), $genres)){
            $genres[] = strtolower($disc['genre']);
        }
    }

    header('Content-Type: application/json');
    echo json_encode($genres);
?>