<?php

include_once 'config/database.php';
include_once 'entity/perguntasCards.php';

class PerguntasDAO{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getById($id){
        try{
            $sql = "SELECT * FROM imagens_cards WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $perguntas = $stmt->fetch(PDO::FETCH_ASSOC);
            return $perguntas ? new PerguntaCard ($perguntas['id'], ['imagem']):null;
        }catch (PDOException $e){
            return null;
        }
    }

    public function getAll(){
        try{
            $sql = "SELECT * FROM imagens_cards";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $perguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function($perguntas){
                return new PerguntaCard($perguntas['id'],
                $perguntas['imagem']);
            }, $perguntas);

        }catch (PDOException $e){
            return [];
        }
    }


    public function create($perguntas){
        try{
            $sql = "INSERT INTO imagens_cards(imagem) VALUES (:imagem)";
            
            $stmt = $this->db->prepare($sql);

            $imagem = $perguntas->getImagem();

            $stmt->bindParam(':imagem',$imagem);

            $stmt->execute();

            return true;
        }catch (PDOException $e){
            return false;
        }
    }
}

?>