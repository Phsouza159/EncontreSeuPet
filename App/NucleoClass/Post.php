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
        $this->SexoPet = $SexoPet;
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


    
}
