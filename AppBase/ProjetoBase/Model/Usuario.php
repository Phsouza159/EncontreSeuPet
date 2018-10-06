<?php
class Usuario {
    
    private $id;
    private $nome;
    private $usuario;
    private $login;
    private $perfil;
    private $senha;
   
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function getNome() {
        return $this->nome;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }


}
