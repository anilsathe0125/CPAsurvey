<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Http_model extends CI_Model
{
    public $header;
    function __construct()
    {
        parent::__construct();
    }
    
    public function get_http($url)
    {
	if(!empty($this->header)) 
	{
	//$this->header[]="REMOTE_ADDR:".$ip;	
   $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_HTTPHEADER,$this->header);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLINFO_HEADER_OUT, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);	
	$ctt =curl_exec($ch);
	curl_close($ch);
	return $ctt;
	}
	else return 'Headpoint not found.';
	}
}
?>