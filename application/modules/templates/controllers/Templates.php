<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends MX_Controller {

 public function admin($data)
 {

 	$this->load->view('admin', $data);
 }



	//end of class
}