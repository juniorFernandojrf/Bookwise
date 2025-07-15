<?php

// $controller = 'index';

// dd($_SERVER);

if (isset($_SERVER['REQUEST_URI'])) {

    $requestUri = $_SERVER['SCRIPT_NAME'];
    
    // 1. Usa basename para pegar apenas o arquivo final
    $arquivo = basename($requestUri); // retorna "index.php"
    
    // 2. Remove a extensão com pathinfo
    $controller = pathinfo($arquivo, PATHINFO_FILENAME); // retorna "index"
}

if (! file_exists("controllers/{$controller}.controller.php")) {
    http_response_code(404);
    echo "Pagina não encontrada";
    die();
}

require("controllers/{$controller}.controller.php");
