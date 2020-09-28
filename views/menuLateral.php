<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Arquivo: menuLateralAdministrador.php
 * Autor: Weuller Marcos
 * Criado em: 02/09/2020
 */

?>

<!-- Menu Lateral -->
<aside class="left-panel">
    <div class="logo">
        <a href="<?php echo BASE_URL;?>" class="logo-expanded">
            <img src="../img/single-logo.png" alt="logo">
            <span class="nav-label"><?php echo PROJECT_NAME;?></span>
        </a>
    </div>

    <nav class="navigation">
        <ul class="list-unstyled">

            <li class="has-submenu active"><a href="#"><i class="ion-home"></i> <span class="nav-label"><?php echo DASHBOARD;?></span></a></li>
            <li class="has-submenu"><a href="#"> <i class="ion-paper-airplane"></i> <span class="nav-label">Menu 1</span></a></li>
            <li class="has-submenu"><a href="#"> <i class="ion-android-contacts"></i>  <span class="nav-label">Menu 2</span></a></li>
        </ul>
    </nav>
</aside>

 