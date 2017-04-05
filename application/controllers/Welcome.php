<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('menu');
        $this->data['pagetitle'] = 'lab8 joint';
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
        //$this->load->helper('formfields');
        $this->data['title'] = 'lab8 joint';
        $this->data['pagebody'] = 'welcome_message';
        $this->render();

	}

}

