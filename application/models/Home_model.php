<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function listar($mes) {
        $this->db->select('*');
        $this->db->from('cadastro');
        $this->db->where('mes',$mes);
        $this->db->order_by('ano,mes');
        $query = $this->db->get();
        return $query->result();
    }
}