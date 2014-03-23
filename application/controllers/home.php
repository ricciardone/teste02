<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('home_model', 'home');
        
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('home/index_view');
        $this->load->view('rodape');
    }

    public function login() {
        $login = $this->input->post('login');
        $senha = $this->input->post('senha');
        $result = $this->home->getUser($login, $senha);
        foreach ($result as $linha){
            $sess = array(
                   'nome_usuario'  => $linha->nome,
                   'logado'     => TRUE,
                   'id_usuario' => $linha->id_usuario
               );
            
            //$dados['usuario'] =  $linha->nome;
            $this->session->set_userdata($sess);            
        }
        redirect('consultas');
        
    }
    public function logout() {
        $this->session->sess_destroy();
        redirect('home');
    }
    public function login_empresa(){
        $cnpj = $this->input->post('cnpj');
        $senha = $this->input->post('senha');
        $result = $this->home->getEmpresa($cnpj, $senha);
        
        foreach ($result as $linha){
            $sess = array(
                   'nome_usuario'  => $linha->razaosocial,
                   'logado'     => TRUE,
                   'id_usuario' => $linha->id,
                    'cnpj'      => $linha->cnpj
               );
        $this->session->set_userdata($sess);
    }
     redirect('empresa');
    }
    
    public function login_paciente(){
        $cpf = $this->input->post('cpf'); 
        $result = $this->home->getPaciente($cpf);
       
        foreach ($result as $linha){
            $sess = array(
                   'nome_usuario'  => $linha->NOME,
                   'logado'     => TRUE,
                   'id_usuario' => $linha->ID,
                    'cpf'      => $linha->CPF
               );
        $this->session->set_userdata($sess);
    }
     redirect('paciente');
    }

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */