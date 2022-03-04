<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

/**
 * Web Survey Tracking Pannel
 * ---------------------- Anil --------------------
 * ------- Web Prortal --------
 * - Web Survey Tracking system -
 *
 * @package     Anil - Web Survey Tracking Pannel
 * @author      Anil /Akshay Saini
 * @copyright   Copyright (c) 2020 AE,
 *
 **/
 
    function __construct() {
        parent::__construct();
        $this->load->model('web_model');
        $this->load->model('Adminmodel'); 
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        //cache controling
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }
    
	public function index($type='')
	{ 
	    if($type=="asdk"):
    		if($this->session->userdata('id')):
	    		$data['settinglist'] = $this->Adminmodel->settings_data();
		    	redirect(base_url().'/asakdk/dashboard',$data);
		    else:
			    $data['settinglist'] = $this->Adminmodel->settings_data();
			    $this->load->view("/asakdk/login",$data);
		    endif;
	    else:
	    $result=array();
	    header('Content-Type: application/json');
	    if(isset($_GET['logout'])):
	    $this->session->unset_userdata('');
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url() , 'refresh');
	    else:
	    $token = $this->input->post('token');
     	$email = $this->input->post('registerUser[email]');
	    $agree = $this->input->post('registerUser[agree]');
	    $refId = $this->input->post('registerUser[refId]');
	    if($token!='' && $token!=null && !empty($token)):
	    require_once 'Google/vendor/autoload.php';
        $client = new Google_Client(['client_id' => '953539035530-4h4ag0g5p9t60ulf9eqfk9or4ekg77lk.apps.googleusercontent.com']);
        $payload = $client->verifyIdToken($token);
        if($payload):
        $gdata['fname']         = $payload['given_name'];
        $gdata['lname']         = $payload['family_name'];
        $gdata['email']         = $payload['email'];
        $gdata['email_verify']  = 1;
        $gdata['rfid']          = md5($payload['email']);
        $gdata['pimage']        = $payload['picture'];
        $pdata['uid']           = $payload['email'];
        $pdata['points']        = 5;
        if($this->web_model->check_email($payload['email'])):
            if($this->web_model->check_ban($payload['email'])):
            $this->web_model->daily_login($payload['email']);
	        $this->session->set_userdata('user_is_login','1');
            $this->session->set_userdata('user_email',$payload['email']);
            $result['success']= true;
            $result['message']= 'user already present in our system';
            else:
            $result['success']= false;
            $result['message']= 'user id is baned in our system';
            endif;
        else:
        $this->db->insert('user', $gdata);
        $this->db->insert('pont_tbl',$pdata);
        $rdata['point']=$pdata['points'];
	    $rdata['time']=Date('H:i:s',time());
	    $rdata['date']=Date('Y-m-d',time());
	    $rdata['title']='daily_login';
	    $rdata['uid']=$email;
	    $rdata['comment']='Daily Login';
	    $rdata['status']=1;
	    $this->db->insert('all_point',$rdata);
	    if($refId!='' && $refId!=null && !empty($refId)):
        $this->web_model->ref_points($email,$refId);
	    endif;
	    $this->session->set_userdata('user_is_login','1');
        $this->session->set_userdata('user_email',$payload['email']);
        $result['success']= true;
        $result['message']= 'new user register in our system';
        endif;
        else:
        $result['success']= false;
        $result['message']= 'Please re-try loging faild';        
        endif;
        else:
        if($agree=='on'):
            if($this->web_model->check_email($email)):
                if($this->web_model->check_ban($email)):
                $this->web_model->daily_login($email);
                $this->session->set_userdata('user_is_login','1');
                $this->session->set_userdata('user_email',$email);
                $result['success']= true;
                $result['message']= 'user already present in our system';
                else:
                $result['success']= false;
                $result['message']= 'user id is baned in our system';
                endif;                    
            else:
            $data['pimage']     = '/u_assets/img/user_images/profile_image'.rand(1,9).'.png';   
            $data['email']      = $email;
            $data['rfid']       = md5($email);
            $pdata['uid']       = $email;
            $pdata['points']    = 5;
            $this->db->insert('pont_tbl',$pdata);
            $this->db->insert('user', $data);
            $rdata['point']=$pdata['points'];
	        $rdata['time']=Date('H:i:s',time());
	        $rdata['date']=Date('Y-m-d',time());
	        $rdata['title']='daily_login';
	        $rdata['uid']=$email;
	        $rdata['comment']='Daily Login';
	        $rdata['status']=1;
	        $this->db->insert('all_point',$rdata);
            $this->session->set_userdata('user_is_login','1');
            $this->session->set_userdata('user_email',$email);
            if($refId!='' && $refId!=null && !empty($refId)):
            $this->web_model->ref_points($email,$refId);
	        endif;
            $result['success']= true;
            $result['message']= 'new user register in our system';
            endif;
        else:
            $result['success']= false;
            $result['message']= 'Please indicate that you accept the privacy and terms';
        endif;
        endif;
        echo json_encode($result);
        endif;
      endif;  
	}
	
	public function adminlogin(){
		$email= $this->input->post('email');
		$password= $this->input->post('password');
		$where='password="'.$password.'" and email="'.$email.'"';
		$result = $this->Adminmodel->admin_varify($where);
		if(count($result) > 0):
			$this->session->set_userdata('email',$result[0]->email);
			$this->session->set_userdata('id',$result[0]->id);	
			$this->session->set_userdata('name',$result[0]->fullname);			
			echo '100';
		else:
			echo '200'; 
		endif;
	}

	public function login_admin(){
		$email= $this->input->post('email');
		$password= $this->input->post('password');
		$where='password="'.$password.'" and email="'.$email.'"';
		$result = $this->Adminmodel->admin_varify($where);
		if(count($result) > 0):
			$this->session->set_userdata('email',$result[0]->email);
			$this->session->set_userdata('id',$result[0]->id);	
			$this->session->set_userdata('name',$result[0]->fullname);			
			echo '100';
		else:
			echo '200'; 
		endif;
	}	
}
