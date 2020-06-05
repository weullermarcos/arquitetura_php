<?php

/**
 * Interface: _GenericPHPAbstractClass.php
 * Autor: XXXXX
 * Criada em: xx/xx/20xx
 */

#Criando uma classe abstrata
abstract class _GenericPHPAbstractClass {
 
    #posso ter atribusto na classe abstrata
    private $attr1;
    
    #Posso encapsular atributos da classe abstrata
    function getAttr1() {
        return $this->attr1;
    }

    function setAttr1($attr1) {
        $this->attr1 = $attr1;
    }

        
 
    #método 1 da classe abstrata - Não Possui implementação
    public abstract function abstractMethod1();
    
    #método 2 da classe abstrata - Possui implementação
    public function abstractMethod2(){
        
        echo '<p> Estou no  abstractMethod2 da classe _GenericPHPAbstractClass</p>';
        
    }
    
}
