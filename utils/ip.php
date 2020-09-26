<?php


/**
 * Baseado em: arquitetura_php - Weuller Marcos 
 * Arquivo: ip.php
 * Autor: Weuller Marcos 
 * Criado em: 11/06/2020
 */

//Função para capturar IP do usuário
function capturaIP(){

        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
          $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
          $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
          $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
}


?>
