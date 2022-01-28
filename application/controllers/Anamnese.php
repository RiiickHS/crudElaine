<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anamnese extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('clientes_model');
		$this->load->model('anamnese_model');

	}

	public function index()
	{	

		$dados['clientes'] = $this->clientes_model->index();
		$dados['title'] = "Anamnese";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-left', $dados);
		$this->load->view('pages/anamnese', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

    public function new($cli_id)
	{
		$dados['cliente'] = $this->clientes_model->show($cli_id);
		if(!empty($dados['cliente'])){
			$dados['title'] = "Nova Anamnese";

			$this->load->view('templates/header', $dados);
			$this->load->view('templates/nav-left', $dados);
			$this->load->view('errors/anamnese_feita', $dados);
			$this->load->view('templates/footer', $dados);
			$this->load->view('templates/js', $dados);
		}
		$dados['title'] = "Nova Anamnese";


		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-left', $dados);
		$this->load->view('pages/form-anamnese', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

    public function store()
	{
		$anamnese = $_POST;
		$this->anamnese_model->store($anamnese);

		
		redirect("anamnese");
	}

	public function show($cli_id){
		$dados['anamnese'] = $this->anamnese_model->show($cli_id);
		$dados['title'] = 'Ver Anamnese';
		if(empty($dados['anamnese'])){
			$this->load->view('templates/header', $dados);
			$this->load->view('templates/nav-left', $dados);
			$this->load->view('pages/sem-anamnese', $dados);
			$this->load->view('templates/footer', $dados);
			$this->load->view('templates/js', $dados);
		}else{
			$this->load->view('templates/header', $dados);
			$this->load->view('templates/nav-left', $dados);
			$this->load->view('pages/show-anamnese', $dados);
			$this->load->view('templates/footer', $dados);
			$this->load->view('templates/js', $dados);

		}


	}

	public function showGrid(){

		$posts = $this->clientes_model->carregaGrid();

		
		if($posts = $this->clientes_model->carregaGrid()){
			$data = array('responce' => 'success' , 'posts' => $posts);
		}else{
			$data = array('responce' => 'error', 'message' => 'falhou');
		}	
			
		
		echo json_encode($data);
		exit;
	}
}
?>