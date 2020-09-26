<?php

/**
 * Arquivo: utils.php - Baseado em: arquitetura_php - Weuller Marcos 
 * Autor: Weuller Marcos
 * Criado em: 11/06/2020
 */


//
/**
 * Função para capturar data atual - TimeZone de São Paulo
 */
function getCurrentDateTime(){

        $dt = new DateTime(null, new DateTimeZone('America/Sao_Paulo'));
        return $dt->format('d-m-Y H:i:s');
}

function getCurrentDate(){

        $dt = new DateTime(null, new DateTimeZone('America/Sao_Paulo'));
        return $dt->format('d-m-Y');
}

function getCurrentYear(){

        $dt = new DateTime(null, new DateTimeZone('America/Sao_Paulo'));
        return $dt->format('Y');
}

function getCurrentTime(){

        $dt = new DateTime(null, new DateTimeZone('America/Sao_Paulo'));
        return $dt->format('H:i:s');
}



?>

