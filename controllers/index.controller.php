<?php
$pesquisa = $_REQUEST['pesquisar'] ?? '';

$livros = $database->query(
    "SELECT * FROM livros WHERE titulo like :filtro",
    Livro::class,
    ['filtro' => "%$pesquisa%"]
)->fetchAll();

view('home', [
    "livros" => $livros
]);