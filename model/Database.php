<?php


class DB
{
    public function Livros()
    {
        $dsn = "mysql:host=localhost;dbname=bookwise;charset=utf8mb4";
        $user = "root";
        $pass = "";

        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->query("SELECT * FROM livros");

        $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $returno = [];

        foreach ($itens as $item) {
            $livro = new Livro();
            $livro->id        = $item['id'];
            $livro->titulo    = $item['titulo'];
            $livro->descricao = $item['descrcao'];
            $livro->autor     = $item['autor'];
            $livro->ano       = 2023;

            $returno[] = $livro;
        }
        
        return $returno;
    }
}
