<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index(){	
	  $data['title']   = 'My nice title';
	  $data['content'] = 'home/index.html';
	  $this->load->view('layouts/application.html', $data);	
	}
	
}