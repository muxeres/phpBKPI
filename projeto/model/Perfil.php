<?php
class Perfil {
    private $profesion;
    private $ubicacion;
    
    public function __construct($profesion, $ubicacion) {
        $this->profesion = $profesion;
        $this->ubicacion = $ubicacion;
    }
    
    public function getProfesion() {
        return $this->profesion;
    }
    
    public function getUbicacion() {
        return $this->ubicacion;
    }
    
    public function mostrarImagen() {
        if ($this->ubicacion == 'urbana') {
            return 'imagen-urbana.jpg';
        } elseif ($this->ubicacion == 'rural') {
            return 'imagen-rural.jpg';
        } else {
            return '';
        }
    }
}
?>