<?php

/**
 * Classe: _GenericPHPModel1.php
 * Autor: XXXXX
 * Criada em: xx/xx/20xx
 */

#importando classe _GenericPHPModel2
require_once '_GenericPHPModel2.php';


class _GenericPHPModel1 {
    
    #a visibilidade padrão dos atributos em PHP é public para isso usamos "var"
    
    #exemplos de atributos e visibilidades
    private $attr1;
    private $boolAttr1;
    
    public $attr2;
    protected $attr3;
    
    
    //Criando um exemplo de agregação:
    private $genericPHPModel2; #criando um atributo do tipo GenericPHPModel2
    
    /**/
    #Construtor:
    #Aparentemente em PHP eu só posso ter um construtor
    function _GenericPHPModel1() {  
    }
    
    #recebe um parametro do tipo _GenericPHPModel2 e chama um método por agregação
    function useAgregation($param1) {
        
        $param1->agregationMethod();
    }
    
    

    
    #encapsulando métodos (getters e setters):
    function getAttr1(){
        return $this->attr1;
    }
    
    function setAttr1($attr1){
        $this->attr1 = $attr1;  
    }

    function getBoolAttr1() {
        return $this->boolAttr1;
    }

    function setBoolAttr1($boolAttr1) {
        $this->boolAttr1 = $boolAttr1;
    }

    //Getters e Setters para a agregação
    function getGenericPHPModel2() {
        return $this->genericPHPModel2;
    }

    function setGenericPHPModel2($genericPHPModel2) {
        $this->genericPHPModel2 = $genericPHPModel2;
    }

        

    #metodo genérico 1 
    public function genericMethod1()
    {
        echo "<p> Estou no  genericMethod1</p>";
    }
    
    #metodo genérico 2 
    public function genericMethod2()
    {
        //$this referencia o próprio objeto
        if ($this->boolAttr1 == true) {
            echo "<p> True no  genericMethod2</p>";
        } else {
            echo "<p> False no  genericMethod2</p>";
            
        }
    }
    
    
}
