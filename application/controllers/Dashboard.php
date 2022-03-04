<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        //cache controling
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        
    }
    function user_loged(){
        if($this->session->userdata('user_is_login')==1):
        return TRUE;
        else: 
        return FALSE;
        endif;
    }
    public function index(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Dashboard';
            $data['page_name']  ='dashboard';
            $this->load->view('user/home',$data);
        endif;        
    }
    public function point(){
        $umail=$this->input->post('emailToUpdatePoints');
        if($this->user_loged()):
        header('Content-Type: application/json');
        $this->db->set('points','points+1',FALSE);
        $this->db->where('uid',$umail);
        $this->db->update('pont_tbl');
        $point   = $this->db->get_where('pont_tbl' , array('uid'=>$umail))->row();
        $tpoint  = ($point->points+$point->referral)-($point->redeemed+$point->reversal);
        $edata=array();
        $edata['success']   = true;
        $edata['points']    = $tpoint;
        echo json_encode($edata);
        endif;
    }
    public function refer_and_earn(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Refer & Earn';
            $data['page_name']  ='refer-and-earn';
            $this->load->view('user/home',$data);
        endif;        
    }
    public function redeem_points(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Redeem Points';
            $data['page_name']  ='redeem-points';
            $this->load->view('user/home',$data);
        endif;         
    }

    public function redeem(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
        header('Content-type: application/json');    
        $data=array();
        $data['desc']='THis is demo <div class="pointsData">5</div>';
        $data['getDetail']=array(array('5'=>5),array('10'=>10),array('20'=>20));
        echo json_encode($data);
        endif;         
    }
    
    public function statistics(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['reports']    = $this->db->get_where('all_point',array('uid'=>$this->session->userdata('user_email')))->result_array();
            $data['page_title']  ='Statistics Report';
            $data['page_name']  ='statistics';
            $this->load->view('user/home',$data);
        endif;         
    }
    public function my_profile(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='My Profile';
            $data['page_name']  ='my-profile';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    
     public function edit_profile($param=''){
         
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            if($param=='update'):
            $idp                    = $this->input->post('id');
            $udata['fname']         = $this->input->post('first_name');
            $udata['lname']         = $this->input->post('last_name');
            $udata['cnumber']       = $this->input->post('mobile_no');
            $udata['dob']           = $this->input->post('dob');
            $udata['gender']        = $this->input->post('gender');
            $udata['address']       = $this->input->post('address');
            $udata['city']          = $this->input->post('city');
            $udata['state']         = $this->input->post('state');
            $udata['country']       = $this->input->post('country');
            $udata['zip']           = $this->input->post('zipcode');
            $udata['pimage']        = $this->input->post('profile_image');
            $udata['pal_email']     = $this->input->post('paypal_email');
            $udata['pbit_address']  = $this->input->post('bitcoin_address');
            $udata['fprofile']      = $this->input->post('fb_url');
            $udata['instapro']      = $this->input->post('insta_url');
            $this->db->where('uid',$idp);
            $this->db->update('user',$udata);
            redirect('/dashboard/my_profile');
            else:    
            $data['page_title']  ='Edit Profile';
            $data['page_name']  ='edit-profile';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
            endif;
        endif;         
    }
    public function coupons(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Apply Coupons';
            $data['page_name']  ='coupons';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    public function settings(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Settings';
            $data['page_name']  ='settings';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    public function giveaway(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Giveaways';
            $data['page_name']  ='giveaway';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    public function daily_bonus(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Daily Bonus';
            $data['page_name']  ='daily-bonus';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
     public function spin_and_win(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Spin & Win';
            $data['page_name']  ='spin-and-win';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    public function top_offers(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Top Offers';
            $data['page_name']  ='top-offers';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    public function offerwalls(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Offer Walls';
            $data['page_name']  ='offerwalls';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    public function surveys(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Surveys';
            $data['page_name']  ='surveys';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    public function paid_surveys(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Paid Surveys';
            $data['page_name']  ='paid-surveys';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    public function mobile_offers(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Mobile Offers';
            $data['page_name']  ='mobile-offers';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
     public function social_offers(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Social Offers';
            $data['page_name']  ='social-offers';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    public function video_ads(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Video Ads';
            $data['page_name']  ='video-ads';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    public function notifications(){
        if (!$this->user_loged())
            redirect(base_url(), 'refresh');
        if ($this->user_loged()):
            $data['page_title']  ='Notifications';
            $data['page_name']  ='notifications';
            $data['profile']    =$this->db->get_where('user' , array('email'=>$this->session->userdata('user_email')))->row();
            $this->load->view('user/home',$data);
        endif;         
    }
    public function cpabuild_api(){
        if($this->user_loged()):
        $userid=$this->web_model->get_emailtoid($this->session->userdata('user_email'));
        echo $this->web_model->cpd_build($userid);
        else:
        echo "Login first";
        endif;
    }
}
