<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __constructor() {
    parent::construct();
    $arrayTopicosInternos = array();
    $arrayTopicosMasters = array();
  }

  public function index() {
    $this->load->model("connection_dao");
    $arrayTopicosInternos = $this->connection_dao->consultaBd('selTopicoInterno');
    $arrayTopicosMasters = $this->connection_dao->consultaBd('selTopicoMaster');

    $arrayComboTopicos = array();
    foreach ($arrayTopicosInternos as $topInterno) {
      $arrayComboTopicos[] = array(
        "idTop" => intval($topInterno['idtopicoInterno']),
        'text' => $this->connection_dao->arrayTopicosInternosTEXT($topInterno['idtopicoInterno'], $arrayTopicosInternos, $arrayTopicosMasters)
      );
    }

    $dados = array("arrayComboTopicos" => $arrayComboTopicos);

    $this->load->view('admin/init', $dados);
  }

  public function getTxtTituloTopico() {
    $this->load->model("connection_dao");

    //pega id vindo do post
    $arrayRequest = $this->input->post();

    $arrayTopicoInternEscolhido = $this->connection_dao->consultaBd('selTopicoInternoId', $arrayRequest['idTopico']);

    $resp = array('titulo' => $arrayTopicoInternEscolhido['TituloTopico'], 'texto' => $arrayTopicoInternEscolhido['TextoTopico']);
    $resposta = "";
    try {
      if ($resp !== null) {
        $resposta = json_encode(array('success' => true, 'resposta' => $resp));
      } else {
        $resposta = json_encode(array('success' => true, 'resposta' => "O tópico não foi encontrado"));
      }
    } catch (Exception $ex) {
      $resposta = json_encode(array('success' => false, 'msg' => $ex->getMessage()));
    }
    echo $resposta;
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */