<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class  Home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        
    }

    public function index() {
        
    }
    
    
    public function getUser($user , $senha) {
        $cond = array('usuario' => $user,  'senha' => $senha);
        $this->db->where($cond);
        return $q  = $this->db->get('usuarios')->result();
        //$q  = $this->db->get('usuarios')->result();
        //print_r($q);        
    }
    
    
    public function getEmpresa($cnpj , $senha) {
        $cond = array('cnpj' => $cnpj,  'senha' => $senha);
        $this->db->where($cond);
        return $q  = $this->db->get('fornecedores')->result();
//        $q  = $this->db->get('fornecedores')->result();
//        print_r($q);        
    }
        
    
    public function getPaciente($cpf) {
        $cond = array('cpf'=> $cpf);
        $this->db->where($cond);
        return $q  = $this->db->get('pacientes')->result();
//        $q  = $this->db->get('fornecedores')->result();
//        print_r($q);        
    }
        
    
    



}