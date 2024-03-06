<?php
require_once 'Perfil.php';

class CalculaPago extends Perfil {
    private $nome;
    private $sector;
    private $area;
    private $horas;
    private $costo;

    public function __construct($profesion, $ubicacion, $nome, $sector, $area, $horas, $costo) {
        parent::__construct($profesion, $ubicacion,$nome);
        $this->sector = $sector;
        $this->area = $area;
        $this->horas = $horas;
        $this->costo = $costo;
    }

    public function calcularPago() {
        return $this->horas * $this->costo;
    }
        
    public function getNome() {
        return $this->nome;
    }
        
    public function getSector() {
        return $this->sector;
    }
        
    public function getArea() {
        return $this->area;
    }
        
    public function getHoras() {
        return $this->horas;
    }
        
    public function getCosto() {
        return $this->costo;

        switch ($profesion) {
            case 'Desarrollador':
                $this->costo = 50;
                $this->sector = 'DEV';
                break;
            case 'Diseñador':
                $this->costo = 40;
                $this->sector = 'DSG';
                break;
            case 'Marketing':
                $this->costo = 70;
                $this->sector = 'MKT';
                break;
            default:
                $this->costo = 0;
        }
    }


}
?>
