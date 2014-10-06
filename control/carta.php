<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Carta extends CI_Controller {

  public function index() {
    $this->load->model("connection_dao");
    
    $topMasterBD = $this->connection_dao->consultaBd('selTopicoMaster');
    $topInternosBD = $this->connection_dao->consultaBd('selTopicoInterno');
    $dados = array("topMasterBD" => $topMasterBD, "topInternosBD" => $topInternosBD);

    $this->load->view('index', $dados);
  }

}
