<?php

include_once __DIR__ . "/../Model/PessoaDAO.php";
/**
  
 */
class PessoaDTO {
    
    private $id; 
    private $Nome; 
    private $Sobrenome; 
    private $Sexo;
    /**
     * 
     */
    private $DtNascimento;
    private $Ativo;
    private $POST;
    private $TipoPessoa;
    /* TIPO PESSOA
     * 1 = usuario comum
     * 2 = patrocinador
     * 3 = admin
     */
    private $Telefone;
    private $Endereco;
    private $Acesso;
    private $ANUNCIO;
   
    private $PessoaDAO;
    
    public function __construct(
                                $id = null, 
                                $Nome = null,
                                $Sobrenome = null, 
                                $Sexo = null,
                                $DtNascimento = null,
                                $Ativo = null,
                                $POST = null,
                                $TipoPessoa = null,
                                $Telefone = null,
                                $Endereco = null,
                                $Acesso = null,
                                $ANUNCIO = null)
    {
        $this->setId($id);
        $this->setNome($Nome);
        $this->setSobrenome($Sobrenome); 
        $this->setSexo($Sexo);
        $this->setDtNascimento($DtNascimento);
        $this->setAtivo($Ativo);
        $this->setPOST($POST);
        $this->setTipoPessoa($TipoPessoa);
        $this->setTelefone($Telefone);
        $this->setEndereco($Endereco);
        $this->setAcesso($Acesso);
        $this->setANUNCIO($ANUNCIO);
    }
    
    
   public function CadastrarUsuario($Con)
   {
       print_r($this);
      return PessoaDAO::SetNovoUsuario($this , $Con);
   }
   
   public function EditarUsuario()
   {
      // return PessoaDAO::
   }
   
   public function Login()
   {
       
   }
   
   public function Logoff()
   {
       
   }
           
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->Nome;
    }

    function getSobrenome() {
        return $this->Sobrenome;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getDtNascimento() {
        return $this->DtNascimento;
    }

    function getAtivo() {
        return $this->Ativo;
    }

    function getPOST() {
        return $this->POST;
    }

    function getTipoPessoa() {
        return $this->TipoPessoa;
    }

    function getTelefone() {
        return $this->Telefone;
    }

    function getEndereco() {
        return $this->Endereco;
    }

    function getAcesso() {
        return $this->Acesso;
    }

    function getANUNCIO() {
        return $this->ANUNCIO;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setSobrenome($Sobrenome) {
        $this->Sobrenome = $Sobrenome;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setDtNascimento($DtNascimento) {
        $this->DtNascimento = $DtNascimento;
    }

    function setAtivo($Ativo) {
        $this->Ativo = $Ativo;
    }

    function setPOST($POST) {
        $this->POST = $POST;
    }

    function setTipoPessoa($TipoPessoa) {
        $this->TipoPessoa = $TipoPessoa;
    }

    function setTelefone($Telefone) {
        $this->Telefone = $Telefone;
    }

    function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }

    function setAcesso($Acesso) {
        $this->Acesso = $Acesso;
    }

    function setANUNCIO($ANUNCIO) {
        $this->ANUNCIO = $ANUNCIO;
    }


    
    
}
