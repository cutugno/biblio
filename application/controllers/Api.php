<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller {

    function __construct() {
        parent::__construct();

        // Configure limits on our controller methods
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
		
    }  	
    
    public function status_get($test) {
		try {
			if (null==$test) {
				$code=400;
				throw new Exception('Parametro test mancante');
			}
			$result=$test;
			$code=200;
		} catch (Exception $e) {	
			$result=$e->getMessage();		
		} finally {
			$this->response(["code"=>$code,"result"=>$result]); 
		}
	}
	   
}
