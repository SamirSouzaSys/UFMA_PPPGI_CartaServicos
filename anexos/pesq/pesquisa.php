<?php
echo $topMaster[2]['ModalTextoBody'];
?>
<div class="panel panel-default">
  <!-- /.panel-heading -->
  <div class="panel-body">
    <!-- Nav tabs -->
    <ul class="nav nav-pills">
      <li ><a class="linkPrimario" href="#<?php echo $topInternos[35]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[35]['TituloTopico']; ?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[41]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[41]['TituloTopico']; ?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[44]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[44]['TituloTopico']; ?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[49]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[49]['TituloTopico']; ?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[53]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[53]['TituloTopico']; ?></a>
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!--cadPesq-->
      <div class="tab-pane fade in" id="<?php echo $topInternos[35]['idtopicoInterno']; ?>">
        <br/>
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li ><a class="linkSecundario" href="#<?php echo $topInternos[36]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[36]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[37]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[37]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[38]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[38]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[39]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[39]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[40]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[40]['TituloTopico']; ?></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!--descriPesq-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[36]['idtopicoInterno']; ?>">
                <br>
                <?php
//                include 'descriPesq.html';
                echo $topInternos[36]['TextoTopico'];
                ?>
              </div>
              <!--resAcess-->
              <div class="tab-pane fade" id="<?php echo $topInternos[37]['idtopicoInterno']; ?>">
                <br>
                <?php
//                include 'requisitoAcesso.html';
                echo $topInternos[37]['TextoTopico'];
                ?>

              </div>
              <!--inforContac-->
              <div class="tab-pane fade" id="<?php echo $topInternos[38]['idtopicoInterno']; ?>">
                <br>
                <?php
//                include 'inforContato.html';
                echo $topInternos[38]['TextoTopico'];
                ?>

              </div>
              <!--gabDiadp-->
              <div class="tab-pane fade" id="<?php echo $topInternos[39]['idtopicoInterno']; ?>">
                <br>
                <?php
//                include 'gabDiadp.html';
                echo $topInternos[39]['TextoTopico'];
                ?>

              </div>
              <!--gabDiadp-->
              <div class="tab-pane fade" id="<?php echo $topInternos[40]['idtopicoInterno']; ?>">
                <br>
                <?php
//                include 'gabDiadp.html';
//                echo "adicionar arquivo";
                echo $topInternos[40]['TextoTopico'];
                ?>

              </div>
            </div>
          </div>
          <!-- /.panel-body -->
        </div>
      </div>
      <!--      bolEletPesqOn-->
      <div class="tab-pane fade" id="<?php echo $topInternos[41]['idtopicoInterno']; ?>">
        <br/>
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li ><a class="linkSecundario" href="#<?php echo $topInternos[42]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[42]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[43]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[43]['TituloTopico']; ?></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!--descriBolEle-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[42]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'descriBolELe.html';
                echo $topInternos[42]['TextoTopico'];?>
              </div>
              <!--resAcessBolEle-->
              <div class="tab-pane fade" id="<?php echo $topInternos[43]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'resAcessBolEle.html';
                echo $topInternos[43]['TextoTopico'];?>
              </div>
            </div>
          </div>

        </div>      <!-- /.panel-body -->      
      </div>
      <!--pibic-->
      <div class="tab-pane fade" id="<?php echo $topInternos[44]['idtopicoInterno']; ?>">
        <br/>
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li ><a class="linkSecundario" href="#<?php echo $topInternos[45]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[45]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[46]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[46]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[47]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[47]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[48]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[48]['TituloTopico']; ?></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!--descriPIBIC-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[45]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'descriPIBIC.html';
                echo $topInternos[45]['TextoTopico'];?>
              </div>
              <!--resPIBIC-->
              <div class="tab-pane fade" id="<?php echo $topInternos[46]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'resPIBIC.html';
                echo $topInternos[46]['TextoTopico'];?>
              </div>
              <!--acessPIBIC-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[47]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'acessPIBIC.html';
                echo $topInternos[47]['TextoTopico'];?>
              </div>
              <!--gabPIBIC-->
              <div class="tab-pane fade" id="<?php echo $topInternos[48]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'gabPIBIC.html';
                echo $topInternos[48]['TextoTopico'];?>
              </div>
            </div>
          </div>
        </div>

        <!-- /.panel-body -->                                
      </div>
      <!--semic-->
      <div class="tab-pane fade" id="<?php echo $topInternos[49]['idtopicoInterno']; ?>">
        <br/>
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li ><a class="linkSecundario" href="#<?php echo $topInternos[50]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[50]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[51]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[51]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[52]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[52]['TituloTopico']; ?></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!--descriSEMIC-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[50]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'descriSEMIC.html';
                echo $topInternos[50]['TextoTopico'];
                ?>
              </div>
              <!--resAcessSEMIC-->
              <div class="tab-pane fade" id="<?php echo $topInternos[51]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'resAcessSEMIC.html';
                echo $topInternos[51]['TextoTopico'];?>

              </div>
              <!--contatosSEMIC-->
              <div class="tab-pane fade" id="<?php echo $topInternos[52]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'contatosSEMIC.html';
                echo $topInternos[52]['TextoTopico'];?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!--revCadPesq-->
      <div class="tab-pane fade" id="<?php echo $topInternos[53]['idtopicoInterno']; ?>">
        <br/>
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li ><a class="linkSecundario" href="#<?php echo $topInternos[54]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[54]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[55]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[55]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[56]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[56]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[57]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[57]['TituloTopico']; ?></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!--descriCadPesq-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[54]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'descriCadPesq.html';
                echo $topInternos[54]['TextoTopico'];?>
              </div>
              <!--resCadPesq-->
              <div class="tab-pane fade" id="<?php echo $topInternos[55]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'resCadPesq.html';
                echo $topInternos[55]['TextoTopico'];?>


              </div>
              <!--acessCadPesq-->
              <div class="tab-pane fade in" id="<?php echo $topInternos[56]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'acessCadPesq.html';
                echo $topInternos[56]['TextoTopico'];?>

              </div>

              <div class="tab-pane fade in" id="<?php echo $topInternos[57]['idtopicoInterno']; ?>">
                <br>
                <?php // include 'contatosCadPesq.html';
                echo $topInternos[57]['TextoTopico'];?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.panel-body -->
</div>