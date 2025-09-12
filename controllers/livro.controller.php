<?php
$id = $_GET['id'] ?? null;

if ($id) {
    $livro = $database->query(
        "SELECT * FROM livros WHERE id = :id",
        Livro::class,
        ['id' => $id]
    )->fetch();

    view('livro', [
        "livro" => $livro
    ]);
} else {
    abort(404);
}
