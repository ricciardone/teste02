<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class Consultas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('session_id') ||
             (!$this->session->userdata('logado'))) {
         //$this->login();
          //  redirect('home/index');
        }else{
            
        }
    }
    

    public function index() {
        $dados['usuario'] = $this->session->userdata('nome_usuario');
        $this->load->view('header');
        $this->load->view('topo', $dados);
        $this->load->view('menu');
        //$this->load->view('sidebar');
        $this->load->view('consultas/index_view');
        $this->load->view('rodape');
    }



}