<?php
class Trayecto {
    var $nombre;
    var $origen;
    var $destino;
    var $direccion;
    var $hora;
    var $precio;
    var $comentario;
    var $plazas;
    
    
    
   
  
    /**
     * Copia un objeto completo pasado por parámetro
    **/ 
    
   
    
    function llenarObjeto($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8) {
        $this->nombre = $p1;
        $this->origen = $p2;
        $this->destino = $p3;
        $this->direccion = $p4;
        $this->hora = $p5;
        $this->precio = $p6;
        $this->comentario = $p7;
        $this->plazas = $p8;
    }
    
    /**
     * Pediente: Hay que terminar esta función
     **/ 
     
    function getDescripcionCorta() {
        $descripcionCorta = substr($this->comentario, 0, 80);
        $descripcionFinal = $descripcionCorta . "...";
        return $descripcionFinal;
    }
    
    /**
     * Comprueba si el origen pasado por parámetro coincide con el de nuestro objeto ($this)
     * Si coincide devolvemos true
     * Si no coincide devolvemos false
     * 
     * @return bool
     * 
     **/ 
    function tieneOrigen($paramOrigen) {
        if ($paramOrigen == $this->origen) {
            return true;
        } else {
            return false;
        }
    }
}



?>