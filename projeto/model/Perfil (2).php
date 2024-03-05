
    <?php
    class Perfil {
    private $profesion;
    private $ubicacion;
    
    public function __construct($profesion = null, $ubicacion = null) {
        $this->profesion = $profesion;
        $this->ubicacion = $ubicacion;
    }
    
    public function getProfesion() {
        return $this->profesion;
    }
    
    public function getUbicacion() {
        return $this->ubicacion;
  

    public function mostrarImagen($ubicacion) {
        if ($this->ubicacion == 'urbana' ) {
            return 'urbano.jpg';
        } elseif ($this->ubicacion == 'rural') {
            return 'rural.jpg';
        } else {
            return '';
        }
    }

    public function imagProfesion($ubicacion,$profesion) {
        if ($this->ubicacion == 'urbana' && $this->profesion == 'desenvolvedor') {
            return 'assets/durbano.jpg';
        } elseif ($this->ubicacion == 'rural'&& $this->profesion == 'desenvolvedor') {
            return 'assets/Drural.jpg';
        }else if ($this->ubicacion == 'urbana' && $this->profesion == 'designer') {
            return 'assets/deurbano.jpg';
        } else if ($this->ubicacion == 'rural'&& $this->profesion == 'designer') {
            return 'assets/derural.jpg';
        }else if ($this->ubicacion == 'urbana' && $this->profesion == 'marketing') {
            return 'assets/murbano.jpg';
        } else if ($this->ubicacion == 'rural'&& $this->profesion == 'marketing') {
            return 'assets/mrural.jpg';
        } else {
            return '';
        }
    }


    }
?>


