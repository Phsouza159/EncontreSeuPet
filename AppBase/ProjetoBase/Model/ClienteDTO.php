<?php
require_once 'UsuarioDTO.php';
class ClienteDTO extends UsuarioDTO {
    private $enderecoEntrega;
    private $idCliente;
    
    
    public function getIdCliente() {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }
    
    public function getEnderecoEntrega() {
        return $this->enderecoEntrega;
    }

    public function setEnderecoEntrega($enderecoEntrega) {
        $this->enderecoEntrega = $enderecoEntrega;
    }


}
