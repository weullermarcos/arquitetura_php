<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Arquivo: loginController.php
 * Autor: Weuller Marcos
 * Criado em: 29/09/2020
 */

//Abre uma sessão
session_start();

include ('../config.php'); #importando configurações do projeto


$email = $_POST['email'];
$senha = $_POST['senha'];


try {

    if((strcmp($email, 'admin@admin.com') == 0) && (strcmp($senha, 'admin') == 0)){
        
        //redirecionando para página de Listar Consumidor
        header('Location:' . DASHBOARD_VIEW);
        
    }
    else{

        showAlertMessage(USUARIO_SENHA_INVALIDOS);
        echo "<script>window.history.back()</script>";
        exit();
    }
} 
catch (Throwable $e) {
    
    showAlertMessage(ERRO_LOGIN);
    echo "<script>window.history.back()</script>";
    exit();
}



?>