
<?php

/**
 * Arquivo: _index.php
 * Autor: XXXXX
 * Criada em: xx/xx/2020
 */

    #importando classes PHP
    require_once 'models/_GenericPHPModel1.php';
    require_once 'models/_GenericPHPDaughterClass1.php';
    
?>


<!DOCTYPE html>
<html>
<head>
	<title>Arquitetura PHP</title>
</head>
<body>

    <?php
        
        #instanciando uma nova classe e setando um atributo
        $class1 = new _GenericPHPModel1();
        
        #setando atributos privados via getters e setters
        $class1->setAttr1("12345");
        $class1->setBoolAttr1(true);
        
        #setando atributos públicos diretamente
        $class1->attr2 = "lalala";
        
        #imprimindo attr1 na tela
        echo "<br/>" . $class1->getAttr1() . "<br/>";
        #imprimindo attr2 na tela
        echo "<p>" . $class1->attr2 . "</p>";
        
        #mostra o status do objeto
        print_r($class1);
        
        #fazendo chamado a um método
        $class1->genericMethod1();
        $class1->genericMethod2();
        
        #usando agregação
        $class2 = new _GenericPHPModel2();
        $class1->useAgregation($class2);
        
        echo "<p> Herança: </p>";
        $filha = new _GenericPHPDaughterClass1();
        $filha->setDaughterAttr1("atributo 1 da filha");
        $filha->setMotherAttr1("Atributo 1 da mãe");
        $filha->daughterMethod1();
        $filha->motherMethod1();
        #mostra o status do objeto
        print_r($filha);
               
    ?>

</body>
</html>
