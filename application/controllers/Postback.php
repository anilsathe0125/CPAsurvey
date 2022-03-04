<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postback extends CI_Controller {

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
        $this->load->helper('form');
        $this->load->helper('url');
        //cache controling
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        
    }

    public function index(){
        $dkey='d91ca3d49422434634315fa95fe60d6a';
        //CPABuild Data Store 
        $key                = $this->input->get('key');
        $data['offerId']    = $this->input->get('offer_id');
        $data['payout']     = $this->input->get('payout');
        $data['ipAddress']  = $this->input->get('ip');
        $data['status']     = $this->input->get('status');
        $data['unix']       = $this->input->get('unix');
        $data['subId1']     = $this->input->get('s1');
        $data['subId2']     = $this->input->get('s2');
        $data['leadId']     = $this->input->get('lead_id');
        $data['cc']         = $this->input->get('country_code');
        //POINT Data Store
        $pdata='points+'.($this->input->get('payout')*100);
        if($dkey==$key):
            $email              = $this->web_model->get_idtoemail($this->input->get('s1'));
            if($data['status']==1):
                $this->db->insert('cpa_build', $data);
                $this->db->set('points',$pdata,FALSE);
                $this->db->where('uid',$email);
                $this->db->update('pont_tbl');
                $rdata['point']=($this->input->get('payout')*100);
	            $rdata['time']=Date('H:i:s',time());
	            $rdata['date']=Date('Y-m-d',time());
	            $rdata['title']='offers_completed';
	            $rdata['uid']=$email;
	            $rdata['comment']='CPABuild Offer';
	            $rdata['status']=$data['status'];
	            $this->db->insert('all_point',$rdata);
            else:
               $revdata='reversal+'.($this->input->get('payout')*100);    
                $this->db->insert('cpa_build', $data);
                $this->db->set('reversal',$revdata,FALSE);
                $this->db->where('uid',$email);
                $this->db->update('pont_tbl');
                $rdata['point']=($this->input->get('payout')*100);
	            $rdata['time']=Date('H:i:s',time());
	            $rdata['date']=Date('Y-m-d',time());
	            $rdata['title']='offers_reversal';
	            $rdata['uid']=$email;
	            $rdata['comment']='CPABuild Offer Reversal';
	            $rdata['status']=$data['status'];
	            $this->db->insert('all_point',$rdata);
            endif;
        else:
            echo "wrong method used missing key";
        endif;
    }
}
