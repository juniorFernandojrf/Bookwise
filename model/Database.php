<?php

class DB
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=bookwise;charset=utf8mb4", "root", "");
    }

    public function livros($pesquisa = '')
    {
        $prepare = $this->db->prepare("SELECT * FROM livros WHERE titulo like :pesquisa");
        $prepare->bindValue('pesquisa', "%pesquisa%");
        $prepare->setFetchMode(PDO::FETCH_CLASS, livro::class);
        $prepare->execute();

       return $prepare->fetchAll();

    }

    public function livro($id)
    {
        $prepare = $this->db->prepare("SELECT * FROM livros WHERE id = $id");
        $prepare->bindValue('id', $id);
        $prepare->setFetchMode(PDO::FETCH_CLASS, livro::class);
        $prepare->execute();

       return $prepare->fetch();
    }
}
