<?php

$requestUri = $_SERVER['REQUEST_URI'];

// Remove query string (ex: ?id=1)
$requestUri = parse_url($requestUri, PHP_URL_PATH);

// Remove barra inicial e final
$controller = trim($requestUri, '/');

// Se for vazio, definir como 'index'
if ($controller === '') $controller = 'index';


if (! file_exists("controllers/{$controller}.controller.php")) {
    abort(404);
}

require("controllers/{$controller}.controller.php");
