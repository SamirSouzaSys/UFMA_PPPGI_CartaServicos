<?php

require_once 'connection_dao.php';

$idRequisitado = $_POST['idTopico'];

$conexao = new connection_dao();
$conexao->conectaBd();

//$result = json_encode(array_map('htmlentities',$conexao->getTopicoInternoData($idRequisitado)));
$result = $conexao->getTopicoInternoData($idRequisitado);
//$result = json_encode(utf8_encode($conexao->getTopicoInternoData($idRequisitado)));
echo $result;
?>
