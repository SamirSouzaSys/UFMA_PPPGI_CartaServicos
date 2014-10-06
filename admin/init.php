<?php
$arrayComboTopicosLocal = $arrayComboTopicos;
$selectTopInter = null;
?>

<html lang = "pt-Br">
  <head>
    <title>PPPG - Carta de Servi�os - ADMINISTRA��O</title>
    <!--<meta charset = "utf-8">--> 
    <!--<meta name = "viewport" content = "width=device-width, initial-scale=1"> -->
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <script src = "../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/bootstrap-theme.min.css">
    <!-- Bootstrap Core CSS --><link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS --><link href="../../assets/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS --><link href="../../assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts --><link href="../../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/cartaDeServico.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="../../assets/ckeditor/ckeditor.js"></script>

  </head>
  <body class="body">
    <div class="container">
      <div class="row">
        <h2 class="page-header">P�gina de Administra��o</h2>
      </div>
      <div class="row">
        <div class="form-group select-input">
          <label>T�picos internos</label>
          <select class="form-control" name="select-topico" id="select-topico">
            <option value="">Selecione um t�pico para alterar</option>
            <?php foreach ($arrayComboTopicosLocal as $topInter) { ?>
              <option 
              <?php echo ($selectTopInter === $topInter['idTop']) ? "selected='selected" : ""; ?>
                value ="<?php echo $topInter['idTop']; ?>">
                  <?php echo $topInter['text']; ?>
              </option>
            <?php } ?>
          </select>
        </div>
        <button class="btn btn-default" id="buscarTexto">Buscar texto</button>
      </div>
      <br>
      <div class="row">
        <label>T�tulo do t�pico</label>
        <input class="form-control" id="tituloTop" placeholder="Digite o t�tulo do t�pico">
      </div>
      <br>
      <div class="row">
        <form>
          <textarea name="editor1" id="editorCKEditor" rows="5" cols="80" id="textTop" txtIdAtual="">
                This is my textarea to be replaced with CKEditor.
          </textarea>
          <script>
            // Replace the <textarea id="editor1"> with a CKEditor instance, using default configuration.
            CKEDITOR.replace('editorCKEditor');
          </script>
        </form>
        <br>
        <div class="row ">
          <button type="submit" class="btn btn-default">Confirmar Atualiza��o!!</button>
        </div>
      </div>
    </div>
<!--    <script type="text/javascript">
      var js_site_url = function(urlText) {
        var url = "<?php // echo base_url('"+ urlText +"'); ?>"
        return url;
      }
    </script>-->
    <script type="text/javascript" src="../../assets/js/cartasAdmin.js"></script>

  </body>
</html>
