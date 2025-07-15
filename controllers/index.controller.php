<?php

require('model/dados.php');

view('home', [
    "livros" => $livros
]);
