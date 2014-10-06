<div class="panel panel-default">
  <!-- /.panel-heading -->
  <div class="panel-body">
    <!-- Nav tabs -->
    <ul class="nav nav-pills">
      <li><a class="linkPrimario" href="#<?php echo $topInternos[58]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[58]['TituloTopico']; ?></a></li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[62]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[62]['TituloTopico']; ?></a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade" id="<?php echo $topInternos[58]['idtopicoInterno']; ?>">
        <br>

        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li><a class="linkSecundario" href="#<?php echo $topInternos[59]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[59]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[60]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[60]['TituloTopico']; ?></a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[61]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[61]['TituloTopico']; ?></a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade" id="<?php echo $topInternos[59]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[59]['TextoTopico'];
//                include 'descricao.html';
                ?>

              </div>
              <div class="tab-pane fade" id="<?php echo $topInternos[60]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[60]['TextoTopico'];
//                include 'requisitoAcesso.html';
                ?>

              </div>
              <div class="tab-pane fade" id="<?php echo $topInternos[61]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[61]['TextoTopico'];
//                include 'gabDapi.html';
                ?>

              </div>
            </div>
          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel -->

      </div>
      <div class="tab-pane fade" id="<?php echo $topInternos[62]['idtopicoInterno']; ?>">
        <br>
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li ><a class="linkSecundario" href="#<?php echo $topInternos[63]['idtopicoInterno']; ?>" data-toggle="tab">Descrição</a>
              </li>
              <li><a class="linkSecundario" href="#<?php echo $topInternos[64]['idtopicoInterno']; ?>" data-toggle="tab">Acesso</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade " id="<?php echo $topInternos[63]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[63]['TextoTopico'];
//                include 'Adescri.html';
                ?>
              </div>
              <div class="tab-pane fade" id="<?php echo $topInternos[64]['idtopicoInterno']; ?>">
                <br>
                <?php
                echo $topInternos[64]['TextoTopico'];
//                include 'Aacesso.html';
                ?>
              </div>
            </div>
          </div>
          <!-- /.panel-body -->
        </div>
      </div>
    </div>
  </div>
  <!-- /.panel-body -->
</div>