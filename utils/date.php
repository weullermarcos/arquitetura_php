<?php


/**
 * Arquivo: utils.php - Baseado em: arquitetura_php - Weuller Marcos 
 * Autor: Weuller Marcos
 * Criada em: 11/06/2020
 */


//Função para capturar data atual - TimeZone de São Paulo
function getCurrentDateSPTimeZone(){

        $dt = new DateTime(null, new DateTimeZone('America/Sao_Paulo'));
        return $dt->format('d-m-Y H:i:s');
}



?>

