<?php

class Usuario

{
    private $id;
    private $nomeUsuario;
    private $dataNascimentoUsuario;
    private $emailUsuario;
    private $telefoneUsuario;
    private $senhaUsuario;


public function __construct($id, $nomeUsuario,$dataNascimentoUsuario,
                            $emailUsuario,$telefoneUsuario,$senhaUsuario)
{

    $this->id = $id;
    $this->nomeUsuario = $nomeUsuario;
    $this->dataNascimentoUsuario = $dataNascimentoUsuario;
    $this->emailUsuario = $emailUsuario;
    $this->telefoneUsuario = $telefoneUsuario;
    $this->senhaUsuario = $senhaUsuario;

}      

public function getId(){return $this->id;}
public function getNome(){return $this->nomeUsuario;}
public function getDataNascimento(){return $this->dataNascimentoUsuario;}
public function getEmailUsuario(){return $this->emailUsuario;}
public function getTelefoneUsuario() {return $this->telefoneUsuario;}
public function getSenhaUsuario(){return $this->senhaUsuario;}

public function setId($id) {$this->id = $id;}
public function setNome($nomeUsuario) {$this->nomeUsuario = $nomeUsuario;}
public function setDataNascimento($dataNascimentoUsuario) {$this->dataNascimentoUsuario = $dataNascimentoUsuario;}
public function setEmailUsuario($emailUsuario) {$this->emailUsuario = $emailUsuario;}
public function setTelefoneUsuario($telefoneUsuario) {$this->telefoneUsuario = $telefoneUsuario;}
public function setSenhaUsuario($senhaUsuario) {$this->senhaUsuario = $senhaUsuario;}

}