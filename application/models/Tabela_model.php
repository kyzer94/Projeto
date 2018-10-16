<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tabela_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function listar($mes) {
        $this->db->select('*');
        $this->db->from('cadastro');
        if($mes==00){
            
        }else{
        $this->db->where('mes',$mes);
    }
        $this->db->order_by('ano,mes');
        $query = $this->db->get();
        return $query->result();
    }
}