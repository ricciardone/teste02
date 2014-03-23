<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class  Empresa_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        
    }
    
    public function listaConsultas($cnpj){
        $cond = array('cnpj' => $cnpj);
        $this->db->where($cond);
        return $q  = $this->db->get('consultas')->result();
    }
    
    public function listaConsultasPorPaciente($cpf){
        $cond = array('cpf' => $cpf);
        $this->db->where($cond);
        return $q  = $this->db->get('consultas')->result();
    }
    
    public function agendar($ids){
        $cond = array('cnpj' => $cnpj);
        $this->db->where($cond);
        return $q  = $this->db->get('consultas')->result();
    }
    
  
}