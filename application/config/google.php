<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '953539035530-fdgr7puvn5av03vq0qblinfed697t1ho.apps.googleusercontent.com';
$config['google']['client_secret']    = '1-1CPZ6I5CqJazdSP1p-DO6s';
$config['google']['redirect_uri']     = 'https://demo.realcardgenerator.com/';
$config['google']['application_name'] = 'Login to demo.realcardgenerator.com';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();