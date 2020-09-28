<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Arquivo: logoutController.php
 * Autor: Weuller Marcos
 * Criado em: 01/07/2020
 */


//Abre uma sessão
session_start();

include ('../config.php'); #importando configurações do projeto

//destroi a sessão - Deslogando
session_destroy();

//retorna para a página inicial
header('Location:' . BASE_URL);
exit();


?>
