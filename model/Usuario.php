<?php
include_once '../db/Conexao.php';
class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
        
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
//Realizando consulta no banco.
    public function listarTodosUsuarios(){
        $sql = 'SELECT * FROM usuarios';
        $query = conexao :: prepare($sql);
        $query->execute();
        return $query->fetchAll();
        
    }
    
    public function listarUsuarioId($id){
        $sql = 'SELECT * FROM usuarios WHERE id = :id';
        $query = conexao :: prepare($sql);
        $query->bindParam(':id',$id);
        $query->execute();
        return $query->fetch();
        
    }

}
