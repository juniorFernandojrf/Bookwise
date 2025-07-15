<?php

require('model/dados.php');

$id = $_REQUEST['id'];

$id        = $_REQUEST['id'];
$filtrados = array_filter($livros, fn($l)=> $l['id'] == $id);
$livros    = array_pop($filtrados);


$view = "livro";

require('view/templates/app.php');
