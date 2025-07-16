<?php

// require "model/Database.php";

$db     = new DB();
$livros = $db->livros();

view('home', [
    "livros" => $livros
]);
