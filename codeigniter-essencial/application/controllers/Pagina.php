<?php
defined('BASEPATH') or exit('No direct script access allowed!');

class Pagina extends CI_Controller {
	
	function __construct()	{
		parent::__construct();
		
		$this->load->helper('url');
	}

	public function index() {
		$dados['title'] = 'Home';
		$this->load->view('home', $dados);
	}

	public function clientes() {
		$dados['title'] = 'Clientes';
		$this->load->view('clientes', $dados);
	}

	public function servicos()	{
		$dados['title'] = 'Serviços';
		$this->load->view('servicos');
	}

	public function sobre()	{
		$dados['title'] = 'Sobre';
		$this->load->view('sobre');
	}

	public function contato()	{
		$dados['title'] = 'Contato';
		$this->load->view('contato');
	}
}