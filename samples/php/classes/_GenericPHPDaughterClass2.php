<?php

/**
 * Classe: _GenericPHPDaughterClass1.php
 * Autor: XXXXX
 * Criada em: xx/xx/20xx
 */

#importando a classe _GenericPHPAbstractClass
require_once '_GenericPHPAbstractClass.php';


class _GenericPHPDaughterClass2 extends _GenericPHPAbstractClass{
    
    #Assim como na interface eu sou obrigado a implementar todos os métodos abstratos
    public function abstractMethod1() {
        
    }
    
    #Assim como posso sobreescever o método concreto, caso seja necessário
    public function abstractMethod2(){
        
        echo '<p> Estou no  abstractMethod2 da classe _GenericPHPDaughterClass2</p>';
        
    }

}