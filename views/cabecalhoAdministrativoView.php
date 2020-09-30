<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Arquivo: cabecalhoAdministrativoView.php
 * Autor: Weuller Marcos
 * Criado em: 28/09/2020
 */

?>

<script>
    
    function desconectar(){

        var r = confirm("<?php echo DESEJA_DESCONECTAR;?>");

        if (r == true) {

            var url2 = new URL("<?php echo LOGOUT_CONTROLLER?>");
            location.href = url2;
        } 
    }
    
</script>


<!-- Header -->
<header class="top-head container-fluid">
    <button type="button" class="navbar-toggle pull-left">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Right navbar -->
    <ul class="list-inline navbar-right top-menu top-right-menu">  

        <?php   
            if(!is_null($_SESSION['idDistribuidora'])){
        ?>        
            <!-- Notificações -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" onclick="meusPedidos()">
                    <i class="fa fa-bell-o"></i>
                    <span id='spnNumeroPedidos' class='badge badge-sm up bg-pink count'>0</span>
                </a>
            </li>
        <?php        
            }
        ?>

        <!-- user login dropdown start-->
        <li class="dropdown text-center">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="../img/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                <span class='username'>Usuário 1</span> <span class='caret'></span>
                
            </a>
            <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                <li><a href="#" onclick="desconectar()"><i class="fa fa-sign-out"></i> <?php echo SAIR;?> </a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->       
    </ul>
    <!-- End right navbar -->

</header>
<!-- Header Ends -->
