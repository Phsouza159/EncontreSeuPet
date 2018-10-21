<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author FAMILY
 */
class Post {
 
    private $id;
    private $ativo;
    private $id_dono;
    private $animal;

    private $titulo;
    private $caminho;
    private $descricao;
    private $dtCriacao;
    private $hrCriacao;
    private $dtInativacao;
    private $hrInativacao;
    
    
    public function __construct(
                 $id_dono = null
                 ,$animal = null
                 ,$titulo = null
                 ,$descricao = null
                 ){
        /**
         * Definir quais valore nao podem ser nulos
         */
       try{ 
              $this->ativo = true;
              $this->setId_dono(new Pessoa());
              $this->setAnimal(new Animal());
              $this->setTitulo($titulo);
              $this->setDescricao($descricao);
              $this->setDtCriacao(date("Y/m/d"));
              $this->setHrCriacao(date("h:m:s"));
              $this->setDtInativacao(null);
              $this->setHrInativacao(null);
              $this->setCaminho(null);
          
       }
        catch(Exception $ex)
       {
           ErroController::erroFatal("Erroa ao instanciar a classe POST: " . $ex->getMessage());
       }
    }
    
    function getCaminho() {
        return $this->caminho;
    }

    function setCaminho($caminho) {
        $this->caminho = $caminho;
    }
    
    function getId() {
        return $this->id;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function getId_dono() {
        return $this->id_dono;
    }

    function getAnimal() {
        return $this->animal;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getDtCriacao() {
        return $this->dtCriacao;
    }

    function getHrCriacao() {
        return $this->hrCriacao;
    }

    function getDtInativacao() {
        return $this->dtInativacao;
    }

    function getHrInativacao() {
        return $this->hrInativacao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    function setId_dono($id_dono) {
        $this->id_dono = $id_dono;
    }

    function setAnimal($animal) {
        $this->animal = $animal;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setDtCriacao($dtCriacao) {
        $this->dtCriacao = $dtCriacao;
    }

    function setHrCriacao($hrCriacao) {
        $this->hrCriacao = $hrCriacao;
    }

    function setDtInativacao($dtInativacao) {
        $this->dtInativacao = $dtInativacao;
    }

    function setHrInativacao($hrInativacao) {
        $this->hrInativacao = $hrInativacao;
    }
    
}
