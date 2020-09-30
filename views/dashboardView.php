<?php

/**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Arquivo: dashboardView.php
 * Autor: Weuller Marcos
 * Criado em: 31/08/2020
 */

//Abre uma sessão
session_start();

include ('../config.php'); #importando configurações do projeto

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="../img/favicon_1.ico">

        <title><?php echo PROJECT_NAME; ?></title>

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

        <!-- sweet alerts -->
        <link href="../assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/helper.css" rel="stylesheet">
        <link href="../css/style-responsive.css" rel="stylesheet" />

    </head>

    <body>


        <!-- Incluindo meu lateral - Administrador -->
        <?php include '../views/menuLateral.php'; ?>

        <!--Conteúdo Principal -->
        <section class="content">

            <!-- Incluindo cabeçalho da área administrativa -->
            <?php include '../views/cabecalhoAdministrativoView.php'; ?>
            
            <!-- Contadores -->
            <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title"><?php echo BEM_VINDO;?></h3> 
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-pink">
                            <i class="ion-eye"></i> 
                            <h2 class="m-0 counter">50</h2>
                            <div>Daily Visits</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-purple">
                            <i class="ion-paper-airplane"></i> 
                            <h2 class="m-0 counter">256</h2>
                            <div>Contador 1</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-info">
                            <i class="ion-ios7-pricetag"></i> 
                            <h2 class="m-0 counter">1268</h2>
                            <div>Contador 2</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-success">
                            <i class="ion-android-contacts"></i> 
                            <h2 class="m-0 counter">145</h2>
                            <div>Contador 3</div>
                        </div>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-lg-8">
                        <div class="portlet"><!-- /primary heading -->
                            
                            <!-- Relatório de vendas semanais -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">Gráfico 1</h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            
                            <div id="portlet1" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div id="morris-bar-example"  style="height: 320px;"></div>

                                    <div class="row text-center m-t-30 m-b-30">
                                        <div class="col-sm-3 col-xs-6">
                                            <h4>R$ 126,00</h4>
                                            <small class="text-muted"> <?php echo VENDAS_DIARIAS;?> </small>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <h4>R$ 967,00</h4>
                                            <small class="text-muted"><?php echo VENDAS_SEMANAIS;?></small>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <h4>R$ 4.500,00</h4>
                                            <small class="text-muted"><?php echo VENDAS_MENSAIS;?></small>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                            <h4>R$ 87.000,00</h4>
                                            <small class="text-muted"><?php echo VENDAS_ANUAIS;?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /Portlet -->

                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Yearly Sales Report
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet2" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div id="morris-line-example" style="height: 200px;"></div>
                                    <div class="row text-center m-t-30">
                                <div class="col-sm-4">
                                    <h4>$ 86,956</h4>
                                    <small class="text-muted"> This Year's Report</small>
                                </div>
                                <div class="col-sm-4">
                                    <h4>$ 86,69</h4>
                                    <small class="text-muted">Weekly Sales Report</small>
                                </div>
                                <div class="col-sm-4">
                                    <h4>$ 948,16</h4>
                                    <small class="text-muted">Yearly Sales Report</small>
                                </div>

                            </div>
                                </div>
                            </div>
                        </div> <!-- /Portlet -->
                        <div class="tile-stats white-bg"> 
                            <div class="col-sm-8">
                                <div class="status">
                                <h3 class="m-t-15">61.5%</h3> 
                                <p>US Dollar Share</p>
                            </div> 
                            </div>
                            <div class="col-sm-4 m-t-20">
                                <span class="sparkpie-big"><canvas width="98" height="50" style="display: inline-block; width: 98px; height: 50px; vertical-align: top;"></canvas></span> 
                            </div>
                        </div>
                    </div>
                </div> <!-- End row -->



            </div>
            <!-- Page Content Ends -->
            <!-- ================== -->
            
            <!-- Incluindo rodapé -->
            <?php include '../views/rodapeView.php'; ?>

        </section>
        <!-- Main Content Ends -->
        
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/modernizr.min.js"></script>
        <script src="../js/pace.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/jquery.scrollTo.min.js"></script>
        <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="../assets/chat/moment-2.2.1.js"></script>

        <!-- Counter-up -->
        <script src="../js/waypoints.min.js" type="text/javascript"></script>
        <script src="../js/jquery.counterup.min.js" type="text/javascript"></script>

        <!-- EASY PIE CHART JS -->
        <script src="../assets/easypie-chart/easypiechart.min.js"></script>
        <script src="../assets/easypie-chart/jquery.easypiechart.min.js"></script>
        <script src="../assets/easypie-chart/example.js"></script>


        <!--C3 Chart-->
        <script src="../assets/c3-chart/d3.v3.min.js"></script>
        <script src="../assets/c3-chart/c3.js"></script>

        <!--Morris Chart-->
        <script src="../assets/morris/morris.min.js"></script>
        <script src="../assets/morris/raphael.min.js"></script>

        <!-- sparkline --> 
        <script src="../assets/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../assets/sparkline-chart/chart-sparkline.js" type="text/javascript"></script> 

        <!-- sweet alerts -->
        <script src="../assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="../assets/sweet-alert/sweet-alert.init.js"></script>

        <script src="../js/jquery.app.js"></script>
        <!-- Chat -->
        <script src="../js/jquery.chat.js"></script>
        <!-- Dashboard -->
        <script src="../js/jquery.dashboard.js"></script>

        <!-- Todo -->
        <script src="../js/jquery.todo.js"></script>


        <script type="text/javascript">
        /* ==============================================
             Counter Up
             =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    

    </body>

</html>



