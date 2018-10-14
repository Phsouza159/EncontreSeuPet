<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author FAMILY
 */
class Usuario {
    
    private $Nome;
    private $Sobrenome;
    private $Usuario;
    private $Login;
    private $Senha;
    private $Telefone;
    private $Endereco;
    private $Sexo;
    private $DataNascimento;
    
    function getNome() {
        return $this->Nome;
    }

    function getSobrenome() {
        return $this->Sobrenome;
    }

    function getUsuario() {
        return $this->Usuario;
    }

    function getLogin() {
        return $this->Login;
    }

    function getSenha() {
        return $this->Senha;
    }


    function getTelefone() {
        return $this->Telefone;
    }

    function getEndereco() {
        return $this->Endereco;
    }

    function getSexo() {
        return $this->Sexo;
    }

    function getDataNascimento() {
        return $this->DataNascimento;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSobrenome($Sobrenome) {
        $this->Sobrenome = $Sobrenome;
    }

    function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    function setLogin($Login) {
        $this->Login = $Login;
    }

    function setSenha($Senha) {
        $this->Senha = $Senha;
    }


    function setTelefone($Telefone) {
        $this->Telefone = $Telefone;
    }

    function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }

    function setSexo($Sexo) {
        $this->Sexo = $Sexo;
    }

    function setDataNascimento($DataNascimento) {
        $this->DataNascimento = $DataNascimento;
    }



}
