<?php
require_once 'UsuarioDTO.php';
class AdministradorDTO  extends UsuarioDTO{
    private $matricula;
    private $idAdministrador;
    
    public function getIdAdministrador() {
        return $this->idAdministrador;
    }

    public function setIdAdministrador($idAdministrador) {
        $this->idAdministrador = $idAdministrador;
    }
    
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }


}
