<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
        $data['nama'] = 'Cheliza Sriayu Simarsoit';
        $data['nim']  = '201401097';
        $data['kom']  = 'C';
		$this->load->view('hello_world', $data);
	}
    
    public function hello1()
	{
        echo 'hello';
	}

    public function hello2($nama)
	{
        echo 'hello '.$nama;
	}
}
