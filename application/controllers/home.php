<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index(){	
		
		  $data['title']   = 'My nice title';
		  $data['content'] = 'Goodbye World!'; // never had a bad day? :P
		  $this->hydrant->render('index.html', $data);
		
	}
	
}