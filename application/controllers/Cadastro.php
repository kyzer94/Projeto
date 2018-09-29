<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    function __construct() {
        parent::__construct();
//        if(!$this->session->userdata('estou_logado')){
//            redirect('login');
//        }
        $this->load->model('Cadastro_model', 'cadastro');
        //contatos Ã© um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['cadastro'] = $this->cadastro->listar();
        $this->load->view('cadastro', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $cont=0;
        $parcAtual=1;
        
        $mes=$this->input->post('mes');
        $ano=$this->input->post('ano');
        $valor = $this->input->post('valor');
        $parcela = $this->input->post('parcela');
        while ($cont<$parcela){
            if($mes>12){
                $mes=1;
                $ano++;
            }
        //Valor Total
        $valorTotal = $valor*($parcela-$cont);
        $dados['nome'] = $this->input->post('nome');
        $dados['valor'] = $valor;
        $dados['dia'] = $this->input->post('dia');
        $dados['mes'] = $mes;
        $dados['ano'] = $ano;
        $dados['parcAtual'] = $parcAtual;
        $dados['parcela'] = $parcela;
        $dados['valorTotal'] = $valorTotal;
        $this->cadastro->inserir($dados);
        $cont++;
        $mes++;
        $parcAtual++;
        }
        redirect('cadastro');
    }

    public function excluir($id) {
        $this->cadastro->deletar($id);
        redirect('cadastro');
    }

    public function editar($id) {
        $this->load->view('template/header');
        $data['cadastroEditar'] = $this->cadastro->editar($id);
        $this->load->view('cadastroEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $data['idCadastro'] = $this->input->post('idCadastro');
        $data['nome'] = $this->input->post('nome');
        $this->cadastro->atualizar($data);
        redirect('cadastro');
    }

}
