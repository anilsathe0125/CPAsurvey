<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
 

class Web_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
        $this->load->model('http_model');
    }
		/* clear cache*/	
	function clear_cache()
	{
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
	}
	public function daily_login($email){
	  $date=Date('Y-m-d',time());
	  $login=$this->db->get_where('all_point',array('uid'=>$email,'date'=>$date,'title'=>'daily_login'))->num_rows();
	  if($login==0){
	  $data['point']=rand(2,4);
	  $data['time']=Date('H:i:s',time());
	  $data['date']=Date('Y-m-d',time());
	  $data['title']='daily_login';
	  $data['uid']=$email;
	  $data['comment']='Daily Login';
	  $data['status']=1;
	  $points='points+'.$data['point'];
	  $this->db->insert('all_point',$data);
	  $this->db->set('points',$points,FALSE);
      $this->db->where('uid',$email);
      $this->db->update('pont_tbl');
	  }
	}
	
    public function ref_points($email,$refId){
      $rows = $this->db->get_where('pont_tbl',array('uid'=>$email))->row();
      if($rows->points<6):
      $rfdata['point']=10;
	  $rfdata['time']=Date('H:i:s',time());
	  $rfdata['date']=Date('Y-m-d',time());
	  $rfdata['title']='referral';
	  $rfdata['uid']=$this->get_reftoemail($refId);
	  $rfdata['ref_email']=$email;
	  $rfdata['comment']='Referral Points';
	  $rfdata['status']=1;
	  $points='referral+10';
	  $this->db->insert('all_point',$rfdata);
	  $this->db->set('referral',$points,FALSE);
      $this->db->where('uid',$this->get_reftoemail($refId));
      $this->db->update('pont_tbl');
      endif;
	}
	
	function check_email($email='') {
        $result = FALSE;
        if($email !='' && $email != NULL):
            $this->db->where('email',$email);
            $rows = $this->db->get('user')->num_rows();
            if($rows > 0):
                $result = TRUE;
            endif;
        endif;
        return $result;              
    }
    
    function check_ban($email='') {
        $result = FALSE;
        if($email !='' && $email != NULL):
            $rows = $this->db->get_where('user',array('email'=>$email,'status'=>'enable'))->num_rows();
            if($rows > 0):
                $result = TRUE;
            endif;
        endif;
        return $result;              
    }
    
    function get_emailtoid($email=''){
        if($email!='' && $email!=null && !empty($email)):
        return $this->db->get_where('user' , array('email'=>$email))->row()->uid;
        endif;
    }
    function get_idtoemail($id=''){
        if($id!='' && $id!=null && !empty($id)):
        return $this->db->get_where('user' , array('uid'=>$id))->row()->email;
        endif;
    }
    function get_reftoemail($id=''){
        if($id!='' && $id!=null && !empty($id)):
        return $this->db->get_where('user' , array('rfid'=>$id))->row()->email;
        endif;
    }
    function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
    }
    
    function get_daily_points($email='',$day='') {
    if($email !='' && $email != NULL):
    $points = $this->db->get_where('user',array('uid'=>$email,'date'=>$day))->row()->points;
    return $points==null?0:$points;
    endif;
    }
    function cpd_build($userid=''){
        $CPA_UID=$this->db->get_where('e_general_setting',array('key'=>'CPA_UID'))->row()->value;
        $CPA_KEY=$this->db->get_where('e_general_setting',array('key'=>'CPA_API_KEY'))->row()->value;
        $url='http://cpabuild.com/public/offers/feed.php?user_id='.$CPA_UID.'&api_key='.$CPA_KEY.'&s1='.$userid.'&s2=&ip='.$this->getUserIpAddr();
        $this->http_model->header['user-agent']='Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.113 Mobile Safari/537.36';
        $data=json_decode($this->http_model->get_http($url));
        for($i=0;$i<count($data);$i++){
        echo'<div class="col-md-2 d-flex align-items-stretch api-offer-card">
        <div class="card text-center" style="border: 1px solid #1572E8 !important; width: 100%;">
            <h4 class="card-header text-center" style="text-align: left;"><b>'.$data[$i]->name.'</b></h4>
            <div class="card-body">
                <img class="img-fluid image-size" src="/u_assets/img/offers_api_icon/cpa-icon.png" style="max-height: 200px;width:200px;" alt="title">
            </div>
            <a class="card-footer btn btn-primary text-white btn-block show-modal" href="#" class="title" data-offer-title="'.$data[$i]->name.'" data-offer-description="'.$data[$i]->conversion.'" data-offer-link="'.$data[$i]->url.'" data-conversion-desc="'.$data[$i]->conversion.'" data-network-name="CPABuild" data-offer-point="9"><b>Earn '.($data[$i]->payout*100).' Points</b></a>
        </div>
    </div>';
        }
    }
}