<?php
require_once './dao/connection_dao.php';

$conexao = new connection_dao();
$conexao->conectaBd();

$topMaster = $conexao->consultaBd(selTopicoMaster);
$topInternos = $conexao->consultaBd(selTopicoInterno);

//$topMaster = $topMasterBD;
//$topInternos = $topInternosBD;

$gabModal = $topMaster[0]['idtopicoMaster'] . 'Master';
$gabTitulo = $topMaster[0]['btn_titulo'];
$gabModTitulo = $topMaster[0]['ModalTitulo'];

$posGradModal = $topMaster[1]['idtopicoMaster'] . 'Master';
$posGradTitulo = $topMaster[1]['btn_titulo'];
$posGradModTitulo = $topMaster[1]['ModalTitulo'];

$pesqModal = $topMaster[2]['idtopicoMaster'] . 'Master';
$pesqTitulo = $topMaster[2]['btn_titulo'];
$pesqModTitulo = $topMaster[2]['ModalTitulo'];

$inovModal = $topMaster[3]['idtopicoMaster'] . 'Master';
$inovTitulo = $topMaster[3]['btn_titulo'];
$inovModTitulo = $topMaster[3]['ModalTitulo'];

$proqualiModal = $topMaster[4]['idtopicoMaster'] . 'Master';
$proqualiTitulo = $topMaster[4]['btn_titulo'];
$proqualiModTitulo = $topMaster[4]['ModalTitulo'];

$cartaServModal = $topMaster[5]['idtopicoMaster'] . 'Master';
$cartaServTitulo = $topMaster[5]['btn_titulo'];
$cartaServModTitulo = $topMaster[5]['ModalTitulo'];
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>PPPG - Carta de servi�os</title>
    <!--<meta charset="utf-8">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/cartasAdmin.js"></script>
    <link rel="stylesheet" href="./assets/css/bootstrap-theme.min.css">
    <!-- Bootstrap Core CSS --><link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS --><link href="./assets/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS --><link href="./assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts --><link href="./assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/cartaDeServico.css" rel="stylesheet" type="text/css"/>
    <!--[if IE 6]>     <link href="./assets/css/ie/cartaDeServico.css" rel="stylesheet" type="text/css"/> <![endif]-->
    <!--[if IE 7]>     <link href="./assets/css/ie/cartaDeServico.css" rel="stylesheet" type="text/css"/> <![endif]-->
    <!--[if IE 8]>     <link href="./assets/css/ie/cartaDeServico.css" rel="stylesheet" type="text/css"/> <![endif]-->
    <!--[if gte IE 8]> <link href="./assets/css/ie/cartaDeServico.css" rel="stylesheet" type="text/css"/> <![endif]-->

  </head>
  <body class="body">
    <!--Carta de serviço-->
    <div class="row text-center cdsTitle">
      <a href="#<?php echo $cartaServModal ?>" class="btn btn-lg btn-default" data-toggle="modal">
        <?php echo $cartaServTitulo; ?>
      </a>
    </div>

    <div class= "container cdsContainer" >
      <!--    gab pppg-->
      <div class="row">
        <div class="text-center">
          <a href="#<?php echo $gabModal ?>" class="btn btn-default cdsBtnGabPPPG" id="cdsBtnGabPPPG" data-toggle="modal"><?php echo $gabTitulo ?></a>
        </div>
        <div class="text-center">
          <a href="#<?php echo $gabModal ?>" class="btn btn-default-circular btn-circle cdsGabPPPGCirc" data-toggle="modal"></a>
        </div>
      </div>
      <!--Pós graduação / inovação-->
      <div class="row">
        <div class="divCentroBtns text-center">
          <a href="#<?= $posGradModal ?>" class="btn btn-default cdsBtnPosGrad " data-toggle="modal"><?= $posGradTitulo ?></a>
          <a href="#<?= $posGradModal ?>" class="btn btn-default-circular btn-circle cdsBtnPosGradCirc" data-toggle="modal"></a>

          <a href="#<?= $inovModal ?>" class="btn btn-default-circular btn-circle cdsBtnInovaCirc" data-toggle="modal"></a>
          <a href="#<?= $inovModal ?>" class="btn btn-default cdsBtnInova" data-toggle="modal"><?= $inovTitulo ?></a>
        </div>
      </div>
      <!--Pesquisa / Proquali-->
      <div class="row">
        <div class="divAbaixoBtns text-center">
          <a href="#<?= $pesqModal ?>" class="btn btn-default cdsBtnPesqGrad " data-toggle="modal"><?= $pesqTitulo ?></a>
          <a href="#<?= $pesqModal ?>" class="btn  btn-circle cdsBtnPesqGradCirc btn-default-circular" data-toggle="modal"></a>

          <a href="#<?= $proqualiModal ?>" class="btn btn-circle cdsBtnProqualiCirc btn-default-circular" data-toggle="modal"></a>
          <a href="#<?= $proqualiModal ?>" class="btn btn-default cdsBtnProquali" data-toggle="modal"><?= $proqualiTitulo ?></a>
        </div>
      </div>
    </div>
    <div class="bs-example">
      <!-- Modal HTML -->
      <!--      Carta de servicos-->
      <div id="<?= $cartaServModal ?>" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title titleModal"><?= $cartaServModTitulo ?></h4>
            </div>
            <div class="modal-body">
              <?php
              include './anexos/cartaDeServicos.php';
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--Modais-->    
    <!--    Gabinete-->
    <div id="<?= $gabModal ?>" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><?= $gabModTitulo ?></h4>
          </div>
          <div class="modal-body">
            <?php
            include './anexos/gab/gabinetePPPG.php';
            ?>

          </div>
        </div>
      </div>
    </div>
    <!--P�s-Graduacao-->
    <div id="<?= $posGradModal ?>" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><?= $posGradModTitulo ?></h4>
          </div>
          <div class="modal-body">
            <?php
            include './anexos/pos/posGraduacao.php';
            ?>
          </div>
        </div>
      </div>
    </div>
    <!--Inovação-->
    <div id="<?= $inovModal ?>" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><?= $inovModTitulo ?></h4>
          </div>
          <div class="modal-body">
            <?php
            include './anexos/inova/inovacao.php';
            ?>

          </div>
        </div>
      </div>
    </div>
    <!--Pesquisa-->
    <div id="<?= $pesqModal ?>" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><?= $pesqModTitulo ?></h4>
          </div>
          <div class="modal-body">
            <?php
            include './anexos/pesq/pesquisa.php';
            ?>
          </div>
        </div>
      </div>
    </div>
    <!--Programa de Qualidade PPPG-->
    <div id="<?= $proqualiModal ?>" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><?= $proqualiModTitulo ?></h4>
          </div>
          <div class="modal-body">
            <?php
            include './anexos/proquali/Proquali.php';
            ?>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>