<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
    	parent::__construct();
        $this->load->model('web_model');
        $this->load->database();
		$this->load->dbutil();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        //cache controling
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }
	public function index()
	{
	    if($this->session->userdata('user_is_login')==1):
	        $data['login']      = true;
	        $data['profile']    = $this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
	        $data['points']     = $this->db->get_where('pont_tbl' , array('uid'=>$this->session->userdata('user_email')))->row();
	    else:
	        $data['login']      = false;
	    endif;
		$this->load->view('home',$data);
	}
	public function test(){
		$this->db->select("*");
		$this->db->from("user");		  
		$q = $this->db->get();
		echo $q->result();
	}
}
