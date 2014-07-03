<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();
		$this->load->helper('form');
		$this->load->helper('url');	
	}
	
	function index()
	{
		$data = array('css'=>'<link rel="stylesheet" type="text/css" src="'.base_url().'system/application/uploadify/uploadify.css"/>','src'=>'<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
		<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script><script type="text/javascript" language="javascript" src="'.base_url().'system/application/uploadify/jquery.uploadify.v2.1.0.min.js"></script>');
		$this->load->view('welcome_message',$data);
	}
	
	function uploadify()
	{
		$file = $this->input->post('filearray');
		$data['json'] = json_decode($file);
		$this->load->view('uploadify',$data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */