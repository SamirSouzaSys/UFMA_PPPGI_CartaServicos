<?php 
header('Content-Type: text/html; charset=ISO-8859-1');

require_once '../dao/connection_dao.php';

$conexao = new connection_dao();
$conexao->conectaBd();

//$topMaster = $conexao->consultaBd(selTopicoMaster);
//$topInternos = $conexao->consultaBd(selTopicoInterno);

$arrayComboTopicos = array();

//foreach ($topInternos as $topInterno) {
//  $arrayComboTopicos[] = array(
//    "idTop" => intval($topInterno['idtopicoInterno']),
//    'text' => $conexao->arrayTopicosInternosTEXT($topInterno['idtopicoInterno'])
//  );
//}

$arrayComboTopicosLocal = $conexao->arrayTopicosInternosTextBreadCumb();

$selectTopInter = null;
?>

<html lang = "pt-Br">
  <head>
    <title>PPPG - Carta de Serviços - ADMINISTRAÇÃO</title>
<!--    <meta charset = "utf-8"> 
    <meta name = "viewport" content = "width=device-width, initial-scale=1"> -->
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <script src = "../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
    <!-- Bootstrap Core CSS --><link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS --><link href="../assets/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS --><link href="../assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts --><link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/cartaDeServico.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>

  </head>
  <body class="body">
    <div class="container">
      <div class="row">
        <h2 class="page-header">Página de Administração</h2>
      </div>
      <div class="row">
        <label>Tópicos internos</label>
      </div>
      <div class="row">
        <div class="col-lg-10">
          <div class="form-group select-input">
            <select class="form-control" name="select-topico" id="select-topico">
              <option value="">Selecione um tópico para alterar</option>
              <?php foreach ($arrayComboTopicosLocal as $topInter) { ?>
                <option 
                <?php echo ($selectTopInter === $topInter['idTop']) ? "selected='selected" : ""; ?>
                  value ="<?php echo $topInter['idTop']; ?>">
                    <?php echo $topInter['text']; ?>
                    <?php // echo utf8_decode($topInter['text']); ?>
                </option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="col-lg-1">
          <input class="btn  btn-danger" id="buscarTexto" type="submit" value="Buscar texto"/>
        </div>
      </div>
      <br>
      <div class="row">
        <label>Título do tópico</label>
      </div>
      <div class="row">
        <input class="form-control" id="tituloTop" placeholder="Digite o título do tópico">
      </div>
      <br>
      <div class="row">
        <form>
          <textarea name="editorCKEditor" id="editorCKEditor" rows="3" cols="80" txtIdAtual="">
                This is my textarea to be replaced with CKEditor.
          </textarea>

        </form>
        <br>
        <input class="btn  btn-danger" id="salvarTexto" type="submit" value="Confirmar Atualização!!"/>
      </div>
    </div>
    <script type="text/javascript" src="../assets/js/cartasAdmin.js"></script>
  </body>
</html>
