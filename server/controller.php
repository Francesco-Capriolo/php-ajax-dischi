<?php 
    include_once __DIR__ . '/data.php';

    header('Content-type:application/json');
    echo json_encode([
        'results' => $albums,
        'lenght'=> count($albums),
    ]);

?>