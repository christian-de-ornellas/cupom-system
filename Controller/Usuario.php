<?php

/**
 * ELETRONIC INOVANDO SEMPRE
 *
 * @Christian de Ornellas Possidonio | Analista & desenvolvedor 
 */
require_once 'Crud.php';

class Usuario extends Crud {

    protected $table = 'usuarios';
    private $nome;
    private $login;
    private $senha;
    private $perfil;

 
    
    function getNome() {
        return $this->nome;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

        
    
    public function insert() {
        
        $sql ="INSERT INTO $this->table (nome,login,senha,perfil)VALUES(:nome, :login, :senha, :perfil)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':login', $this->login);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':perfil', $this->perfil);
        return $stmt->execute();
        
    }

    public function update($id) {
        
    }

}
