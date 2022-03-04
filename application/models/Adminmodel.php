<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model{

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function admin_varify($where){
		$this->db->select("*");
		$this->db->from("e_admin");		  
		$this->db->where($where);
		$q = $this->db->get();
		return $q->result();
	}

	/*=====================Redeem Coupon========================*/

	public function coupon_list(){
		$this->db->select("*");
		$this->db->from("rcoupon");	
		$q = $this->db->get();
		return $q->result();
	}

	public function add_rcoupon($data){
		$query = $this->db->insert('rcoupon',$data);
 		return $this->db->insert_id();	
	}

	public function delete_rcoupon($id){
 		$this->db->delete('rcoupon', array('rcid' => $id)); 
	}
	
	public function get_rcoupon($where){
		$this->db->select("*");
		$this->db->from("rcoupon");
		$this->db->where($where);
		$q = $this->db->get();
		return $q->result();
	}

	public function update_status_rcoupon($id,$status){
		$this->db->where('rcid', $id);
 		return $this->db->update('rcoupon', $status);
	}

	/*=====================End Coupon========================*/
	/*=====================Redeem Card========================*/

	public function card_list(){
		$this->db->select("*");
		$this->db->from("rcard");	
		$q = $this->db->get();
		return $q->result();
	}
	
    public function add_card($data){
		$query = $this->db->insert('rcard',$data);
 		return $this->db->insert_id();	
	}

	public function delete_card($id){
 		$this->db->delete('rcard', array('rc_id' => $id)); 
	}
	
	public function get_card($where){
		$this->db->select("*");
		$this->db->from("rcard");
		$this->db->where($where);
		$q = $this->db->get();
		return $q->result();
	}

	public function update_status_card($id,$status){
		$this->db->where('rc_id', $id);
 		return $this->db->update('rcard', $status);
	}
	/*=====================End Card===============================*/
	/*=====================Social Offer===========================*/
	public function social_list(){
		$this->db->select("*");
		$this->db->from("social_offer");	
		$q = $this->db->get();
		return $q->result();
	}
	
    public function add_social($data){
		$query = $this->db->insert('social_offer',$data);
 		return $this->db->insert_id();	
	}

	public function delete_social($id){
 		$this->db->delete('social_offer', array('soid' => $id)); 
	}
	
	public function get_social($where){
		$this->db->select("*");
		$this->db->from("social_offer");
		$this->db->where('soid',$where);
		$q = $this->db->get();
		return $q->result();
	}

	public function update_status_social($id,$status){
		$this->db->where('soid', $id);
 		return $this->db->update('social_offer', $status);
	}
	/*=====================End Socail Offer====================*/
	
	/*===================== Reports ===========================*/
	public function cpa_report(){
		$this->db->select("*");
		$this->db->from("cpa_build");	
		$q = $this->db->get();
		return $q->result();
	}
    /*===================== End Reports =======================*/
    
	/*=====================Users===============================*/

	public function add_user($data){
		$query = $this->db->insert('e_user',$data);
 		return $this->db->insert_id();	
	}
	public function get_user_email($id=''){
	    $this->db->select('email');
        $this->db->where('uid', $id);
 		return $this->db->get('user')->row()->email;
	}
	public function userlist(){
		$this->db->select("*");
		$this->db->from("user");	
		$this->db->order_by("fname", "rdate");
		$q = $this->db->get();
		return $q->result();
	}

	public function userpoints($uid=''){
	    $email=$this->get_user_email($uid);
		$this->db->select("*");
		$this->db->from("pont_tbl");	
		$this->db->where('uid',$email);
		$q = $this->db->get();
		return $q->row();
	}

	public function user_change_password($id='',$data=''){
		$this->db->where('uid', $id);
 		return $this->db->update('user', $data);
	}

	public function userlist_by_where($where){
		$this->db->select("*");
		$this->db->from("e_user");	
		$this->db->where($where);
		$q = $this->db->get();
		return $q->result();
	}

	public function user_status_change($where,$data){
		$this->db->where('uid', $where);
 		$this->db->update('user', $data);
	}

	public function update_user($data,$where){
		$this->db->where('id', $where);
 		return $this->db->update('e_admin', $data);
	}
	/*==================User Points============================*/
	public function update_pont_tbl($where,$points){
	    $pdata='reversal+'.$points;
        $this->db->set('reversal',$pdata,FALSE);
        $this->db->where('uid',$where);
        $this->db->update('pont_tbl');
	}

	public function all_points($data){
		$query = $this->db->insert('all_point',$data);
 		return $this->db->insert_id();	
	}
	
	/*==================End Users Points============================*/
	/*==================End Users============================*/


	public function settings_data(){
		$this->db->select("*");
		$this->db->from("e_general_setting");	
		$q = $this->db->get();
		return $q->result();
	}

	public function update_general_setting($data,$where){
		$ndata = array(
			'key' => $where
		);
		if(!$this->check_general_skey($where))
		$this->db->insert('e_general_setting',$ndata);
 		$this->db->where('key', $where);
		$this->db->update('e_general_setting', $data);
		return true;
	}
	function check_general_skey($where){
		$this->db->select("*");
		$this->db->from("e_general_setting");
		$this->db->where('key',$where);
		$q=$this->db->get();
		if(count($q->result())>0)
		return true;
	}
	
}