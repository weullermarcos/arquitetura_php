<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Arquivo: enum.php
 * Autor: Weuller Marcos
 * Criado em: 18/06/2020
 */

/*Enum para cancelado/Não cancelado*/
define('NAO_CANCELADO', 0);
define('CANCELADO', 1);


/*Enum para cancelado/Não cancelado*/
define('DESATIVADO', 0);
define('ATIVO', 1);


/*Cadastro CPF e CNPJ*/
define('CADASTRO_ERRO', 0);
define('CADASTRO_SUCESSO', 1);
define('CADASTRO_EMAIL_DUPLICADO', 2);
define('CADASTRO_CPF_DUPLICADO', 3);
define('CADASTRO_CNPJ_DUPLICADO', 4);

?>