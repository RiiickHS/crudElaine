<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
		$dados['title'] = "Início";
		
		
		// $this->load->model('clientes_model');	
		// $this->load->model('sessao_model');
		//$retorno = $this->sessao_model->dataRetorno();
		
		

		// $data = date('Y-m-d', strtotime('+2 day'));
		


		// $dataAtual = date('d-m-Y');
		
		// foreach($retorno as $data){
		// 	$data_retorno = $data->data_sessao;
		// 	$cliente_retorno = $data->cli_id;
		
		// }


		// $i = $data_retorno;	
		// $time = strtotime($i);

		// $dataFinal = new Datetime(date('Y-m-d', $time));
		// $dataAtual = new Datetime(date('Y-m-d'));

		// $retornodias = $dataFinal->diff($dataAtual);
		
		// $final = $retornodias->days;
		
		// $dados['retorno'] = "";
		
		// if($final == 15 || $final > 15){
		// 	$dados['retorno'] = $cliente_retorno;
		// }

		$this->load->view('templates/nav-left', $dados);
		$this->load->view('templates/header', $dados);
		$this->load->view('pages/home', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
}
