<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Arquivo: siteMap.php
 * Autor: Weuller Marcos
 * Criado em: 19/06/2020
 */

/*URL Base do Projeto*/
define('BASE_URL','http://localhost/arquitetura_php/');


/* Controllers: */
define('ALTERAR_SENHA_CONTROLLER' , BASE_URL . 'controllers/alterarSenhaController.php');
define('LOGIN_CONTROLLER'         , BASE_URL . 'controllers/loginController.php');
define('LOGOUT_CONTROLLER'        , BASE_URL . 'controllers/logoutController.php');
define('PERFIL_CONTROLLER'        , BASE_URL . 'controllers/perfilController.php');


/* Views: */
define('DASHBOARD_VIEW'           , BASE_URL . 'views/dashboardView.php');


?>