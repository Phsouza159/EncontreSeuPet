<?php

/*
  ID INT NOT NULL AUTO_INCREMENT,
  TipoPost INT NOT NULL,
  Titulo VARCHAR(45) NOT NULL,
  DtCriacao DATE NOT NULL,
  HrCriacao TIME(6) NOT NULL,
  Ativo INT NOT NULL,
  CaminhoPost VARCHAR(45) NOT NULL,
 */
class PostDTO {
 
    private $Id;
    private $TipoPost;
    private $Titulo;
    private $DtCriacao;
    private $HrCriacao;
    private $Ativo;
    private $CaminhoPost;
    private $LOCALIZACAO;
    
    public function __construct(
                                $id = null, 
                                $TipoPost = null,
                                $Titulo = null, 
                                $DtCriacao = null,
                                $HrCriacao = null,
                                $Ativo = null,
                                $CaminhoPost = null,
                                $LOCALIZACAO = null)
                          
    {
        $this->setId($id);
        $this->setTipoPost($TipoPost);
        $this->setTitulo($Titulo); 
        $this->setDtCriacao($DtCriacao);
        $this->setHrCriacao($HrCriacao);
        $this->setAtivo($Ativo);
        $this->setCaminhoPost($CaminhoPost);
        $this->setLocalizacao($LOCALIZACAO);
      
    }
    
    function  getLocalizacao(){
        return $this->LOCALIZACAO;
    }
    
    function setLocalizacao($localizacao)
    {
        $this->LOCALIZACAO = $localizacao; 
    }

    function getId() {
        return $this->Id;
    }

    function getTipoPost() {
        return $this->TipoPost;
    }

    function getTitulo() {
        return $this->Titulo;
    }

    function getDtCriacao() {
        return $this->DtCriacao;
    }

    function getHrCriacao() {
        return $this->HrCriacao;
    }

    function getAtivo() {
        return $this->Ativo;
    }

    function getCaminhoPost() {
        return $this->CaminhoPost;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setTipoPost($TipoPost) {
        $this->TipoPost = $TipoPost;
    }

    function setTitulo($Titulo) {
        $this->Titulo = $Titulo;
    }

    function setDtCriacao($DtCriacao) {
        $this->DtCriacao = $DtCriacao;
    }

    function setHrCriacao($HrCriacao) {
        $this->HrCriacao = $HrCriacao;
    }

    function setAtivo($Ativo) {
        $this->Ativo = $Ativo;
    }

    function setCaminhoPost($CaminhoPost) {
        $this->CaminhoPost = $CaminhoPost;
    }
}

