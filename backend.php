<?php
if (isset($_GET["id"])) {
    $id = intval($_GET["id"]); 
    $url = "https://jsonplaceholder.typicode.com/posts/" . $id;

    $response = file_get_contents($url);
    
    if ($response) {
        header("Content-Type: application/json");
        echo $response;
    } else {
        echo json_encode(["error" => "No se encontró la publicación"]);
    }
} else {
    echo json_encode(["error" => "ID no proporcionado"]);
}

