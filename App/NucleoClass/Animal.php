<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Animal
 *
 * @author FAMILY
 */
class Animal {
    
    private $id;
    private $idDono;
    private $NomePet;
    private $PortePet;
    private $RacaPet;
    private $CorPet;
    private $SexoPet;
    private $PesoPet;
    private $Idadepet;
    private $NomeDono;
    private $Localização;
    private $FotoPet;
    
    public function __construct(
                   $NomePet = null
                 , $PortePet = null
                 , $RacaPet = null
                 , $CorPet = null
                 , $SexoPet = null
                 , $PesoPet = null
                 , $Idadepet = null
                 , $NomeDono = null
                 , $Localização = null
                 , $FotoPet = null)
    {
        $this->setNomePet($NomePet);
        $this->setPortePet($PortePet);
        $this->setRacaPet($RacaPet);
        $this->setCorPet($CorPet);
        $this->setSexoPet($SexoPet);
        $this->setPesoPet($PesoPet);
        $this->setIdadepet($Idadepet);
        $this->setNomeDono($NomeDono);
        $this->setLocalização($Localização);
        $this->setFotoPet($FotoPet);
    }
    
    function getNomePet() {
        return $this->NomePet;
    }

    function getPortePet() {
        return $this->PortePet;
    }

    function getRacaPet() {
        return $this->RacaPet;
    }

    function getCorPet() {
        return $this->CorPet;
    }

    function getSexoPet() {
        return $this->SexoPet;
    }

    function getPesoPet() {
        return $this->PesoPet;
    }

    function getIdadepet() {
        return $this->Idadepet;
    }

    function getNomeDono() {
        return $this->NomeDono;
    }

    function getLocalização() {
        return $this->Localização;
    }

    function getFotoPet() {
        return $this->FotoPet;
    }

    function setNomePet($NomePet) {
        $this->NomePet = $NomePet;
    }

    function setPortePet($PortePet) {
        $this->PortePet = $PortePet;
    }

    function setRacaPet($RacaPet) {
        $this->RacaPet = $RacaPet;
    }

    function setCorPet($CorPet) {
        $this->CorPet = $CorPet;
    }

    function setSexoPet($SexoPet) {
        $this->SexoPet = bindec($SexoPet);       
    }

    function setPesoPet($PesoPet) {
        $this->PesoPet = $PesoPet;
    }

    function setIdadepet($Idadepet) {
        $this->Idadepet = $Idadepet;
    }

    function setNomeDono($NomeDono) {
        $this->NomeDono = $NomeDono;
    }

    function setLocalização($Localização) {
        $this->Localização = $Localização;
    }

    function setFotoPet($FotoPet) {
        $this->FotoPet = $FotoPet;
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }
    
    function setIdDono($idDono) {
       $this->idDono = $idDono;
    }

    function getIdDono() {
        return $this->idDono;
    }
}
