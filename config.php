
<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Arquivo: config.php
 * Autor: Weuller Marcos
 * Criado em: 11/06/2020
 */

//Configura exibição de erros
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

#importando arquivo de configuração do banco de dados
require_once 'database/db_config.php';


//Parametros gerais do Projeto:
define('PROJECT_NAME','Arquitetura PHP');
define('BASE_URL','http://localhost/arquitetura_php/');


//Parametros LOG:
define('LOG_FILE','log.txt');


?>
