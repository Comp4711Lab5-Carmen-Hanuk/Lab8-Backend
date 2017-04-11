<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2016, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

	/**
	 * Constructor.
	 * Establish view parameters & load common helpers
	 */
	function __construct()
	{
		parent::__construct();

				// get the user role
		//$this->data['userrole'] = $this->session->userdata('userrole');
		//if ($this->data['userrole'] == NULL) $this->data['userrole'] = '?';
	}

	/**
	 * Render this page
	 */
	function render($template = 'template')
	{
		
	$this->parser->parse($template, $this->data);
	}

}
