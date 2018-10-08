<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function listar() {
        $this->db->select('*');
        $this->db->from('cadastro');
//        $this->db->where('mes',$mes);
        $this->db->order_by('ano,mes');
        $query = $this->db->get();
        return $query->result();
    }

    function inserir($c) {
        return $this->db->insert('cadastro', $c);
    }

    function deletar($id) {
        $this->db->where('idCadastro', $id);
        return $this->db->delete('cadastro');
    }
    
    function editar($id) {
        $this->db->where('idCadastro', $id);
        $result = $this->db->get('cadastro');
        return $result->result();
    }
    
    function atualizar($data) {
        $this->db->where('idCadastro', $data['idCadastro']);
        $this->db->set($data);
        return $this->db->update('cadastro');
    }

}