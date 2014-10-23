<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_items extends MX_Controller {

	public function index()
	{
		$this->items();
	}

	public function items()
	{
		$data['title'] = 'Shop Items';
		$data['module'] = 'Shop_items';
		$data['content'] = 'test_content';

		echo Modules::run('templates/admin', $data);
	}


	//end of class
}
