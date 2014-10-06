<?php

class connection_dao extends CI_Model {

  private $estadoDoSistema = 'test';
  protected $mysql;

  public function conectaBd() {

    $arrayBanco = $this->obterDatabaseConfig();

    $this->mysql = mysqli_connect($arrayBanco[$this->estadoDoSistema]['hostname'], $arrayBanco[$this->estadoDoSistema]['username'], $arrayBanco[$this->estadoDoSistema]['password'], $arrayBanco[$this->estadoDoSistema]['database']
    );

    if (mysqli_connect_errno($this->mysql)) {
      echo "Banco de Dados indispon�vel";
      die();
    }
  }

  public function consultaBd($consulta, $param1 = null, $param2 = null) {
//    TopicoMaster
    $sql = array(
      'selTopicoMaster' => 'SELECT * FROM `cartaDeServico_topicoMaster`;',
      'selTopicoMasterId' => 'SELECT `idtopicoMaster`, `btn_titulo`, `ModalTitulo`, `ModalTextoBody` FROM `cartaDeServico_topicoMaster` WHERE `idtopicoMaster` = ' . $param1 . ';',
//    TopicoInterno
      'selTopicoInterno' => 'SELECT * FROM  `cartaDeServico_topicoInterno`;',
      'selTopicoInternoId' => 'SELECT  `idtopicoInterno` ,  `topicoMaster_idtopicoMaster` ,  `TituloTopico` ,  `TextoTopico` ,  `topicoInterno_idtopicoInterno` FROM  `cartaDeServico_topicoInterno` WHERE  `idtopicoInterno` = ' . $param1 . ";");

    $this->conectaBd();

//Executa o sql  
    $resultQuery = mysqli_query($this->mysql, $sql[$consulta]);

    $resultado = array();

//Retorna o resultado  
    while ($item = mysqli_fetch_assoc($resultQuery)) {
      $resultado[] = $item;
    }

//desconecta
    mysqli_close($this->mysql);

    return $resultado;
  }

  private function obterDatabaseConfig() {

    /**
     * Configuração da Base do Sistema de Eventos
     */
    $databaseConfig['production']['hostname'] = 'bdsites.ufma.br';
    $databaseConfig['production']['username'] = 'pppg_site';
    $databaseConfig['production']['password'] = 'c@r@mb@!.pppg';
    $databaseConfig['production']['database'] = 'pppg_db';
    $databaseConfig['production']['dbdriver'] = 'pdo_mysql';
    $databaseConfig['production']['charset'] = 'utf8';

    $databaseConfig['test']['hostname'] = 'localhost';
    $databaseConfig['test']['username'] = 'root';
    $databaseConfig['test']['password'] = 'root';
    $databaseConfig['test']['database'] = 'pppg_db';
    $databaseConfig['test']['dbdriver'] = 'pdo_mysql';
    $databaseConfig['test']['charset'] = 'utf8';

    return $databaseConfig;
  }

  public function arrayTopicosInternosTEXT($id, $arrayIntern, $arrayMaster, $textEmFormacao = null) {
    //captura texto da linha
    if ($textEmFormacao === null) {
      $textEmFormacao = ' - ' . $arrayIntern[$id - 1]['TituloTopico'];
    } else {
      $textEmFormacao = ' - ' . $arrayIntern[$id - 1]['TituloTopico'] . $textEmFormacao;
    }
    //verifica se h� algum nivel maior
    $a = $arrayIntern[$id - 1]['topicoInterno_idtopicoInterno'];
    if ($arrayIntern[$id - 1]['topicoInterno_idtopicoInterno'] === null) {
      $idMaster = intval($arrayIntern[$id - 1]['topicoMaster_idtopicoMaster']);
      $txtMaster = $arrayMaster[$idMaster - 1]['ModalTitulo'];
      $textEmFormacao = $txtMaster . $textEmFormacao;
    } else {
      $textEmFormacao = $this->arrayTopicosInternosTEXT($arrayIntern[$id - 1]['topicoInterno_idtopicoInterno'], $arrayIntern, $arrayMaster, $textEmFormacao);
    }
    return $textEmFormacao;
  }

}

?>
