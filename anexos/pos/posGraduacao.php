<?php
echo $topMaster[1]['ModalTextoBody'];
?>

<div class="panel panel-default">
  <!-- /.panel-heading -->
  <div class="panel-body">
    <!-- Nav tabs -->
    <ul class="nav nav-pills">
      <li><a class="linkPrimario" href="#<?php echo $topInternos[4]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[4]['TituloTopico']; ?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[13]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[13]['TituloTopico']; ?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[22]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[22]['TituloTopico']; ?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[30]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[30]['TituloTopico']; ?></a>
      </li>
    </ul>
    <!-- Tab panes -->

    <div class="tab-content">
      <!--cursoEspPosGrad-->
      <div class="tab-pane fade in" id="<?php echo $topInternos[4]['idtopicoInterno']; ?>">
        <br/>
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li><a class="linkSecundario" href="#<?php echo $topInternos[5]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[5]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[6]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[6]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario"  href="#<?php echo $topInternos[7]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[7]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[8]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[8]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[9]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[9]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[10]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[10]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[11]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[11]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[12]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[12]['TituloTopico']; ?></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!--descriCursEsp-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[5]['idtopicoInterno']; ?>">
                <br>
                
                <?php // include 'descriCurEsp.html';
                echo $topInternos[5]['TextoTopico'];?>
              </div>
              <!--resCursEsp-->
              <div class="tab-pane fade" id="<?php echo $topInternos[6]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'resCurEsp.html';
                echo $topInternos[6]['TextoTopico'];?>

              </div>
              <!--acessCursEsp-->
              <div class="tab-pane fade" id="<?php echo $topInternos[7]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'acessCurEsp.html'; 
                echo $topInternos[7]['TextoTopico'];?>

              </div>
              <!--permEspCursEsp-->
              <div class="tab-pane fade" id="<?php echo $topInternos[8]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[8]['TextoTopico'];
//                include 'permEspCursEsp.html'; ?>
              </div>
              <!--tempPreseCursEsp-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[9]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[9]['TextoTopico'];
//                include 'tempPreseCursEsp.html'; ?>
              </div>
              <!--cursDistCursEsp-->
              <div class="tab-pane fade" id="<?php echo $topInternos[10]['idtopicoInterno']; ?>">
                <br>
                <?php 
                echo $topInternos[10]['TextoTopico'];
//                include 'cursDistCursEsp.html'; ?>
              </div>
              <!--solCertCursEsp-->
              <div class="tab-pane fade" id="<?php echo $topInternos[11]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[11]['TextoTopico'];
//                include 'solCertCursEsp.html'; ?>
              </div>
              <!--RegGerCursPosGradLatCursEsp-->
              <div class="tab-pane fade" id="<?php echo $topInternos[12]['idtopicoInterno']; ?>">
                <br>
                <?php echo $topInternos[12]['TextoTopico'];
//                include 'RegGerCursPosGradLatCursEsp.html'; ?>
              </div>
            </div>
          </div>
          <!-- /.panel-body -->
        </div>
      </div>
      <!--cursoMestPosGrad-->
      <div class="tab-pane fade" id="<?php echo $topInternos[13]['idtopicoInterno']; ?>">
        <br/>
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li><a class="linkSecundario" href="#<?php echo $topInternos[14]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[14]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[15]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[15]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[16]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[16]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[17]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[17]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[18]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[18]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[19]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[19]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[20]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[20]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[21]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[21]['TituloTopico']; ?></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!--descriCursMest-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[14]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[14]['TextoTopico'];
//                include 'descriCursMest.html'; ?>
              </div>
              <!--resCursMest-->
              <div class="tab-pane fade" id="<?php
              echo $topInternos[15]['idtopicoInterno'];
//              echo $topInternos[15]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[15]['TextoTopico'];
//                include 'resCursMest.html'; ?>
              </div>
              <!--acessCursMest-->
              <div class="tab-pane fade" id="<?php
              echo $topInternos[16]['idtopicoInterno'];
//              echo $topInternos[16]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[16]['TextoTopico'];
//                include 'acessCursMest.html'; ?>
              </div>
              <!--mestProfCursMest-->
              <div class="tab-pane fade" id="<?php
              echo $topInternos[17]['idtopicoInterno'];
//              echo $topInternos[17]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[17]['TextoTopico'];
//                include 'mestProfCursMest.html'; ?>
               
              </div>
              <!--mestAcadCursMest-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[18]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[18]['TextoTopico'];
//                include 'mestAcadCursMest.html'; ?>
              </div>
              <!--solicDiplomaCursMest-->
              <div class="tab-pane fade" id="<?php echo $topInternos[19]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[19]['TextoTopico'];
//                include 'solicDiplomaCursMest.html'; ?>
                
              </div>
              <!--revDiploCursMest-->
              <div class="tab-pane fade" id="<?php echo $topInternos[20]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[20]['TextoTopico'];
//                include 'revDiploCursMest.html'; ?>
              </div>
              <!--RegGerCursPosGradLatCursMest-->
              <div class="tab-pane fade" id="<?php echo $topInternos[21]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[21]['TextoTopico'];
//                include 'RegGerCursPosGradLatCursMest.html'; ?>
                

              </div>
            </div>
          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel-body -->      
      </div>
      <!--DoutPosGrad-->
      <div class="tab-pane fade" id="<?php echo $topInternos[22]['idtopicoInterno']; ?>">
        <br/>       
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li><a class="linkSecundario" href="#<?php echo $topInternos[23]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[23]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[24]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[24]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[25]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[25]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[26]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[26]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[27]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[27]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[28]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[28]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[29]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[29]['TituloTopico']; ?></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!--descriCursDout-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[23]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[23]['TextoTopico'];
//                include 'descriCursDout.html';?>

              </div>
              <!--resCursDout-->
              <div class="tab-pane fade" id="<?php echo $topInternos[24]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[24]['TextoTopico'];
//                include 'resCursDout.html';?>
                
              </div>
              <!--acessCursDout-->
              <div class="tab-pane fade" id="<?php echo $topInternos[25]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[25]['TextoTopico'];
//                include 'acessCursDout.html';?>
              </div>
              <!--doutAcadCursDout-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[26]['idtopicoInterno']; ?>">
                <br>
                <?php echo $topInternos[26]['TextoTopico'];
//                include 'doutProfCursDout.html';?>
              </div>
              <!--solicDiplomaCursDout-->
              <div class="tab-pane fade" id="<?php echo $topInternos[27]['idtopicoInterno']; ?>">
                <br>
                <?php echo $topInternos[27]['TextoTopico'];
//                include 'solicDiplomaCursDout.html';?>
              </div>
              <!--revDiploCursDout-->
              <div class="tab-pane fade" id="<?php echo $topInternos[28]['idtopicoInterno']; ?>">
                <br>
                <?php echo $topInternos[28]['TextoTopico'];
//                include 'revDiploCursDout.html';?>
              </div>
              <!--RegGerCursPosGradLatCursDout-->
              <div class="tab-pane fade" id="<?php echo $topInternos[29]['idtopicoInterno']; ?>">
                <br>
                <?php echo $topInternos[29]['TextoTopico'];
//                include 'RegGerCursPosGradLatCursDout.html';?>
                
              </div>
            </div>
          </div>
          <!-- /.panel-body -->
        </div>

        <!-- /.panel-body -->                                
      </div>
      <!--AtendPortPosGrad-->
      <div class="tab-pane fade" id="<?php echo $topInternos[30]['idtopicoInterno']; ?>">
        <br/>
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li><a class="linkSecundario" href="#<?php echo $topInternos[31]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[31]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[32]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[32]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[33]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[33]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[34]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[34]['TituloTopico']; ?></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!--descriAtendPortNecEspeciais-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[31]['idtopicoInterno']; ?>">
                <br>
                <?php echo $topInternos[31]['TextoTopico'];
//                include 'descriAtendPortNecEspeciais.html';?>
              </div>
              <!--servOfereAtendPortNecEspeciais-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[32]['idtopicoInterno']; ?>">
                <br>
                <?php echo $topInternos[32]['TextoTopico'];
//                include 'servOfereAtendPortNecEspeciais.html';?>
                
              </div>
              <!--acessAtendPortNecEspeciais-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[33]['idtopicoInterno']; ?>">
                <br>
                <?php echo $topInternos[33]['TextoTopico'];
//                include 'acessAtendPortNecEspeciais.html';?>
                
              </div>
              <!--contatoAtendPortNecEspeciais-->
              <div class="tab-pane fade in " id="<?php echo $topInternos[34]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[34]['TextoTopico'];
//                include 'contatoAtendPortNecEspeciais.html';?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.panel-body -->
</div>