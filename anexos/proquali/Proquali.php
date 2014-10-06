<?php
echo $topMaster[4]['ModalTextoBody'];
?>

<div class="panel panel-default">
  <!-- /.panel-heading -->
  <div class="panel-body">
    <!-- Nav tabs -->
    <ul class="nav nav-pills ">
      <li><a class="linkPrimario" href="#<?php echo $topInternos[65]['idtopicoInterno']; ?>" data-toggle="tab"><?php
echo $topInternos[65]['TituloTopico'];
?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[66]['idtopicoInterno']; ?>" data-toggle="tab"><?php
echo $topInternos[66]['TituloTopico'];
?></a>
      </li>
      <li><a class="linkPrimario" href="#<?php echo $topInternos[67]['idtopicoInterno']; ?>" data-toggle="tab"><?php
echo $topInternos[67]['TituloTopico'];
?></a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade" id="<?php echo $topInternos[65]['idtopicoInterno']; ?>">
        <br>
        <?php
//        include 'objetivos.html';
        echo $topInternos[65]['TextoTopico'];
        ?>
      </div>
      <div class="tab-pane fade" id="<?php echo $topInternos[66]['idtopicoInterno']; ?>">
        <br>

        <?php
//        include 'subprogramasProquali.html';
        echo $topInternos[66]['TextoTopico'];
        ?>

      </div>
      <div class="tab-pane fade" id="<?php echo $topInternos[67]['idtopicoInterno']; ?>">
        <br>

        <?php
//        include 'contatos.html';
        echo $topInternos[67]['TextoTopico'];
        ?>

      </div>
    </div>
  </div>
  <!-- /.panel-body -->
</div>