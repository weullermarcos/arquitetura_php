<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Arquivo: loginView.php
 * Autor: Weuller Marcos
 * Criado em: 29/09/2020
 */

include ('../config.php');      #importando arquivo de configurações do projeto

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="../img/favicon_1.ico">

        <title><?php echo PROJECT_NAME;?></title>

        <!-- Google-Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="../css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="../assets/ionicon/css/ionicons.min.css" rel="stylesheet" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../assets/morris/morris.css">


        <!-- Custom styles for this template -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/helper.css" rel="stylesheet">
        <link href="../css/style-responsive.css" rel="stylesheet" />

    </head>


    <body>

        <div class="wrapper-page animated fadeInDown">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading"> 
                   <h3 class="text-center m-t-10"><strong><?php echo PROJECT_NAME;?></strong> </h3>
                </div> 

                <form class="form-horizontal m-t-40" id="formLogin" class="modal-content animate" method="POST" action="<?php echo LOGIN_CONTROLLER;?>">
                                            
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" placeholder="<?php echo EMAIL;?>" maxlength="45" required="required">
                        </div>
                    </div>
                    <div class="form-group ">
                        
                        <div class="col-xs-12">
                            <input class="form-control" type="password" placeholder="<?php echo SENHA;?>" name="senha" maxlength="45" required="required">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label class="cr-styled">
                                <input type="checkbox" checked>
                                <i class="fa"></i> 
                                <?php echo LEMBRE_ME;?>
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button class="btn btn-purple w-md" type="submit"><?php echo LOGIN;?></button>
                        </div>
                    </div>
                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a href="<?php echo RECUPERAR_SENHA_VIEW?>"><i class="fa fa-lock m-r-5"></i><?php echo ESQUECI_MINHA_SENHA;?></a>
                        </div>
                    </div>
                </form>

            </div>
        </div>


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/pace.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>

        <!--common script for all pages-->
        <script src="../js/jquery.app.js"></script>
    
    </body>
</html>

