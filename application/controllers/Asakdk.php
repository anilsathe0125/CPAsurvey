<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Asakdk extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$CI =& get_instance();
		$CI->load->library('session');
		$this->load->helper('url');
		// $this->load->helper('delpha_helper');	
		// frontendcheck();
		$this->load->model('Adminmodel');
	}
    public function test(){
        //echo $this->Adminmodel->get_user_email(7);
    }
	public function index(){
		if($this->session->userdata('id')) {
			$data['settinglist'] = $this->Adminmodel->settings_data();
			redirect(base_url().'asakdk/dashboard',$data);
		}else{
			$data['settinglist'] = $this->Adminmodel->settings_data();
			$this->load->view("admin/login",$data);
		}
	}

	public function adminlogin(){
		$email= $this->input->post('email');
		$password= $this->input->post('password');
		$where='password="'.$password.'" and email="'.$email.'"';
		$result = $this->Adminmodel->admin_varify($where);

		if(count($result) > 0) {
			$this->session->set_userdata('email',$result[0]->email);
			$this->session->set_userdata('id',$result[0]->id);	
			$this->session->set_userdata('name',$result[0]->fullname);			
			echo '100';
		} else {
			echo '200'; 
		}
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		redirect(base_url().'/login');
	}

	public function dashboard(){
		


		/*for Coupon Count*/
		$result = $this->Adminmodel->coupon_list();
		$data['rcoupon']=sizeof($result);

		/*Register User*/
		$result = $this->Adminmodel->userlist();
		$data['register_user']=sizeof($result);

		$data['settinglist'] = $this->Adminmodel->settings_data();

		$this->load->view("admin/dashboard", $data);
	}

	/*======================Coupon List=============================*/

	public function rcouponlist(){
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$data['categorydata'] = $this->Adminmodel->coupon_list();
		$this->load->view("admin/rcouponlist",$data);
	}

	public function addrcoupon(){
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$this->load->view("admin/addrcoupon",$data);
	}

	public function savercoupon(){
		$coupon_name=$_POST['coupon_name'];
		$coupon_image=$this->imageupload($_FILES['coupon_image'],'img', FCPATH . 'assets/img/cards/');
        $coupon_code=$_POST['coupon_code'];
        $coupon_points=$_POST['coupon_points'];
        $coupon_expiry=$_POST['coupon_expiry'];

		$data = array(
			'rcname' => $coupon_name,
			'img' => $coupon_image,
			'rccode' =>$coupon_code,
			'rcpoints' =>$coupon_points,
			'rcexpire' =>$coupon_expiry,
			'rcdate'=>date('Y-m-d h:i:s'),
			'rstatus'=>'enable'
		);

		$rcid=$this->Adminmodel->add_rcoupon($data);
		
		if($rcid){
			$res=array('status'=>'200','msg'=>'New coupon Create.','id'=>$rcid);
			echo json_encode($res);exit;
		}else{
			$res=array('status'=>'400','msg'=>'fail');
			echo json_encode($res);exit;
		}
	}

	public function editcoupon(){
		$id=$_GET['id'];
		$where='rcid="'.$id.'"';
		$data['coupon'] = $this->Adminmodel->get_rcoupon($where);
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$this->load->view("admin/editcoupon",$data);
	}
	
	public function updatecoupon(){
		$coupon_name=$_POST['coupon_name'];
		if (isset($_FILES['coupon_image']) && !empty($_FILES['coupon_image']['name'])) {
			
			$coupon_image=$this->imageupload($_FILES['coupon_image'],'category_image', FCPATH . 'assets/img/cards/');	
		}else{
			$coupon_image=$_POST['couponimage'];	
		}
		$coupon_name=$_POST['coupon_name'];
        $coupon_code=$_POST['coupon_code'];
        $coupon_points=$_POST['coupon_points'];
        $coupon_expiry=$_POST['coupon_expiry'];		
		
		$id=$_POST['id'];
		$data = array(
			'rcname' => $coupon_name,
			'img' => $coupon_image,
			'rccode' =>$coupon_code,
			'rcpoints' =>$coupon_points,
			'rcexpire' =>$coupon_expiry,
			'rcdate'=>date('Y-m-d h:i:s'),
		);
		$cat_id=$this->Adminmodel->update_status_rcoupon($id,$data);
		if($cat_id){
			$res=array('status'=>'200','msg'=>'Update coupon success','id'=>$cat_id);
			echo json_encode($res);exit;
		}else{
			$res=array('status'=>'400','msg'=>'fail');
			echo json_encode($res);exit;
		}
	}

	/*======================End Coupon=============================*/
	/*======================Card List=============================*/

	public function cardlist(){
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$data['cards'] = $this->Adminmodel->card_list();
		$this->load->view("admin/cardlist",$data);
	}
	
	public function addcard(){
	    $data['settinglist'] = $this->Adminmodel->settings_data();
		$this->load->view("admin/addcard",$data);    
	}
	
	public function savecard(){
		$card_name = $_POST['card_name'];
		$card_price = $_POST['card_price'];
		$card_points = $_POST['card_points'];
		$card_desc = $_POST['card_desc'];
		$card_image = $this->imageupload($_FILES['card_image'],'card_i', FCPATH . 'assets/img/cards/');;
		
		$data = array(
			'rc_name' => $card_name,
			'rc_image' => $card_image,
			'rc_price' =>$card_price,
			'rc_points' =>$card_points,
			'rc_desc'   =>$card_desc,
			'rc_date'=>date('Y-m-d h:i:s'),
			'rc_status'=>'enable'
		);

		$rc_id=$this->Adminmodel->add_card($data);
		
		if($rc_id){
			$res=array('status'=>'200','msg'=>'New Card Create.','id'=>$rc_id);
			echo json_encode($res);exit;
		}else{
			$res=array('status'=>'400','msg'=>'fail');
			echo json_encode($res);exit;
		}

	}
	
	public function editcard(){
		$id=$_GET['id'];
		$where='rc_id="'.$id.'"';
		$data['card'] = $this->Adminmodel->get_card($where);
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$this->load->view("admin/editcard",$data);
	}
	
	public function updatecard(){
		$card_name=$_POST['card_name'];
		if (isset($_FILES['card_image']) && !empty($_FILES['card_image']['name'])) {
			
			$card_image=$this->imageupload($_FILES['card_image'],'card_image', FCPATH . 'assets/img/cards/');	
		}else{
			$card_image=$_POST['cardimage'];	
		}
        $card_price=$_POST['card_price'];
        $card_points=$_POST['card_points'];
		$card_desc=$_POST['card_desc'];
		
		$id=$_POST['id'];
		$data = array(
			'rc_name' => $card_name,
			'rc_image' => $card_image,
			'rc_price' =>$card_price,
			'rc_points' =>$card_points,
			'rc_desc'   =>$card_desc
		);
		$rc_id=$this->Adminmodel->update_status_card($id,$data);
		if($rc_id){
			$res=array('status'=>'200','msg'=>'Update coupon success','id'=>$rc_id);
			echo json_encode($res);exit;
		}else{
			$res=array('status'=>'400','msg'=>'fail');
			echo json_encode($res);exit;
		}
	}
	/*======================End Card=============================*/	
	/*======================Social Offer=========================*/	
		
	public function social_list(){
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$data['social'] = $this->Adminmodel->social_list();
		$this->load->view("admin/social_list",$data);
	}
	
	public function add_social(){
	    $data['settinglist'] = $this->Adminmodel->settings_data();
		$this->load->view("admin/add_social",$data);    
	}

	public function save_social(){
		$so_network = $_POST['network'];
		$so_link = $_POST['social_link'];
		$so_points = $_POST['social_points'];

		$data = array(
			'so_network' => $so_network,
			'so_image' => '/assets/img/social/'.$so_network.'.png',
			'so_link' =>$so_link,
			'so_points' =>$so_points,
			'so_date'=>date('Y-m-d h:i:s'),
			'so_status'=>'enable'
		);

		$so_id=$this->Adminmodel->add_social($data);
		
		if($so_id){
			$res=array('status'=>'200','msg'=>'New Social Offer Create.','id'=>$so_id);
			echo json_encode($res);exit;
		}else{
			$res=array('status'=>'400','msg'=>'fail');
			echo json_encode($res);exit;
		}

	}
	
	public function edit_social(){
		$id=$_GET['id'];
		$where=$id;
		$data['social'] = $this->Adminmodel->get_social($where);
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$this->load->view("admin/edit_social",$data);
	}

	public function update_social(){
		$so_network=$_POST['network'];
        $so_link=$_POST['social_link'];
        $so_points=$_POST['social_points'];
		$id=$_POST['social_id'];
		$data = array(
			'so_network' => $so_network,
			'so_image'   => '/assets/img/social/'.$so_network.'.png',
			'so_link'    => $so_link,
			'so_points'  => $so_points,
		);
		$so_id=$this->Adminmodel->update_status_social($id,$data);
		if($so_id){
			$res=array('status'=>'200','msg'=>'Update coupon success','id'=>$so_id);
			echo json_encode($res);
            redirect('/asakdk/social_list');			
			exit;
		}else{
			$res=array('status'=>'400','msg'=>'fail');
			echo json_encode($res);exit;
		}
	}	
	/*====================== Reports ============================*/	
		
	public function cpa_report(){
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$data['report'] = $this->Adminmodel->cpa_report();
		$this->load->view("admin/cpa_report",$data);
	}
	
		
	/*====================== End Reports ========================*/		
		
	/*====================== Users =============================*/

	public function adduser(){
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$this->load->view("admin/adduser",$data);
	}

	public function saveuser(){
		$input_name = $_POST['input_name'];
		$input_email = $_POST['input_email'];
		$input_mobile = $_POST['input_mobile'];
		$input_password = $_POST['input_password'];

		$where='mobile_number="'.$input_mobile.'" OR email="'.$input_email.'"';
		$userlist= $this->Adminmodel->userlist_by_where($where);

		if(sizeof($userlist)>0){
			$res=array('status'=>'400','msg'=>'User already exits');
			echo json_encode($res);
			exit;
		}else{
			$data = array(
				'fullname' => $input_name,
				'email' => $input_email,
				'password' => $input_password,
				'mobile_number' => $input_mobile,
				'c_date' => date('Y-m-d h:i:s')
			);

			$res_id=$this->Adminmodel->add_user($data);

			if($res_id){
				$res=array('status'=>'200','msg'=>'New user added Sucessfully',
					'id'=>$res_id);
				echo json_encode($res);
			}else{
				$res=array('status'=>'400','msg'=>'Please try again');
				echo json_encode($res);
			}
		}
	}

    public function user_change_password($action=''){
        $data['id']=$this->input->get('id');
        $password=$this->input->post('password');
        if($data['id']!='' && $data['id']!=null):
        if($action=='update'):
            $data_user['password']=md5($password);
            $res_id=$this->Adminmodel->user_change_password($data['id'],$data_user);
			if($res_id){
				$res=array('status'=>'200','msg'=>'New user password change Sucessfully',
					'id'=>$res_id);
				echo json_encode($res);
				redirect('/asakdk/userlist');
			}else{
				$res=array('status'=>'400','msg'=>'Please try again');
				echo json_encode($res);
			}
        else:
            $this->load->view('admin/user_change_password',$data);
        endif;
        endif;
    }
    
    public function edit_points($action=''){
        $data['id']=$this->input->get('id');
        if($data['id']!='' && $data['id']!=null):
        if($action=='update'):
        $points=$this->input->post('points');
        $comment=$this->input->post('comment');
            $user_email=$this->Adminmodel->get_user_email($data['id']);
            if($user_email!='' && $user_email!=''):
            $data_all_points= array(
				'point'  => $points,
				'time'   => date('h:i:s'),
				'date'   => date('Y-m-d'),
				'title'  => 'admin',
				'uid' => $user_email,
				'comment' => $comment
			);
            $this->Adminmodel->update_pont_tbl($user_email,$points);
            $res_id=$this->Adminmodel->all_points($data_all_points);
            if($res_id){
				$res=array('status'=>'200','msg'=>'User points update Sucessfully',
					'id'=>$res_id);
				echo json_encode($res);
				redirect('/asakdk/userlist');
			}else{
				$res=array('status'=>'400','msg'=>'Please try again');
				echo json_encode($res);
			}
			else:
				$res=array('status'=>'400','msg'=>'Please try again user id wrong');
				echo json_encode($res);
		    endif;	
        else:
            $this->load->view('admin/edit_points',$data);
        endif;
        endif;
    }
    
	public function userlist(){
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$data['userlist'] = $this->Adminmodel->userlist();
		$this->load->view("admin/userlist",$data);
	}

	public function edituser(){
		$id=$_GET['id'];

		$where='id="'.$id.'"';
		$data['userlist'] = $this->Adminmodel->userlistbywhere($where);
		$this->load->view("admin/edituser",$data);
	}

	public function updateuser(){
		$user_name=$_POST['user_name'];
		$user_email=$_POST['user_email'];
		$user_password=$_POST['user_password'];
		$user_number=$_POST['user_number'];
		$id=$_POST['id'];

		$data = array(
			'fullname' => $user_name,
			'email' => $user_email,
			'password' => $user_password,
			'mobile_number' => $user_number,
			'c_date'=>date('Y-m-d h:i:s')
		);

		$cat_id=$this->Adminmodel->update_user($data,$id);
		if($cat_id){
			$res=array('status'=>'200','msg'=>'Sucessfully updated','id'=>$cat_id);
			echo json_encode($res);exit;
		}else{
			$res=array('status'=>'400','msg'=>'failed','id'=>$cat_id);
			echo json_encode($res);exit;
		}
	}


	/*======================End Users=============================*/



	public function settingpage(){
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$where='id="'.$this->session->userdata('id').'"';
		$admin = $this->Adminmodel->admin_varify($where);
		$data['admin'] = $admin[0];
		$this->load->view("admin/settings",$data);
	}

	public function savesetting(){
		$app_name=$_POST['web_name'];
		$app_image_logo=$_FILES['web_image']['name'];
		$app_desc=$_POST['web_desc'];
		$app_privacy=$_POST['web_privacy'];
		$host_email=$_POST['host_email'];
		$app_author=$_POST['web_author'];
		$host_contact=$_POST['host_contact'];
		$host_website=$_POST['host_website'];

		if (isset($_FILES['web_image']) && !empty($_FILES['web_image']['name'])) {
			$config = array(
				'allowed_types' => 'jpg|jpeg|gif|png',
				'upload_path' => FCPATH . 'assets/img'
			);
			$this->load->library('upload');
			$this->upload->initialize($config);
			$this->upload->do_upload('web_image');

			$data3 = array(					 
				'value' => $app_image_logo,                  
			);
               // $where3='key=';
			$this->Adminmodel->update_general_setting($data3,'web_logo');

		}

		$data = array(					 
			'value' => $host_email,                  
		);
               // $where='key="host_email"';
		$this->Adminmodel->update_general_setting($data,'host_email');

		$data1 = array(					 
			'value' => $app_desc,                  
		);
                //$where='key="app_desripation"';
		$this->Adminmodel->update_general_setting($data1,'web_desripation');

		$data2 = array(					 
			'value' => $app_name,                  
		);
		$this->Adminmodel->update_general_setting($data2,'web_name');


		$data_author = array(					 
			'value' => $app_author,                  
		);
		$this->Adminmodel->update_general_setting($data_author,'Author');

		$data_contact = array(					 
			'value' => $host_contact,                  
		);
		$this->Adminmodel->update_general_setting($data_contact,'contact');

		$data_priv = array(					 
			'value' => $app_privacy,                  
		);
		$this->Adminmodel->update_general_setting($data_priv,'privacy_policy');

		$data_website = array(					 
			'value' => $host_website,                  
		);
		$res_id=$this->Adminmodel->update_general_setting($data_website,'website');

		if($res_id){
			$res=array('status'=>'200','msg'=>'Sucessfully updated','id'=>$res_id);
			echo json_encode($res);
		}else{
			$res=array('status'=>'400','msg'=>'fail');
			echo json_encode($res);
		}

	}
	
	public function setting_cpa_build(){
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$where='id="'.$this->session->userdata('id').'"';
		$admin = $this->Adminmodel->admin_varify($where);
		$data['admin'] = $admin[0];
		$this->load->view("admin/setting_cpa_build",$data);
	}
	
	public function save_cpa_setting(){
	    $UID=$_POST['cpa_uid'];
		$KEY=$_POST['cpa_key'];
	    $data_uid = array(					 
			'value' => $UID,                  
		);
		$this->Adminmodel->update_general_setting($data_uid,'CPA_UID');
	    $data_key = array(					 
			'value' => $KEY,                  
		);
        $res_id=$this->Adminmodel->update_general_setting($data_key,'CPA_API_KEY');
		if($res_id){
			$res=array('status'=>'200','msg'=>'Sucessfully updated','id'=>$res_id);
			echo json_encode($res);
		}else{
			$res=array('status'=>'400','msg'=>'fail');
			echo json_encode($res);
		}	
	}
	
	public function delete_record(){
		$id=$_POST['id'];
		$tablename=$_POST['tablename'];
		if($tablename=='rcard'){
			$this->Adminmodel->delete_card($id);
		}elseif ($tablename=='rcoupon') {
			$this->Adminmodel->delete_rcoupon($id);	
		}elseif ($tablename=='social_offer') {
			$this->Adminmodel->delete_social($id);	
		}
		return true;
	}

	public function notification(){
		$data['settinglist'] = $this->Adminmodel->settings_data();
		$this->load->view("admin/notification",$data);
	}

	public function save_admob(){
		$publisher_id=$_POST['publisher_id'];
		$banner_ad=$_POST['banner_ad'];
		$banner_ad_id=$_POST['banner_ad_id'];
		$interstital_ad=$_POST['interstital_ad'];
		$interstital_adid=$_POST['interstital_adid'];
		$interstital_adid_click=$_POST['interstital_adid_click'];
		$custom_ad=$_POST['custom_ad'];

		$data3 = array(					 
			'value' => $publisher_id,                  
		);
               // $where3='key=';
		$this->Adminmodel->update_general_setting($data3,'publisher_id');

		$data = array(					 
			'value' => $banner_ad,                  
		);
               // $where='key="host_email"';
		$this->Adminmodel->update_general_setting($data,'banner_ad');

		$data1 = array(					 
			'value' => $banner_ad_id,                  
		);
                //$where='key="app_desripation"';
		$this->Adminmodel->update_general_setting($data1,'banner_adid');

		$data2 = array(					 
			'value' => $interstital_ad,                  
		);
               // $where2='key="app_name"';
		$this->Adminmodel->update_general_setting($data2,'interstital_ad');

		$data5 = array(					 
			'value' => $interstital_adid,                  
		);
               // $where2='key="app_name"';
		$this->Adminmodel->update_general_setting($data5,'interstital_adid');

		$data4 = array(					 
			'value' => $interstital_adid_click,                  
		);
               // $where2='key="app_name"';
		$this->Adminmodel->update_general_setting($data4,'interstital_adid_click');

		$data_custom_ads = array(					 
			'value' => $custom_ad,                  
		);
		$this->Adminmodel->update_general_setting($data_custom_ads,'custom_ads');

		if (isset($_FILES['web_image1']) && !empty($_FILES['web_image1']['name'])) {
			$BookCoverImage=$this->imageupload($_FILES['web_image1'],'web_image1', FCPATH . 'assets/img/ads/');
		}else{
			$BookCoverImage=$this->imageupload($_FILES['web_image_logo1'],'web_image_logo1', FCPATH . 'assets/images/app');
		}

		$data3 = array(					 
			'value' => $BookCoverImage,                  
		);
		$this->Adminmodel->update_general_setting($data3,'custom_image');
	}

	public function save_signal_noti(){
		$one_signal=$_POST['one_signal'];
		$rest_key=$_POST['rest_key'];

		$data = array(					 
			'value' => $one_signal,                  
		);
               // $where='key="host_email"';
		$this->Adminmodel->update_general_setting($data,'onesignal_apid');
		$data1 = array(					 
			'value' => $rest_key,                  
		);
                //$where='key="app_desripation"';
		$this->Adminmodel->update_general_setting($data1,'onesignal_rest_key');

	}

	public function change_password(){
		$password  =$_POST['password'];
		$confirm_password  =$_POST['confirm_password'];
		$where = $_POST['admin_id'];
		$data =  array('password' => $password );

		$res_id=$this->Adminmodel->update_user($data,$where);

		if($res_id){
			$res=array('status'=>'200','msg'=>'Sucessfully updated','id'=>$res_id);
			echo json_encode($res);
		}else{
			$res=array('status'=>'400','msg'=>'fail');
			echo json_encode($res);
		}
	}

	public function save_payment(){
		$paypal_name=$_POST['paypal_name'];
		$paypal_client_id=$_POST['paypal_client_id'];
		$upi_name=$_POST['upi_name'];
		$upi_id=$_POST['upi_id'];

		$data = array(					 
			'value' => $paypal_name,                  
		);
		$this->Adminmodel->update_general_setting($data,'paypal_name');
		
		$data1 = array(					 
			'value' => $paypal_client_id,                  
		);
		$this->Adminmodel->update_general_setting($data1,'paypal_client_id');

		$data2 = array(					 
			'value' => $upi_name,                  
		);
		$this->Adminmodel->update_general_setting($data2,'UPI_Name');
		
		$data3 = array(					 
			'value' => $upi_id,                  
		);
		$this->Adminmodel->update_general_setting($data3,'UPI');

	}

	public function savenotification(){
		$setting= $this->Adminmodel->settings_data();

		foreach($setting as $set)
		{
			$setn[$set->key]=$set->value;
		}

		$ONESIGNAL_APP_ID=$setn['onesignal_apid'];
		$ONESIGNAL_REST_KEY=$setn['onesignal_rest_key'];
		$big_picture=$_FILES['video_thumbnail']['name'];
		$tpath2= FCPATH . 'assets/images/book/';
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => FCPATH . 'assets/images/book'
		);
		$this->load->library('upload');
		$this->upload->initialize($config);
		$this->upload->do_upload('video_thumbnail');

		$content = array(
			"en" => $_POST['message']                                                 
		);

		if(isset($_FILES['video_thumbnail']['name']))
		{
			$_FILES['video_thumbnail']['name'];
			$file_path = base_url().'assets/images/book/'.$big_picture;
			$fields = array(
				'app_id' =>  $ONESIGNAL_APP_ID,
				'included_segments' => array('All'),                                            
				'data' => array("foo" => "bar"),
				'headings'=> array("en" => $_POST['title']),
				'contents' => $content,
				'big_picture' =>$file_path                    
			);
		}else
		{
			$file_path = '';  
			$fields = array(
				'app_id' => $ONESIGNAL_APP_ID,
				'included_segments' => array('All'),   
				'data' => array("foo" => "bar"),
				'headings'=> array("en" => $_POST['title']),
				'contents' => $content,
			);
		}

		$fields = json_encode($fields);    

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
			'Authorization: Basic '.$ONESIGNAL_REST_KEY));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);

		curl_close($ch);
		print_r($response);

	}

	public function imageupload($imageName,$imgname, $uploadpath){

		if(empty($imageName['name'])){
			$res=array('status'=>'400','msg'=>'Please Upload Image first.');
			echo json_encode($res);exit;
		}
		if(!empty($imageName['name']) && ($imageName['error']==1 || $imageName['size']>2215000)){
			$res=array('status'=>'400','msg'=>'Max 2MB file is allowed for image.');
			echo json_encode($res);exit;
		}else{
			list($width, $height) = getimagesize($imageName['tmp_name']);
			if($width>1000 || $height >1000){
				$res=array('status'=>'400','msg'=>'Image height and width must be less than 1000px.');
				echo json_encode($res);exit;
			}else{
				$catImg = $imageName['name'];
				$ext = pathinfo($catImg);
				$catImages = str_replace(' ', '_', $ext['filename']);
				$category_image =$catImages.'_'.time().'.'.$ext['extension'];				
				$config = array(
					'allowed_types' => 'jpg|jpeg|gif|png',
					'upload_path' => $uploadpath,
					'file_name' => $category_image
				);
				$this->load->library('upload');
                move_uploaded_file($imageName['tmp_name'],$uploadpath.$category_image);
				return $category_image;
			}

		}
	}

	public function fileupload($imageName,$imgname, $uploadpath){

		if(empty($imageName['name'])){
			$res=array('status'=>'400','msg'=>'Please Upload file first.');
			echo json_encode($res);exit;
		}
		if(!empty($imageName['name']) && ($imageName['error']==1 || $imageName['size']>103790053)){
			$res=array('status'=>'400','msg'=>'Max 10MB file is allowed for image.');
			echo json_encode($res);exit;
		}else{
			
			$catImg = $imageName['name'];
			$ext = pathinfo($catImg);
			$catImages = str_replace(' ', '_', $ext['filename']);
			$category_image =$catImages.time().'.'.$ext['extension'];				
			$config = array(
				'allowed_types' => 'pdf|epub',
				'upload_path' => $uploadpath,
				'file_name' => $category_image
			);
			$this->load->library('upload');
			$this->upload->initialize($config);
			$this->upload->do_upload($imgname);
			return $category_image;
		}
	}

	public function status_change(){
		$id=$_POST['id'];
		$tablename=$_POST['tablename'];
		$status=$_POST['status'];
		if($status=='enable'){
			$status1='disable';
		}else{
			$status1='enable';
		}
		if($tablename=='user'){
			$data1=array('status' => $status1);
			$this->Adminmodel->user_status_change($id,$data1);
		}elseif ($tablename=='rcoupon') {
			$data1=array('rstatus' => $status1);
			$this->Adminmodel->update_status_rcoupon($id,$data1);
		}elseif ($tablename=='rcard') {
			$data1=array('rc_status' => $status1);
			$this->Adminmodel->update_status_card($id,$data1);
		}elseif ($tablename=='social_offer') {
			$data1=array('so_status' => $status1);
			$this->Adminmodel->update_status_social($id,$data1);
		}else{
			$data1=array('cat_status' => $status1);
			$this->Adminmodel->update_status_album($id,$data1);
		}
		return true;	
	}
}
