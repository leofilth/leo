<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MiControlador extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->layout->setLayout('template');
	}
	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('mivista');
		$this->layout->view('vista_index');
	}

	/**
	 *
	 */
	public function nosotros()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('mivista');
		//$this->layout->setLayout('template2');//se establece nuevo layout para esta vista
		$this->layout->setTitle('nosotros page');
		$this->layout->setKeywords('mas keywords');
		$this->layout->setDescripcion('metadescripcion');
		//llamamos a una librería js
		$this->layout->js(array(base_url()."public/js/libreria.js"));
		//llamamos a una librería css
		$this->layout->css(array(base_url()."public/css/estilos2.css"));
		$saludo="hola saludando ando coriendo desnudo por la casa";
		$this->layout->view('nosotros',compact('saludo'));
	}
	public function otro()
	{
		$this->layout->view('vista_otro');
	}
}