<?php
    include_once('Empleado.php');
    class Cobros extends Empleado {
        public $bonificacion=0;
        public $comisionCobro=0;

        public function calcularSueldoLiquido(){
            $sueldoLiquido = parent::calcularSueldoLiquido() + $this->bonificacion;
            return $sueldoLiquido;
        }
        
        public function bonificacion(){
            $this->bonificacion = calcularSueldoLiquido() + $this->bonificacion;
            return $bonificacion;
        }

        public function verDatos(){
            return parent::verDatos()
                ."<br>bonificacion: ". $this->bonificacion
                ."<br>comision de cobro: ". $this->comisionCobro;
    }
    
}