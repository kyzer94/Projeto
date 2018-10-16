<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tabela extends CI_Controller {

    function __construct() {
        parent::__construct();
//        if(!$this->session->userdata('estou_logado')){
//            redirect('login');
//        }
        $this->load->model('Tabela_model', 'tabela');
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $mes=$this->input->get('mes');
        $dados['tabela'] = $this->tabela->listar($mes);
        $this->load->view('tabela', $dados);
        $this->load->view('template/footer');
    }

   
}
