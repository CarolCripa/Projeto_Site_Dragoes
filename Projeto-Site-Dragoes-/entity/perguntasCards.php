<?php

class PerguntaCard

{
    private $id;
    private $imagem;

public function __construct($id, $imagem)
{

    $this->id = $id;
    $this->imagem = $imagem;

}      

public function getId(){return $this->id;}
public function getImagem(){return $this->imagem;}

public function setId($id) {$this->id = $id;}
public function setImagem($imagem) {$this->imagem = $imagem;}

}