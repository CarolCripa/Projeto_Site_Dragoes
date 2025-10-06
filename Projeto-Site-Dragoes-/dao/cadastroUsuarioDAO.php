<?php

include_once 'config/database.php';
include_once 'entity/cadastroUsuario.php';

class UsuarioDAO{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getById($id){
        try{
            $sql = "SELECT * FROM info_usuarios WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario ? new Usuario ($usuario['id'], 
                                           $usuario['nome'],
                                           $usuario['data_nascimento'],
                                           $usuario['email'],
                                           $usuario['telefone'],
                                           $usuario['senha']):null;
        }catch (PDOException $e){
            return null;
        }
    }

    public function getAll(){
        try{
            $sql = "SELECT * FROM info_usuarios";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function($usuario){
                return new Usuario($usuario['id'],
                $usuario['nome'],
                $usuario['data_nascimento'],
                $usuario['email'],
                $usuario['telefone'],
                $usuario['senha']);
            }, $usuario);

        }catch (PDOException $e){
            return [];
        }
    }


    public function create($usuario){
        try{
            $sql = "INSERT INTO info_usuarios(nome,data_nascimento,email,telefone,senha)
                    VALUES (:nome,:data_nascimento,:email,:telefone,:senha)";
            
            $stmt = $this->db->prepare($sql);

            $nomeUsuario = $usuario->getNome();
            $dataNascimentoUsuario = $usuario->getDataNascimento();
            $emailUsuario = $usuario->getEmailUsuario();
            $telefoneUsuario = $usuario->getTelefoneUsuario();
            $senhaUsuario = $usuario->getSenhaUsuario();

            $stmt->bindParam(':nome', $nomeUsuario);
            $stmt->bindParam(':data_nascimento',$dataNascimentoUsuario);
            $stmt->bindParam(':email',$emailUsuario);
            $stmt->bindParam(':telefone', $telefoneUsuario);
            $stmt->bindParam(':senha',$senhaUsuario);
            $stmt->execute();

            return true;
        }catch (PDOException $e){
            return false;
        }
    }
}

?>