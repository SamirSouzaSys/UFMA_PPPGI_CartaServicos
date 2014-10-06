<?php
echo $topMaster[0]['ModalTextoBody'];
?>

<div class="panel panel-default">
  <!-- /.panel-heading -->
  <div class="panel-body">
    <!-- Nav tabs -->
    <ul class="nav nav-pills ">
      <li><a class="linkPrimario" href="#<?php echo $topInternos[0]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[0]['TituloTopico']; ?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[1]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[1]['TituloTopico']; ?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[2]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[2]['TituloTopico']; ?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[3]['idtopicoInterno']; ?>" data-toggle="tab"><?php echo $topInternos[3]['TituloTopico']; ?></a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade" id="<?php echo $topInternos[0]['idtopicoInterno']; ?>">
        <br>
        <?php
        echo $topInternos[0]['TextoTopico'];
//        include 'gabineteDaPPPG.html';
        ?>
      </div>
      <div class="tab-pane fade" id="<?php echo $topInternos[1]['idtopicoInterno']; ?>">
        <br>

        <?php
//        include 'formasDeComunicação.html';
        echo $topInternos[1]['TextoTopico'];
        ?>

      </div>
      <div class="tab-pane fade" id="<?php echo $topInternos[2]['idtopicoInterno']; ?>">
        <br>

        <?php
//        include 'equipeGestoraDaPPPG.html';
        echo $topInternos[2]['TextoTopico'];
        ?>

      </div>
      <div class="tab-pane fade" id="<?php echo $topInternos[3]['idtopicoInterno']; ?>">
        <br>
        <?php
        echo $topInternos[3]['TextoTopico'];
//        include 'organogramaPPPG.html';
        ?>

      </div>
    </div>
  </div>
  <!-- /.panel-body -->
</div>