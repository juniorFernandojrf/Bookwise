<?php

class DB
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=bookwise;charset=utf8mb4", "root", "");
    }

    public function livros()
    {
        $pdo = $this->db;

        $stmt = $pdo->query("SELECT * FROM livros");

        $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return array_map( fn($item) => Livro::make($item), $itens);

    }

    public function livro($id)
    {
        $pdo = $this->db;

        $stmt = $pdo->query("SELECT * FROM livros WHERE id = $id");

        $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return array_map( fn($item) => Livro::make($item), $itens)[0];
    }
}
