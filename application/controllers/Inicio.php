<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


	public function index()
	{
		$this->load->view('Inicio');
    }
    
    public function regi()
	{
		$this->load->view(' Incio/Registro');
	}
}