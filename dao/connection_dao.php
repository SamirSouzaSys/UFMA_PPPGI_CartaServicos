<?php

class connection_dao {

  private $estadoDoSistema = 'test'; //production
  protected $mysql;
  private $arrayMaster = null;
  private $arrayIntern = null;

  public function conectaBd() {

    $arrayBanco = $this->obterDatabaseConfig();

    $this->mysql = mysqli_connect($arrayBanco[$this->estadoDoSistema]['hostname'], $arrayBanco[$this->estadoDoSistema]['username'], $arrayBanco[$this->estadoDoSistema]['password'], $arrayBanco[$this->estadoDoSistema]['database']
    );

    if (mysqli_connect_errno($this->mysql)) {
      echo "Banco de Dados indisponível";
      die();
    }
  }

  public function consultaBd($consulta, $param1 = null, $param2 = null, $param3 = null) {
//    TopicoMaster
    $sql = array(
      'selTopicoMaster' => 'SELECT * FROM `cartaDeServico_topicoMaster`;',
      'selTopicoMasterId' => 'SELECT `idtopicoMaster`, `btn_titulo`, `ModalTitulo`, `ModalTextoBody` FROM `cartaDeServico_topicoMaster` WHERE `idtopicoMaster` = ' . $param1 . ';',
//    TopicoInterno
      'selTopicoInterno' => 'SELECT * FROM  `cartaDeServico_topicoInterno`;',
      'selTopicoInternoId' => 'SELECT  `idtopicoInterno` ,  `topicoMaster_idtopicoMaster` ,  `TituloTopico` ,  `TextoTopico` ,  `topicoInterno_idtopicoInterno` FROM  `cartaDeServico_topicoInterno ` WHERE  `idtopicoInterno` = ' . $param1 . ';',
      'updTopicoInternoId' => 'UPDATE `cartaDeServico_topicoInterno` SET `TituloTopico` = "' . $param1 . '", `TextoTopico` =  "' . $param2 . '" WHERE `idtopicoInterno` = "' . intval($param3) . '";');


//    UPDATE  `pppg_db`.`cartaDeServico_topicoInterno` SET  `TituloTopico` = 'Formas de Comunicação com o Usuário',
//`TextoTopico` =  '<p><strong>aaaaaFormas de Comunicação com o Usuário:</strong></p>
//
//<p> Site:<br />
//<a href="http://www.pppg.ufma.br/">http://www.pppg.ufma.br/</a><br />
//Fale Conosco:<br />aaaaa
//<a href="http://www.pppg.ufma.br/index.php?content=scrapbook">http://www.pppg.ufma.br/index.php?content=scrapbook</a></p>' WHERE  `cartaDeServico_topicoInterno`.`idtopicoInterno` =2;

    $this->conectaBd();

//Executa o sql  
//    echo($sql[$consulta]);
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
     * ConfiguraÃ§Ã£o da Base do Sistema de Eventos
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

  public function arrayTopicosInternosTextBreadCumb() {
    $this->arrayMaster = $this->consultaBd(selTopicoMaster);
    $this->arrayIntern = $this->consultaBd(selTopicoInterno);
//captura texto da linha
    $arrayComboTopicos = array();
    foreach ($this->arrayIntern as $topInterno) {
      $arrayComboTopicos[] = array(
        "idTop" => intval($topInterno['idtopicoInterno']),
        'text' => $this->textBreadcumbCombo($topInterno['idtopicoInterno'])
      );
    }
    return $arrayComboTopicos;
  }

  private function textBreadcumbCombo($id, $textEmFormacao = null) {
    if ($textEmFormacao === null) {
      $textEmFormacao = ' - ' . $this->arrayIntern[$id - 1]['TituloTopico'];
    } else {
      $textEmFormacao = ' - ' . $this->arrayIntern[$id - 1]['TituloTopico'] . $textEmFormacao;
    }
//verifica se há algum nivel maior
    if ($this->arrayIntern[$id - 1]['topicoInterno_idtopicoInterno'] === null) {
      $idMaster = intval($this->arrayIntern[$id - 1]['topicoMaster_idtopicoMaster']);
      $txtMaster = $this->arrayMaster[$idMaster - 1]['ModalTitulo'];
      $textEmFormacao = $txtMaster . $textEmFormacao;
    } else {
      $textEmFormacao = $this->textBreadcumbCombo($this->arrayIntern[$id - 1]['topicoInterno_idtopicoInterno'], $textEmFormacao);
    }
    return $textEmFormacao;
  }

  public function getTopicoInternoData($id) {
    $this->arrayIntern = $this->consultaBd(selTopicoInterno);

    $titulo = ($this->arrayIntern[intval($id) - 1]['TituloTopico'] == NULL) ? '' : $this->arrayIntern[intval($id) - 1]['TituloTopico'];
    $texto = ($this->arrayIntern[intval($id) - 1]['TextoTopico'] == NULL) ? '' : $this->arrayIntern[intval($id) - 1]['TextoTopico'];

    $TopicoInternoData = $titulo . '9------------------9' . $texto;

    return $TopicoInternoData;
  }

  public function setTopicoInternoData($idAlterar, $novoTitulo, $novoTexto) {
    $this->arrayIntern = $this->consultaBd(selTopicoInterno);
    if ($this->arrayIntern != null) {
      if ($this->arrayIntern[intval($idAlterar) - 1]['idtopicoInterno'] == $idAlterar) {
//        return $this->arrayIntern = $this->consultaBd(updTopicoInternoId,$novoTitulo,$novoTexto,$id);
        return $this->consultaBd('updTopicoInternoId', $novoTitulo, $novoTexto, $idAlterar);
      }
    }

    return -1;
  }

}

?>
