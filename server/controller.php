<?php 
    include_once __DIR__ . '/data.php';

    header('Content-type:application/json');
    $genre= $_GET ?  $_GET["genre"]: "";
    if ($genre) {
        echo json_encode([
        'results' => $albums,
        'lenght'=> count($albums),
    ]);
    }else{
        $filter = [];
        foreach ($albums as $value ){
            if($value["genre"] == $genre){
                $filter[]= $value;
            }
        }
        echo json_encode([
        'results' => $filter,
        'lenght'=> count($filter),
    ]);
    }
    
?>