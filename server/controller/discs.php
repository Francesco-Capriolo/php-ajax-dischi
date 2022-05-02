<?php 
    // esporre pubblicamente i dati del db.php
    include_once __DIR__ . '/../database/data.php';

    $discs = [];

    // discs filtra in base al genere

    if (!empty($_GET) && !empty($_GET['genre'])){
        // la stringa richiesta dall'utente via queryString
        $queryGenre = strtolower($_GET['genre']);
        foreach ($albums as $disc){
            $currentGenre = strtolower($disc['genre']);
            if ( $currentGenre == $queryGenre ){
                $discs[] = $disc;
                // array_push($discs, $disc);
            }
        }
    } else {
        $discs = $albums;
    }

    header('Content-Type: application/json');
    echo json_encode($discs);

    /* include_once __DIR__ . './database/data.php';

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
    } */

?>