<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
//        if(!$this->session->userdata('estou_logado')){
//            redirect('login');
//        }
        $this->load->model('Home_model', 'home');
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $mes=$this->input->post('mes');
        $dados['home'] = $this->home->listar($mes);
        $this->load->view('home', $dados);
        $this->load->view('template/footer');
    }

   
}
