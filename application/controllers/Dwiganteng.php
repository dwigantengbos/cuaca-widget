<?php if
( ! defined('BASEPATH')) exit('No direct script access allowed');



class Dwiganteng extends CI_Controller{
    
    
    public function index()
	 {
	 	// $this->load->helper('custom');
	 	// tampilkan_error('test');
	 	
	 	$api = new RestClient([			
		    'base_url' => 'https://ibnux.github.io/BMKG-importer',	
		    'format' => "json",	    
		    'headers' => [
		    	
		    ],
		    'curl_options' => [
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false
            ]
		]);

	 	$result = $api->get("cuaca/501320");
	 	$data = []; //array();
	 	$data['name'] = "DWI GANTENG BOS";
	 	$data['data'] = $result->decode_response(); 
	 	$this->load->view('Dwiganteng', $data);
	 }
}