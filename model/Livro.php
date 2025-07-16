<?php

class Livro
{
    public $id;
    public $titulo;
    public $descricao;
    public $autor;
    public $ano;

    public static function make($item)
    {
        $livro = new self();
        $livro->id        = $item['id'];
        $livro->titulo    = $item['titulo'];
        $livro->autor     = $item['autor'];
        $livro->descricao = $item['descrcao'];
        $livro->ano       = 2023;

        return $livro;
    }
}
