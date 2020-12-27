<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); // menggunakan helper url

	}

	public function index()
	{
		$this->load->view('V_landing/home');
	}

	public function detailmakan()
	{
		$this->load->view('V_landing/detail_makanan');
	}
	public function detailminum()
	{
		$this->load->view('V_landing/detail_minuman');
	}
	public function detailmukenah()
	{
		$this->load->view('V_landing/detail_mukenah');
	}
}
