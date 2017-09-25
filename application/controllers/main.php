<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
	function __construct(){
		parent::__construct();

	}
	public function index(){
		$this->load->view('headers/librerias');
		$this->load->view('main');
		$this->load->view('footer/footer');
	}
}
