<?php

class Faturamento extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('clientes_model');
		$this->load->model('sessao_model');

	}

    public function index()
    {   
        $dados['title'] = "Faturamento";

        $this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-left', $dados);
		$this->load->view('pages/faturamento', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
    }

    public function fatValores()
    {
        $posts = $this->sessao_model->fatValores();

        if($posts = $this->sessao_model->fatValores()){
			$data = array('responce' => 'success' , 'posts' => $posts);
		}else{
			$data = array('responce' => 'error', 'message' => 'falhou');
		}	
			
		
		echo json_encode($data);
        exit;
    }
}

?>