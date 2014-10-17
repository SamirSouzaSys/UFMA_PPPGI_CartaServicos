<?php

require_once 'connection_dao.php';

$idAlterar = $_POST['idTopico'];
$novoTitulo = $_POST['titulo'];
$novoTexto = $_POST['texto'];

$conexao = new connection_dao();
$conexao->conectaBd();

//$idAlterar = utf8_decode($idAlterar);
$novoTitulo = utf8_decode($novoTitulo);
//$novoTexto = utf8_decode($novoTexto);


//$result = json_encode(array_map('htmlentities',$conexao->getTopicoInternoData($idRequisitado)));
$result = $conexao->setTopicoInternoData($idAlterar,$novoTitulo,$novoTexto);
//$result = json_encode(utf8_encode($conexao->getTopicoInternoData($idRequisitado)));
echo utf8_encode($result);
?>
