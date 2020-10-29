<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Arquivo: config.php
 * Autor: Weuller Marcos
 * Criada em: 11/06/2020
 */


//Definindo caminho para o diretório raiz
define('ROOT_PATH', dirname(__FILE__));

#importando arquivo de configuração
include (ROOT_PATH . '/config/database/db_config.php');
include (ROOT_PATH . '/config/enum.php');
include (ROOT_PATH . '/config/siteMap.php');
include (ROOT_PATH . '/config/messages.php');
include (ROOT_PATH . '/database/DataBase.php'); #importando classe Database
include (ROOT_PATH . '/utils/utils.php');   #importando arquivo de utils do projeto


//Configura exibição de erros
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
//error_reporting(E_ALL); //Mostra todos os erros E Warnings
//error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_CORE_ERROR | E_CORE_WARNING); //Mostra todos os erros SEM Warnings
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR | E_CORE_WARNING); //Mostra todos os erros SEM Warnings e SEM Notices


//Parametros gerais do Projeto:
define('PROJECT_NAME','Arquitetura PHP');


//Parametros LOG:
define('LOG_FILE','log.txt');


/**
* Retorna mensagem do rodapé
* @return String <p>Retorna mensagem do rodapé formatada</p>
*/
function getFooterMessage(){
    
    $rodaPe = PROJECT_NAME . " | Copyright - " . getCurrentYear() . " | All Rights Reserved | Desenvolvido por <a href='http://outlier.tec.br/' target='_blank'>Outlier.tec</a>";

    return $rodaPe;
}


?>
