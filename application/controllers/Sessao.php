<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Sessao extends CI_Controller {
    
        public function __construct()
	    {
		    parent::__construct();
		    $this->load->model('clientes_model');
            $this->load->model('sessao_model');

	    }

        public function index()
	    {
		    $dados['title'] = "Sessão";
            $dados['sessoes'] = $this->sessao_model->index();
		

            $this->load->view('templates/header', $dados);
            $this->load->view('templates/nav-left', $dados);
            $this->load->view('pages/sessao', $dados);
            $this->load->view('templates/footer', $dados);
            $this->load->view('templates/js', $dados);
	    }
        
        public function new($cli_id)
        {
            $dados['cliente'] = $this->clientes_model->show($cli_id);
            $dados['title'] = "Editar Cliente";
            
            $this->load->view('templates/header', $dados);
            $this->load->view('templates/nav-left', $dados);
            $this->load->view('pages/form-sessao', $dados);
            $this->load->view('templates/footer', $dados);
            $this->load->view('templates/js', $dados);
        }

        public function novaSessao(){
            $cliente = $_POST;
            
            $cliente['data_sessao'] = str_replace("/", "-", $_POST['data_sessao']);
    	    $cliente['data_sessao'] = date('Y-m-d', strtotime($cliente['data_sessao']));

            $this->sessao_model->store($cliente);
            redirect('sessao');

        }

        public function showGrid(){

            $posts = $this->sessao_model->carregaGrid();
            
            if($posts = $this->sessao_model->carregaGrid()){
                $data = array('responce' => 'success' , 'posts' => $posts);
            }else{
                $data = array('responce' => 'error', 'message' => 'falhou');
            }	
                
            
            echo json_encode($data);
            exit;
        }
    

    }
?>