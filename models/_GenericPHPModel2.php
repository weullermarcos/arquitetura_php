<?php

/**
 * Classe: _GenericPHPModel2.php
 * Autor: XXXXX
 * Criada em: xx/xx/20xx
 */

class _GenericPHPModel2 {
    //put your code here
    
    private $attr1;
    
    function getAttr1() {
        return $this->attr1;
    }

    function setAttr1($attr1) {
        $this->attr1 = $attr1;
    }
    
    public function agregationMethod() {
        
        echo "Agregação dentro do _GenericPHPModel2";  
    }
    
}
