<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class Empresa extends CI_Controller {
    
     public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('id_usuario') ||
             (!$this->session->userdata('logado'))) {
         //$this->login();
            redirect('home/index');
        }else{
            $this->load->model('empresa_model', 'empresa');
        }
            
    }
        
     public function index() {
        $cnpj = $this->session->userdata('cnpj');
        $q = $this->empresa->listaConsultas($cnpj);
        $consult['consultas'] = $q;
        $dados['usuario'] = $this->session->userdata('nome_usuario');
        
        $this->load->view('header');
        $this->load->view('topo', $dados);
        $this->load->view('menu');
        //$this->load->view('sidebar');
        $this->load->view('empresa/index_view', $consult);
        $this->load->view('rodape');
    }

    public function agendar(){
        $ids = $this->input->post('id');
        print_r($ids);
    }
    
    public function efetuar(){
        $ids = $this->input->post('id');
        print_r($ids);
    }
    
    public function cancelar(){
        $ids = $this->input->post('id');
        print_r($ids);
    }
    
}