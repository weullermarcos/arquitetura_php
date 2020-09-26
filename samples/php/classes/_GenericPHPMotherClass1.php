<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Classe: _GenericPHPMotherClass1.php
 * Autor: XXXXX
 * Criada em: xx/xx/20xx
 */
class _GenericPHPMotherClass1 {
    
    private $motherAttr1;
    private $motherAttr2;
    
    function getMotherAttr1() {
        return $this->motherAttr1;
    }

    function getMotherAttr2() {
        return $this->motherAttr2;
    }

    function setMotherAttr1($motherAttr1) {
        $this->motherAttr1 = $motherAttr1;
    }

    function setMotherAttr2($motherAttr2) {
        $this->motherAttr2 = $motherAttr2;
    }
    
    public function motherMethod1() {
        
        echo "<p> Método mãe 1 </p>";
    }
    
    public function motherMethod2($param) {
        
        echo "<p> Método mãe 2: " . $param . "</p>";

    }
       
}
