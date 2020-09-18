<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Arquivo: message.php
 * Autor: Weuller Marcos
 * Criado em: 20/06/2020
 */


/**
* Exibe a mensage informada
* @param String $message
*/
function showAlertMessage($message){
    
    echo "<script type='text/javascript'>alert('$message');</script>";
}

/**
* Exibe a mensage informada e redireciona para a página informada
* @param String $message
* @param String $page
*/
function showAlertMessageWithRedirect($message, $page){
    
    echo "<script> 
            alert('$message'); 
            window.location.href='$page';
          </script>";
}


?>