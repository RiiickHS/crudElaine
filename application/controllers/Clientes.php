<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('clientes_model');

	}

	public function index()
	{	

		$dados['clientes'] = $this->clientes_model->index();
		$dados['title'] = "Clientes";

		
		// $cliente['data_nascimento'] = str_replace("-", "/", $_POST["data_nascimento"]);
    	// $cliente['data_nascimento'] = date('d-m-Y', strtotime($cliente['data_nascimento']));


		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-left', $dados);
		$this->load->view('pages/clientes', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function new()
	{
		$dados['title'] = "Novo Cliente";


		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-left', $dados);
		$this->load->view('pages/form-clientes', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function store()
	{
		$cliente = $_POST;

		$cliente['data_nascimento'] = str_replace("/", "-", $cliente["data_nascimento"]);
    	$cliente['data_nascimento'] = date('Y-m-d', strtotime($cliente['data_nascimento']));

		$this->clientes_model->store($cliente);
		redirect("clientes");
	}

	public function edit($cli_id)
	{
		$dados['cliente'] = $this->clientes_model->show($cli_id);
		$dados['title'] = "Editar Cliente";
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-left', $dados);
		$this->load->view('pages/form-clientes', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function update($cli_id)
	{
		$cliente = $_POST;
		$this->clientes_model->update($cli_id, $cliente);
		redirect("clientes");
	}

	public function delete($cli_id)
	{
		$this->clientes_model->destroy($cli_id, $cliente);
		redirect("clientes");
	}

	public function show($cli_id){
		$dados['cliente'] = $this->clientes_model->show($cli_id);
		$dados['title'] = 'Ver Cliente';

			$this->load->view('templates/header', $dados);
			$this->load->view('templates/nav-left', $dados);
			$this->load->view('pages/show-clientes', $dados);
			$this->load->view('templates/footer', $dados);
			$this->load->view('templates/js', $dados);



	}

	public function showGrid(){

		$posts = $this->clientes_model->carregaGrid();

		
		if($posts = $this->clientes_model->carregaGrid()){
			$data = array('responce' => 'success' , 'posts' => $posts);
		}else{
			$data = array('responce' => 'error', 'message' => 'falhou');
		}	
			
		$url = base_url();
		
		echo json_encode($data);
		exit;
	}
}

?>