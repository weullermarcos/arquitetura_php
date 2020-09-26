<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Classe: _GenericPHPDaughterClass1.php
 * Autor: XXXXX
 * Criado em: xx/xx/20xx
 */
require_once '_GenericPHPMotherClass1.php';

#herdando da classe _GenericPHPMotherClass1
class _GenericPHPDaughterClass1 extends _GenericPHPMotherClass1 {
    
    private $daughterAttr1;
    private $daughterAttr2;
    
    function getDaughterAttr1() {
        return $this->daughterAttr1;
    }

    function getDaughterAttr2() {
        return $this->daughterAttr2;
    }

    function setDaughterAttr1($daughterAttr1) {
        $this->daughterAttr1 = $daughterAttr1;
    }

    function setDaughterAttr2($daughterAttr2) {
        $this->daughterAttr2 = $daughterAttr2;
    }


   public function daughterMethod1() {
        
        echo "<p> Método filha 1 </p>";
    }
        
}
